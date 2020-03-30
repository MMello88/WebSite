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

    if(empty($this->data["login"]->data->PerfisId) && $this->router->class <> "perfis"){
      redirect("perfis");
    }
    
    $PerfisId = $this->data['login']->data->PerfisId;
    $this->data['menus'] = $this->SendGet("api/Menus/getPerfilMenu/{$PerfisId}", $this->data['login']->data->token)->data;
  }

  protected function base_api($url = ""){
    return $this->config->item('base_api') . $url;
  }

  protected function sendPost($url, $token, $data){
    $url = $this->base_api($url);
    if($this->isOn){
      $curl = curl_init($url);
      curl_setopt($curl, CURLOPT_RETURNTRANSFER,  true);
      curl_setopt($curl, CURLOPT_POST,  true);
      curl_setopt($curl, CURLOPT_POSTFIELDS,  $data);
      curl_setopt($curl, CURLOPT_HTTPHEADER, [
        'Authorization: ' . $token
      ]);

      $response = curl_exec($curl);
      curl_close($curl);

      return json_decode($response);    
    } else {
      return ["status" => "FALSE", "error" => ["message" => "Por favor realizar Login na aplicação."]];
    }
  }

  protected function sendGet($url, $token){
    $url = $this->base_api($url);
    if($this->isOn){
      $base_api = $this->base_api();
      $curl = curl_init($url);
      curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
      curl_setopt($curl, CURLOPT_HTTPHEADER, [
        'Authorization: ' . $token
      ]);
      $response = curl_exec($curl);
      curl_close($curl);

      return json_decode($response);
    } else {
      return ["status" => "FALSE", "error" => ["message" => "Por favor realizar Login na aplicação."]];
    }
  }
}