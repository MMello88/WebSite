<?php if ( ! defined("BASEPATH")) exit("No direct script access allowed");

class MY_Controller extends CI_Controller {
  
  protected $isOn = FALSE;
  protected $data;

  public function  __construct() {
    parent::__construct();
    $this->data["scripts"] = [];
    
    $this->isOn = $this->session->userdata('login') === NULL ? FALSE : TRUE;
    
    if (!$this->isOn){
    	redirect("user/login");
    }
    
    $this->data["login"] = $this->session->userdata('login');

    if(empty($this->data["login"]->data->PerfisId) && $this->router->class <> "perfis"){
      redirect("perfis");
    }

    if(!empty($this->data['login']->data->PerfisId)){
      $PerfisId = $this->data['login']->data->PerfisId;
      $this->data['menus'] = $this->SendGet("api/Menus/getPerfilMenu/{$PerfisId}", $this->data['login']->data->token)->data;
    }

    $this->addRoute();
  }

  protected function base_api($url = ""){
    return $this->config->item('base_api') . $url;
  }

  protected function sendPost($url, $token, $data, $toArray = FALSE){
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

      return json_decode($response, $toArray);    
    } else {
      return ["status" => "FALSE", "error" => ["message" => "Por favor realizar Login na aplicação."]];
    }
  }

  protected function sendPut($url, $token, $data){
    $url = $this->base_api($url);
    if($this->isOn){
      $curl = curl_init($url);
      curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
      curl_setopt($curl, CURLOPT_PUT, true);
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

  protected function sendGet($url, $token, $toArray = FALSE){
    $url = $this->base_api($url);
    if($this->isOn){
      $curl = curl_init($url);
      curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
      curl_setopt($curl, CURLOPT_HTTPHEADER, [
        'Authorization: ' . $token
      ]);
      $response = curl_exec($curl);
      curl_close($curl);

      return json_decode($response, $toArray);
    } else {
      return ["status" => "FALSE", "error" => ["message" => "Por favor realizar Login na aplicação."]];
    }
  }

  protected function sendDelete($url, $token, $toArray = FALSE){
    $url = $this->base_api($url);
    if($this->isOn){
      $curl = curl_init($url);
      curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
      curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "DELETE");
      curl_setopt($curl, CURLOPT_HTTPHEADER, [
        'Authorization: ' . $token
      ]);
      $response = curl_exec($curl);
      curl_close($curl);

      return json_decode($response, $toArray);
    } else {
      return ["status" => "FALSE", "error" => ["message" => "Por favor realizar Login na aplicação."]];
    }
  }

  protected function scripts($location){
    $this->data['scripts'][] = base_url($location);
  }

  private function addRoute(){
    if($this->session->userdata('url_segments') === NULL){
      $url_segments[] = $this->uri->segments;
      $this->session->set_userdata("url_segments",$url_segments);
    } else {
      $url_segments = $this->session->userdata("url_segments");

      $todosDiferentes = FALSE;      
      foreach ($url_segments as $value) {  
        if(count(array_diff($value,$this->uri->segments)) == 0){
          $todosDiferentes = TRUE;
        }
      }
      if(!$todosDiferentes)
        $url_segments[] = $this->uri->segments;

      $this->session->set_userdata("url_segments",$url_segments);
    }

 //   print_r($this->session->userdata('url_segments'));
  }
}