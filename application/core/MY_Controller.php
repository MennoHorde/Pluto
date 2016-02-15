<?php defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends CI_Controller {
    
    /**
     *
     * @var array $data The set data can be used through out the application
     */
    public $data = array();
    
    function __construct() 
    {
        parent::__construct();
        
        // Set local language
        setlocale(LC_ALL, 'nl_NL');
        
        // Pages to exclude from redirecting to login page
        $no_redirect = array('auth/login', 'auth/forgot_password');
        
        // Check if user is logged in, else redirect user to login page
        if (! $this->ion_auth->logged_in() && ! in_array(uri_string(), $no_redirect)) {
            redirect('auth/login', 'refresh');
        }
        
        // Enables profiler for debugging
        //$this->output->enable_profiler(true);
    }
    
    /**
     * Dynamic views
     * 
     * Dynamicly load sub views into the master view with or without the top navigation
     * 
     * @param string $sub_view Path to view
     * @param boolval $nav_view Show top navigation, default = true
     */
    public function loadView($sub_view, $nav_view = true) 
    {
        // Set data
        $this->data['nav_view'] = $nav_view ? 'layouts/nav_view' : null;
        $this->data['sub_view'] = $sub_view;

        // Load view
        $this->load->view('layouts/master_view', $this->data);
     }

}