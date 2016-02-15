<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Colabris_m extends MY_Model {

    function __construct()
    {
        $this->load->model('db/diensten_m');
    }

    /**
     * 
     * @param array $data
     * @return array|object
     */
    public function getDiensten($data)
    {
        $fields = '
            clienten.bsn,
            client_id as externnummer,
            AFGENPRODUCT51 as productcode,
            CONCAT(d.categorie, "-ZIN") as financieringsvorm,
            DATE_FORMAT(datum, "%d-%m-%Y") as datum,
            DATE_FORMAT(van, "%H:%i") as van,
            DATE_FORMAT(tot, "%H:%i") as tot,
            duur as aantal';

        if (! $data['categorie']) {
            $data['categorie'] = array('WLZ', 'WMO', 'ZVW');
        }

        $where = array(
            'datum >=' => $data['van'],
            'datum <=' => $data['tot'],
            'export' => 0,
            'd.categorie' => $data['categorie']
        );

        $diensten = $this->diensten_m->as_array()->getDiensten($fields, $where);

        foreach($diensten as $key => $value)
        {
            $diensten[$key]['ProductCode'] = $this->_categorieOmzetten($diensten[$key]['productcode']);
        }

        $titel = array(
            'BSN',
            'Externnummer',
            'ProductCode',
            'Financieringsvorm',
            'Datum',
            'Van',
            'Tot',
            'Aantal'
        );

        array_push($diensten, $titel);

        return $diensten;
    }
    
    /**
     * 
     * @param array $data
     * @param array $diensten
     * @return boolean
     */
    function arrayToCsv($data, $diensten)
    {
        $diensten = $this->_arrayToStrings($diensten);

        $this->load->helper('file');

        if (! write_file($data['bestand_locatie'].$data['bestandsnaam'].'.csv', $diensten)) {
            echo 'Unable to write the file';

            return false;
        } else {
            echo '<p>Bestand: <b>'.$data['bestandsnaam'].'</b>, voor periode: '. $data['maand'] .' is succesvol aangemaakt! </p>';

            return true;
        }
    }
    
    /**
     * 
     * @return ing CAK volgnummer
     */
    function getCakVolgnummer()
    {
        $this->db->select_max('export');

        $result = $this->diensten_m->get_all();

        return $volgnummer = $result[0]->export + 1;
    }
    
    /**
     * 
     * @param array $data
     * @param boolval $status
     * @return int
     */
    function cakBlokkeren($data, $status = true)
    {
        if (! $data['categorie']) {
            $data["categorie"] = array('WLZ', 'WMO', 'ZVW');
        }

        $where = array(
            'datum >=' => $data['van'],
            'datum <=' => $data['tot'],
            'd.categorie' => $data['categorie']
        );

        $data['export'] = $status ? $data['bestandsnaam'] : 0;

        return $this->diensten_m->update_by($where, $data);
    }

    /**
     * 
     * @param array $data
     * @return boolval
     */
    function findNC($data)
    {
        if (! $data["categorie"]) {
            $data["categorie"] = array("WLZ","WMO","ZVW");
        }

        $where = array(
            'datum >=' => $data['van'],
            'datum <=' => $data['tot'],
            'export' => 0,
            'tarief_code' => 'NC',
            'd.categorie' => $data['categorie']
        );

        $count = $this->diensten_m->count_by($where);

        return $count ? true : false;
    }
    
    /**
     * 
     * @param string $code
     * @return string
     */
    protected function _categorieOmzetten($code)
    {
        switch($code)
        {
            //Oude R producten
            case 20: //PV
                $code = 'H126';
                break;

            case 12: //VP
                $code = 'H104';
                break;

            case 200: //BG
                $code = 'H300';
                break;


            //ZVW Producten
            case 1000: //PV
                $code = 1000;
                break;

            case 1005: //AIV
                $code = 1005;
                break;

            case 1002: //VP
                $code = 1002;
                break;

            case 1008: //IPGB
                $code = 1008;
                break;


            //WLZ Producten
            case 500: //PV
                $code = 'H126';
                break;

            case 503: //BG
                $code = 'H300';
                break;

            case 528: //VP
                $code = 'H104';
                break;

            case 1008: //IPGB
                $code = 1008;
                break;


            //WMO Producten
            case 428: //BG
                $code = '02RB1';
                break;


            //NC
            case 0: //BG
                $code = 'NC';
                break;
        }

        return $code;
    }
    
    /**
     * 
     * @param array $array
     * @return string
     */
    protected function _arrayToStrings($array)
    {
        $strings = null;

        foreach ($array as $fields)
        {
            $strings =  implode(',', $fields) . '\n' . $strings;
        }

        return $strings;
    }
}
