<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Blokkeren extends MY_Controller {

	function __construct()
	{
		parent::__construct();

		$this->load->model('blokkeren_m');
		$this->load->model('db/clienten_m');
	}

	function index()
	{
		$this->data['js_scripts'] = array('pages/blokkeren.js');

		$this->loadView('blokkeren/index');
	}

	function handle_blokkeren()
	{
		if($this->input->post('submit'))
		{
			$this->blokkeren_m->blokkeren();

			redirect('blokkeren');
		}
	}

}
