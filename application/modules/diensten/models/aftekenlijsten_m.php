<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Aftekenlijsten_m extends MY_Model {

    public function __construct()
    {
        parent::__construct();

        // Load models
        $this->load->model('db/diensten_m');
        $this->load->model('db/clienten_m');
    }

    /**
     * List of clienten
     * 
     * @return Array|Object List of clienten (client_id, naam)
     */
    public function getClienten()
    {
        $fields = 'client_id, CONCAT_WS(" ", (achternaam), (voorletters)) as naam';

        $where = array(
            'datum >=' => $this->input->post('start_date'),
            'datum <=' => $this->input->post('end_date')
        );

        $order_by = 'achternaam asc';

        return $this->diensten_m->getClienten($fields, $where, $order_by);
    }

    /**
     * List of diensten
     * 
     * @param Int $id dienst_id
     * @return Array|Object List of diensten
     */
    public function getDiensten($id)
    {
        $fields = '
            DATE_FORMAT(datum, "%d-%m") as datum,
            DATE_FORMAT(van, "%H:%i") as van,
            DATE_FORMAT(tot, "%H:%i") as tot,
            LEFT(CONCAT_WS(" ", (z.voorletters), (z.achternaam)), (16)) as zorgverlener';

        $where = array(
            'client_id' => $id,
            'datum >=' => $this->input->post('start_date'),
            'datum <=' => $this->input->post('end_date')
        );

        return $this->diensten_m->getDiensten($fields, $where);
    }

    /**
     * Get the fullname of client
     * 
     * @param Int $id client_id
     * @return Object Fullname of client (titel, voorletters, achternaam)
     */
    public function getClientNaam($id)
    {
        $fields = 'CONCAT_WS(" ", (titel), (voorletters), (achternaam)) as client';

        return $this->clienten_m->getClient($id, $fields);
    }

    /**
     * Add additional rows
     * 
     * Add 20% additional rows if $row_count is greater than 15. Default additional rows is 5
     * 
     * @param Int $rows
     * 
     * @return int Number of additional rows
     */
    public function aanvullingen($row_count)
    { 
        return $row_count > 15 ? $row_count * 0.2 : 5;
    }
}
