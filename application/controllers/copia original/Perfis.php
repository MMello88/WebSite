<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Perfis extends MY_Controller {
	
	public function  __construct() {
    parent::__construct();
    $this->data['menus'] = [];
	}

  public function index(){
    $this->data['perfis'] = $this->SendGet("api/Perfisuser/get", $this->data['login']->data->token)->data;

		$this->load->view('dashboard/template/header', $this->data);
		$this->load->view('perfis/selecionar', $this->data);
		$this->load->view('dashboard/template/footer', $this->data);
  }

  public function contratar(){
    $this->data['perfis'] = $this->SendGet("api/Perfis/get", $this->data['login']->data->token)->data;

    $this->load->view('dashboard/template/header', $this->data);
		$this->load->view('perfis/contratar', $this->data);
		$this->load->view('dashboard/template/footer', $this->data);
  }

  public function selecionar($PerfisId){
    $login = $this->session->userdata('login');
    $login->data->PerfisId = $PerfisId;
    $this->session->set_userdata('login', $login);
    redirect("dashboard");
  }

  public function add(){
    if($_POST){
      $retorno = $this->SendPost("api/Perfisuser/create", $this->data['login']->data->token, $this->input->post());
      $this->session->set_flashdata("status", $retorno->status);
      redirect("perfis/contratar");
    }
  }
}