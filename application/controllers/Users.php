<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends MY_Controller {
	
	public function  __construct() {
    parent::__construct();
	}

  public function index(){
    $this->load->view('dashboard/template/header', $this->data);
		$this->load->view('user/user', $this->data);
		$this->load->view('dashboard/template/footer', $this->data);
  }

  public function update($UsersId){
    if($_POST){
      $retorno = $this->SendPost("api/users/update/{$UsersId}", $this->data['login']->data->token, $this->input->post());
      $this->session->set_flashdata("status", $retorno->status);
      redirect("perfis/contratar");
    }
  }
}