<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	/*
	 * router /user/singin
	 */
	public function singin(){
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

	/*
	 * router /user/cadastrar
	 */
	public function cadastrar(){
		
	}

	/*
	 * router /user/logar
	 */
	public function logar(){

	}

	/*
	 * router /user/recuperar/senha
	 */
	public function recuperar(){

	}
}
