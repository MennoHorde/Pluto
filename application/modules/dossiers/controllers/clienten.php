<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Clienten extends MY_Controller {

	function __construct()
	{
		parent::__construct();

		$this->load->model('dossier_m');
	}

	function index()
	{
		$this->data['js_scripts'] = array('pages/dossier/clienten.js');
		$this->data['clienten'] = $this->dossier_m->getClienten();

		$this->loadView('dossiers/clienten');
	}
}
