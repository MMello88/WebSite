<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/*
	 * router /
	 */
	public function index(){
		$this->load->view('main/index');
	}

	/*
	 * router /welcome/crud
	 */
	public function crud()
	{
		$this->load->view('crud/datatables');
	}

	/*
	 * router /user/singin
	 */
	public function create(){
		$this->load->view('main/create');
	}

	/*
	 * router /user/login
	 */
	public function login(){
		$this->load->view('main/login');
	}

	/*
	 * router /user/forgot
	 */
	public function forgot(){
		$this->load->view('main/forgot');
	}
}
