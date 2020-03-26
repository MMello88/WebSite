<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends MY_Controller {
	
	public function  __construct() {
	    parent::__construct();
	}
	/*
	 * router /
	 */
	public function index(){
    $this->data['perfis'] = $this->SendGet("api/Menus/getPerfilMenu", $this->data['login']->data->token)->data;
     

		$this->load->view('dashboard/template/header', $this->data);
		$this->load->view('dashboard/index', $this->data);
		$this->load->view('dashboard/template/footer', $this->data);
	}
}
