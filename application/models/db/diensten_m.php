<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Diensten_m extends MY_Model {
    /**
     *
     * @var string $_table DB table
     */
    protected $_table = 'diensten d';

    /**
     * 
     * @param int $id
     * @param string $fields
     * @return object
     */
    public function getDienst($id, $fields = null)
    {
        $this->db->select($fields);

        return $this->_withClienten()->_withZorgverleners()->get($id);
    }

    /**
     * 
     * @param string $fields
     * @param array $where
     * @param string $order_by
     * @return array|object
     */
    public function getDiensten($fields, $where, $order_by = null)
    {
        $this->db->select($fields)->where_in($where)->order_by($order_by);

        return $this->_withClienten()->_withZorgverleners()->get_many_by($where);
    }

    /**
     * 
     * @param int $id
     * @param array $data
     * @return int dienst_id
     */
    public function updateDienst($id, $data)
    {
        // @todo run through validation first
        return $this->update($id, $data);
    }
    
    /**
     * 
     * @param array $where
     * @param array $data
     * @return type
     */
    public function updateDiensten($where, $data)
    {
        // @todo run through validation first
        return $this->update_by($where, $data);
    }
    
    /**
     * 
     * @param string $fields
     * @param array $where
     * @param string $order_by
     * @return array|object
     */
    public function getClienten($fields, $where, $order_by = null)
    {
        $this->db->distinct()->select($fields)->where_in($where)->order_by($order_by);

        return $this->_withClienten()->get_many_by($where);
    }
    
    /**
     * With clienten
     * 
     * Join clienten table
     * 
     * @return \Diensten_m
     */
    private function _withClienten()
    {
        $this->db->join('clienten c', 'd.client_id = c.id');

        return $this;
    }

    /**
     * With zorgverleners
     * 
     * Join zorgverleners table
     * 
     * @return \Diensten_m
     */
    private function _withZorgverleners()
    {
        $this->db->join('zorgverleners z', 'd.zorgverlener_id = z.id');

        return $this;
    }
}
