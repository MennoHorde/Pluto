<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Wijkzorg_m extends MY_Model {

    public function __construct()
    {
        $this->load->model('db/diensten_m');
        $this->load->model('db/zorgverleners_m');
    }
    
    /**
     * 
     * @return array
     */
    function dropdownRoutes()
    {
        $a = array_combine(
            range(1, 10),
            range(1, 10)
        );

        $b = array(
            'KA' => 'KA',
            'KB' => 'KB',
            'KC' => 'KC',
            'KD' => 'KD'
        );

        return $a + $b;
    }

    /**
     * 
     * @param array $date jjjj-mm-dd
     * @return array|object
     */
    function getDay($date)
    {
        $date = implode('-', $date);

        $route = $this->uri->segment(7);

        $fields = '
            d.categorie,
            DATE_FORMAT(d.datum, "%a %d-%m-%Y") datum,
            DATE_FORMAT(d.van, "%H:%i") van,
            DATE_FORMAT(d.tot, "%H:%i") tot,
            d.reiskosten,
            d.route,
            d.opmerking,
            d.zorgverlener_id,
            CONCAT_WS(" ", (z.achternaam), (z.voorletters)) zorgverlener,
            CONCAT_WS(" ", (c.achternaam), (c.voorletters)) client';


        $where = array(
            'd.datum' => $date,
            'd.route' => $route
        );

        return $this->diensten_m->getDiensten($fields, $where);
    }

    /**
     * 
     */
    function updateZorgverlener()
    {
        $where = array(
            'route' => $this->input->post('route'),
            'datum' => $this->input->post('jaar') . '-' . $this->input->post('maand') . '-'. $this->input->post('dag')
        );

        $data = array(
            'id_zorgverlener' => $this->input->post('zorgverlener')
        );

        $this->diensten_m->updateDiensten($where, $data);
    }
    
    /**
     * 
     * @return array
     */
    public function dropdownZorgverleners()
    {
        $fields = '
            id as id_zorgverlener,
            CONCAT_WS(" ", (achternaam), (voorletters)) as zorgverleners';

        $where = array(
            'status' => 'actief'
        );

        $order_by = 'achternaam asc';

        $zorgverleners = $this->zorgverleners_m->as_array()->get_zorgverleners($fields, $where, $order_by);

        $zorgverleners = array_to_dropdown($zorgverleners);

        return $zorgverleners;
    }
}
