<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends MY_Controller {

    /**
     * Default view
     */
    function index()
    {
        // Load view
        $this->loadView('dashboard/index');
    }
}
