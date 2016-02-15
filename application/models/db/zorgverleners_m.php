<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Zorgverleners_m extends MY_Model {
   
    /**
     *
     * @var string $_table DB table
     */
    protected $_table = 'zorgverleners z';
    
    /**
     * 
     * @param string $fields
     * @param array $where
     * @param string $order_by
     * @return array|object
     */
    function get_zorgverleners($fields, $where, $order_by = null)
    {
        $this->db->select($fields)->order_by($order_by);

        return $this->get_many_by($where);
    }
}
