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
}