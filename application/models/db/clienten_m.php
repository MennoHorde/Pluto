<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Clienten_m extends MY_Model {

    /**
     *
     * @var string $_table DB table
     */
    protected $_table = 'clienten c';
    
    /**
     * 
     * @param int $id Id of client
     * @param string $fields Table fields to select
     * @return Object Client data
     */
    function getClient($id, $fields)
    {
        $this->db->select($fields);

        return $this->get($id);
    }
    
    /**
     * 
     * @param string $fields Table fields to select
     * @param array $where select where, associative array 
     * @param string $order_by order by column asc or desc
     * @return array|object
     */
    function getClienten($fields, $where, $order_by=null)
    {
        $this->db->select($fields)->order_by($order_by);

        return $this->get_many_by($where);
    }
    
    /**
     * 
     * @return array Id as key and name as value
     */
    public function dropdownClienten()
    {
        $fields = 'id, CONCAT_WS(" ", (achternaam), (voorletters)) as client';

        $where = array(
            'status' => 'actief'
        );

        $order_by = 'achternaam asc';

        $clienten = $this->as_array()->getClienten($fields, $where, $order_by);

        $clienten = array_to_dropdown($clienten);

        $clienten = array('Alle' => 'Alle') + $clienten;

        return $clienten;
    }
}
