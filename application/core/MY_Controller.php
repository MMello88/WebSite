<?php if ( ! defined("BASEPATH")) exit("No direct script access allowed");

class MY_Controller extends CI_Controller {
  
  protected $isOn = FALSE;
  protected $data;

  public function  __construct() {
    parent::__construct();
    $this->isOn = $this->session->userdata('login') === NULL ? FALSE : TRUE;

    if (!$this->isOn){
    	redirect("user/login");
    }

    $this->data["login"] = $this->session->userdata('login');
  }
}