<?php
defined('BASEPATH') OR exit('No se permite el acceso directo al script');

class Restaurant extends CI_Controller {

	public function index()
	{
		$this->load->model('Store_model');
		$stores= $this->Store_model->getResInfo();
		$data['stores'] = $stores;
		$this->load->view('front/partials/header');
		$this->load->view('front/restaurant',$data);
		$this->load->view('front/partials/footer');
	}

}
