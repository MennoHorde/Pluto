<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Users_m extends MY_Model
{
    /**
     *
     * @var string $_table DB table
     */
    protected $_table = 'users u';

    public function __construct()
    {
        parent::__construct();
    }

    /**
     * 
     * @return array Username as key and value
     */
    public function dropdownUsernames()
    {
        $where = array(
                'active' => 1
        );

        $this->db->where($where);

        return $this->dropdown('username', 'username');
    }
}
