<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	
	/*
	 * router /welcome/crud
	 */
	public function crud()
	{
		$this->load->view('crud/datatables');
	}
	/*
	 * router /
	 */
	public function index(){
		$this->load->view('main/index');
	}
}
