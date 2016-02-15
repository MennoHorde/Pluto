<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Colabris extends MY_Controller {

	function __construct()
	{
		parent::__construct();

		$this->load->model('colabris_m');
		$this->load->model('db/clienten_m');
	}

	function index()
	{
		$this->data['js_scripts'] = array('pages/colabris.js');

		$this->loadView('colabris/index');
	}

	function exporteer_naar_excel()
	{
		$data["maand"] = 1;
		$data["categorie"] = $this->input->post('categorie');
		$data["exporteren"] = $this->input->post('exporteren');
		$data["van"] = $this->input->post('start');
		$data["tot"] = $this->input->post('end');
		$data["bestandsnaam"] = $this->colabris_m->getCakVolgnummer();
		$data["bestand_locatie"] = "C:/Users/menno.INTERZORG/Desktop/pluto_export/";

		$this->form_validation->set_rules('start', 'Begin datum', 'required');
		$this->form_validation->set_rules('end', 'Eind datum', 'required');

		if ($this->form_validation->run())
		{

			//controleer of er geen boekingen nog op NC staan
			if(!$this->colabris_m->findNC($data))
			{
				// Diensten Get
				$diensten = $this->colabris_m->getDiensten($data);

				if(isset($diensten))
				{
					//CSV file aanmaken
					if($this->colabris_m->arrayToCsv($data, $diensten))
					{
						//blokkeer boekingen
						//$this->colabris_m->cakBlokkeren($data);
					}
					else
					{
						echo "Het is niet gelukt om een CSV bestand aan te maken";
					}
				}
				else
				{
					echo "Er valt niks te verwerken voor de opgegeven periode.";
				}
			}
			else
			{
				echo "Er staan nog boekingen op NC.";
			}
		}
		else
		{
			$this->index();
		}
	}
}
