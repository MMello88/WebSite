<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Regs0000efdc extends MY_Controller {
	
	public function  __construct() {
    parent::__construct();
	}

  public function index(){
    if ($this->session->flashdata("response")){
      $this->data["response"] = $this->session->flashdata("response");
      if($this->data["response"]->status == "FALSE"){
        $this->data["response"]->data = $this->sendGet("api/regs0000efdc/get", $this->data['login']->data->token)->data;
      }
    } else {
      $this->data["response"] = $this->sendGet("api/regs0000efdc/get", $this->data['login']->data->token);
    }

    $this->scripts("assets/javascript/api/regs0000efdc/regs0000efdc.js");
    $this->load->view('dashboard/template/header', $this->data);
		$this->load->view('api/regs0000efdc/regs0000efdc', $this->data);
		$this->load->view('dashboard/template/footer', $this->data);
  }

  public function get(){
    echo json_encode(["data" => $this->sendGet("api/regs0000efdc/get", $this->data['login']->data->token)->data]);
  }

  public function create(){
    if($this->session->flashdata("response"))
      $this->data['response'] = $this->session->flashdata("response");
    
    $this->load->view('dashboard/template/header', $this->data);
		$this->load->view('api/regs0000efdc/CreateRegs0000efdc', $this->data);
		$this->load->view('dashboard/template/footer', $this->data);
  }

  public function add(){
    if($_POST){
      $response = $this->sendPost("api/regs0000efdc/create", $this->data['login']->data->token, $this->input->post(), true);
      $this->session->set_flashdata("response", $response); 
      redirect('regs0000efdc/create');
    }
  }

  public function edit($Id){
    if ($this->session->flashdata("response")){
      $this->data["response"] = $this->session->flashdata("response");
      if($this->data["response"]['status'] == "FALSE"){
        $this->data["response"]['data'] = $this->sendGet("api/regs0000efdc/get/{$Id}", $this->data['login']->data->token, true)['data'];
      }
    } else {
      $this->data["response"] = $this->sendGet("api/regs0000efdc/get/{$Id}", $this->data['login']->data->token, true);
    }

    if(empty($this->data["response"]['data'])){
      $this->data['heading'] = "Dado não encontrado.";
      $this->data['message'] = "Não foi encontrado nenhum dado para este identificador.";
      $this->load->view('errors/html/my_error_404', $this->data);
    } else {
      //print_r($this->data["response"]['data']);
      $this->load->view('dashboard/template/header', $this->data);
      $this->load->view('api/regs0000efdc/EditRegs0000efdc', $this->data);
      $this->load->view('dashboard/template/footer', $this->data);
    }
  }

  public function update($Id){
    if($_POST){
      $response = $this->sendPost("api/regs0000efdc/update/$Id", $this->data['login']->data->token, $this->input->post(), true);
      $this->session->set_flashdata("response", $response); 
      redirect("regs0000efdc/edit/$Id");
    }
  }
}