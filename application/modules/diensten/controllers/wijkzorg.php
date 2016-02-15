<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Wijkzorg extends MY_Controller {

	function __construct()
	{
		parent::__construct();

		$this->load->model('wijkzorg_m');

		$this->data['js_scripts'] = array('pages/wijkzorg/table.js');
		$this->data['datum']['jaar'] = $this->uri->segment(4);
		$this->data['datum']['maand'] = $this->uri->segment(5);
		$this->data['datum']['dag'] = $this->uri->segment(6);
		$this->data['route'] = $this->uri->segment(7);
	}

	function index()
	{
		if (!empty($this->input->post()))
		{
			redirect('diensten/wijkzorg/table/' . implode('/', $this->input->post()));
		}
		else
		{
			redirect('diensten/wijkzorg/table/'.date('Y/m/d/1'));
		}
	}

	function table()
	{
		$this->data['jaren'] = jaren_array();
		$this->data['maanden'] = maanden_array();
		$this->data['num_days'] = date('t', strtotime(implode($this->data['datum'], '-')));
		$this->data['diensten'] = $this->wijkzorg_m->getDay($this->data['datum']);
		$this->data['routes'] = $this->wijkzorg_m->dropdownRoutes();
		$this->data['zorgverleners'] = $this->wijkzorg_m->dropdownZorgverleners();

		$this->loadView('wijkzorg/table');
	}

	function updateZorgverlener()
	{
		if($this->input->post('update'))
		{
			$this->wijkzorg_m->updateZorgverlener();

			redirect('/diensten/wijkzorg/table/' . implode('/', $this->input->post()));
		}
	}

	function reiskosten()
	{
		$this->load->model('reiskosten_m', 'reiskosten');

		$routes = $this->reiskosten->getRoutes($this->data['datum']['jaar'], $this->data['datum']['maand'], $this->data['route']);

		foreach($routes as $route)
		{
			//dump($route);
		}

		dump($this->reiskosten->getResponse());
	}
}
