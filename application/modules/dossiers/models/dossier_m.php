<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Dossier_m extends MY_Model {
    
    /**
     *
     * @var string $_table DB table
     */
    protected $_table = 'clienten c';

    function __construct()
    {
        parent::__construct();
        
        $this->load->model('db/clienten_m');
    }
    
    /**
     * 
     * @param int $id_client
     * @return object
     */
    function getClient($id_client)
    {
        $fields = '
            titel,
            voorletters,
            voorvoegsel,
            achternaam,
            DATE_FORMAT(geboorte_datum, "%d-%m-%Y") as geboorte_datum,
            bsn,
            adres,
            woonplaats,
            postcode,
            huisnummer,
            huisnummer_toevoeging,
            telefoonnummer';

        return $this->clienten_m->getClient($id_client, $fields);
    }

    /**
     * 
     * @return array|object
     */
    function getClienten()
    {
        $fields = '
            id,
            titel,
            voorletters,
            voorvoegsel,
            achternaam,
            adres,
            CONCAT_WS(" - ", (huisnummer), (huisnummer_toevoeging)) as huisnummer,
            postcode,
            woonplaats';

        $where = array(
            'status' => 'actief'
        );

        return $this->clienten_m->getClienten($fields, $where);
    }
}
