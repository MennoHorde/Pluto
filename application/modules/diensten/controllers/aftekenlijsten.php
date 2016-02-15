<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Aftekenlijsten extends MY_Controller {

    function __construct()
    {
        parent::__construct();

        // Include models
        $this->load->model('aftekenlijsten_m');
    }

    /**
     * Default view
     */
    function index()
    {
        // Include js file from /assets/js/
        $this->data['js_scripts'] = array('pages/aftekenlijsten.js');
        
        // Set data
        $this->data['clienten'] = array();
        
        // Validate form
        $this->form_validation->set_rules('start_date', 'Begin datum', 'required');
        $this->form_validation->set_rules('end_date', 'Eind datum', 'required');

        if ($this->form_validation->run()) {
       
            // @var Object $clienten List of clienten
            $this->data['clienten'] = $this->aftekenlijsten_m->getClienten();
        }

        // Load view
        $this->loadView('aftekenlijsten/index');
    }

    function detail()
    {
        // Include js file from /assets/css/
        $this->data['css_styles'] = array('aftekenlijsten/detail.css');
        
        // Validate form
        $this->form_validation->set_rules('clienten_id', 'Clienten', 'required');
        
        if ($this->form_validation->run()) {
            // Set data
            $this->data['start_date'] = $this->input->post('start_date');
            $this->data['end_date'] = $this->input->post('end_date');
            $this->data['clienten_id'] = $this->input->post('clienten_id');

            // Load view
            $this->loadView('aftekenlijsten/detail', false);
        } else {
            // @todo handle form validation if it fails
            die('form validatie is mislukt');
        }
    }
    
}
