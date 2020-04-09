<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	/*
	 * router /user/singin
	 */
	public function singin(){

		if ($this->input->post())
		{
			$data["response"] = $this->sendPost(
				"api/Users/add",
				[
					"uu_Nome" => $this->input->post("uu_Nome"),
					"uu_Email" => $this->input->post("uu_Email"),
					"uu_Senha" => $this->input->post("uu_Senha"),
					"uu_SenhaConf" => $this->input->post("uu_SenhaConfirm")
				]
			);
			$this->load->view('main/create', $data);
		}
		else
		{
				$this->load->view('main/create');
		}
	}

	/*
	 * router /user/login
	 */
	public function login(){
		if ($this->input->post())
		{
			$data["response"] = $this->sendPost(
				"api/Users/login",
				[
					"uu_Email" => $this->input->post("uu_Email"),
					"uu_Senha" => $this->input->post("uu_Senha")
				]
			);

			//$data["response"]->data->PerfisId = "";
			$this->session->set_userdata(["login" => $data["response"]]);

			$this->load->view('main/login', $data);
		}
		else
		{
			$this->load->view('main/login');
		}
	}

	/*
	 * router /user/logout
	 */
	public function logout(){
		$this->session->sess_destroy();
		redirect("Welcome");
	}

	/*
	 * router /user/forgot/$paraHash
	 */
	public function forgot($paraHash = ""){
		$data["hash"] = $paraHash;
		if(empty($paraHash)){
			if ($this->input->post())
		    {
		    	$data["response"] = $this->sendPost(
			    	"api/Users/forgot",
			    	[
			    		"uu_Email" => $this->input->post("uu_Email")
			    	]
		    	);
		    	$this->load->view('main/forgot',$data);
		    } else {
				$this->load->view('main/forgot',$data);
			}
		} else {
			if ($this->input->post()){
				$data["response"] = $this->sendPost(
			    	"api/Users/forgot/$paraHash",
			    	[
			    		"uu_Senha" => $this->input->post("uu_Senha"),
		    			"uu_SenhaConf" => $this->input->post("uu_SenhaConfirm")
			    	]
		    	);
		    	$this->load->view('main/forgot', $data);
			} else {
				$this->load->view('main/forgot', $data);
			}
		}
	}

	private function sendPost($url, $data){
    $url = $this->base_api($url);
    $curl = curl_init($url);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER,  true);
    curl_setopt($curl, CURLOPT_POST,  true);
    curl_setopt($curl, CURLOPT_POSTFIELDS,  $data);
		
		$response = curl_exec( $curl);
		curl_close($curl);

		return json_decode($response);		
	}

  private function base_api($url){
    return $this->config->item('base_api') . $url;
  }
}
