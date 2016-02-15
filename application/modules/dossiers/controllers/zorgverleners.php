<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Zorgverleners extends MY_Controller {

	function __construct()
	{
		parent::__construct();

		$this->load->model('dossier_m', 'dossier');
	}

    function index()
    {
        // View
        $this->loadView('dossiers/verzorgers');
    }
}
