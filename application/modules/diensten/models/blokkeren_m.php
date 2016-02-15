<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Blokkeren_m extends MY_Model {

    function __construct()
    {
        $this->load->model('db/diensten_m');
    }
    
    /**
     * 
     * @return type
     */
    public function blokkeren()
    {
        $categorie = $this->input->post('categorie');
        $date = $this->input->post('date');
        $client = $this->input->post('client');

        if ($categorie != 'Alle') {
            $where['categorie'] = $categorie;
        }

        if ($this->input->post('status') == 'blokkeren') {
            $where['datum <='] = $date;
            $data['blokkering'] = 1201;
        } else {
            $where['datum >='] = $date;
            $data['blokkering'] = 1202;
        }

        if ($client != 'Alle') {
            $where['client_id'] = $client;
        }

        return $this->diensten_m->updateDiensten($where, $data);
    }
}
