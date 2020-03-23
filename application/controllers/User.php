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
		    	"http://localhost/WebApi/api/Users/add",
		    	[
		    		"Nome" => $this->input->post("Nome"),
		    		"Email" => $this->input->post("Email"),
		    		"Senha" => $this->input->post("Senha"),
		    		"SenhaConf" => $this->input->post("SenhaConfirm")
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
		    	"http://localhost/WebApi/api/Users/login",
		    	[
		    		"Email" => $this->input->post("Email"),
	    			"Senha" => $this->input->post("Senha")
		    	]
	    	);

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
	 * router /user/forgot
	 */
	public function forgot($paraHash = ""){
		$data["hash"] = $paraHash;
		if(empty($paraHash)){
			if ($this->input->post())
		    {
		    	$data["response"] = $this->sendPost(
			    	"http://localhost/WebApi/api/Users/forgot",
			    	[
			    		"Email" => $this->input->post("Email")
			    	]
		    	);

		    	$this->load->view('main/forgot',$data);
		    } else {
				$this->load->view('main/forgot',$data);
			}
		} else {
			if ($this->input->post()){
				$data["response"] = $this->sendPost(
			    	"http://localhost/WebApi/api/Users/forgot/$paraHash",
			    	[
			    		"Senha" => $this->input->post("Senha"),
		    			"SenhaConf" => $this->input->post("SenhaConfirm")
			    	]
		    	);
		    	$this->load->view('main/forgot', $data);
			} else {
				$this->load->view('main/forgot', $data);
			}
		}
	}

	/*
	 * router /user/recuperar/senha
	 */
	public function recuperar(){

	}

	private function sendPost($url, $data){

        $curl = curl_init($url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER,  true);
        curl_setopt($curl, CURLOPT_POST,  true);
        curl_setopt($curl, CURLOPT_POSTFIELDS,  $data);
		
		$response = curl_exec( $curl);
		curl_close($curl);

		return json_decode($response);		
	}
}
