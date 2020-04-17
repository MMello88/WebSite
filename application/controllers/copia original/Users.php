<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends MY_Controller {
	
	public function  __construct() {
    parent::__construct();
	}

  public function index(){
    if ($this->session->flashdata("response")){
      $this->data["response"] = $this->session->flashdata("response");
      if($this->data["response"]->status == "FALSE"){
        $this->data["response"]->data = $this->sendGet("api/users/get/{$this->data['login']->data->uu_Id}", $this->data['login']->data->token)->data;
      }
    } else {
      $this->data["response"] = $this->sendGet("api/users/get/{$this->data['login']->data->uu_Id}", $this->data['login']->data->token);
    }

    $this->load->view('dashboard/template/header', $this->data);
		$this->load->view('user/user', $this->data);
		$this->load->view('dashboard/template/footer', $this->data);
  }

  public function update($UsersId){
    if($_POST){
      $response = $this->sendPost("api/users/update/{$UsersId}", $this->data['login']->data->token, $this->input->post());
      $this->session->set_flashdata("response", $response); 
      redirect("users");
    }
  }

  public function password($UsersId){
    if($_POST){
      $response = $this->sendPost("api/users/updatePassword/{$UsersId}", $this->data['login']->data->token, $this->input->post());
      $this->session->set_flashdata("response", $response); 
      redirect("users");
    }
  }
}