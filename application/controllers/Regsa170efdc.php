
    <?php
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class Regsa170efdc extends MY_Controller {
      
      public function  __construct() {
        parent::__construct();
      }
    
      public function index(){
        if ($this->session->flashdata('response')){
          $this->data['response'] = $this->session->flashdata('response');
          if($this->data['response']['status'] == 'FALSE'){
            $this->data['response']['data'] = $this->sendGet('api/regsa170efdc/get', $this->data['login']->data->token, true)->data;
          }
        } else {
          $this->data['response'] = $this->sendGet('api/regsa170efdc/get', $this->data['login']->data->token, true);
        }
    
        $this->scripts('assets/javascript/api/regsa170efdc/regsa170efdc.js');
        $this->load->view('dashboard/template/header', $this->data);
        $this->load->view('api/regsa170efdc/GridRegsa170efdc', $this->data);
        $this->load->view('dashboard/template/footer', $this->data);
      }
    
      public function get(){
        echo json_encode(['data' => $this->sendGet('api/regsa170efdc/get', $this->data['login']->data->token)->data]);
      }
    
      public function create(){
        if($this->session->flashdata('response'))
          $this->data['response'] = $this->session->flashdata('response');
        
        $this->load->view('dashboard/template/header', $this->data);
        $this->load->view('api/regsa170efdc/CreateRegsa170efdc', $this->data);
        $this->load->view('dashboard/template/footer', $this->data);
      }
    
      public function add(){
        if($_POST){
          $response = $this->sendPost('api/regsa170efdc/create', $this->data['login']->data->token, $this->input->post(), true);
          $response['data'] = $_POST;
          $this->session->set_flashdata('response', $response); 
          redirect('regsa170efdc/create');
        }
      }
    
      public function edit($Id){
        if ($this->session->flashdata('response')){
          $this->data['response'] = $this->session->flashdata('response');
          if($this->data['response']['status'] == 'FALSE'){
            $this->data['response']['data'] = $this->sendGet('api/regsa170efdc/get/'.$Id, $this->data['login']->data->token, true)['data'];
          }
        } else {
          $this->data['response'] = $this->sendGet('api/regsa170efdc/get/'.$Id, $this->data['login']->data->token, true);
        }
    
        if(empty($this->data['response']['data'])){
          $this->data['heading'] = 'Dado não encontrado.';
          $this->data['message'] = 'Não foi encontrado nenhum dado para este identificador.';
          $this->load->view('errors/html/my_error_404', $this->data);
        } else {
          $this->load->view('dashboard/template/header', $this->data);
          $this->load->view('api/regsa170efdc/EditRegsa170efdc', $this->data);
          $this->load->view('dashboard/template/footer', $this->data);
        }
      }
    
      public function update($Id){
        if($_POST){
          $response = $this->sendPost('api/regsa170efdc/update/'.$Id, $this->data['login']->data->token, $this->input->post(), true);
          $response['data'] = $_POST;
          $this->session->set_flashdata('response', $response); 
          redirect('regsa170efdc/edit/'.$Id);
        }
      }
    
      public function delete(){
        if($_POST){
          $Id = $_POST['Id'];
    
          $response = $this->sendGet('api/regsa170efdc/get/'.$Id, $this->data['login']->data->token, true);    
    
          if(empty($response['data'])){
            $this->data['heading'] = 'Dado não encontrado.';
            $this->data['message'] = 'Não foi encontrado nenhum dado para este identificador.';
            $this->load->view('errors/html/my_error_404', $this->data);
          } else {
            $response = $this->sendDelete('api/regsa170efdc/delete/'.$Id, $this->data['login']->data->token, true);
            $this->session->set_flashdata('response', $response); 
            redirect('regsa170efdc');
          }
        }
      }

      public function view($Id){
        $this->data['response'] = $this->sendGet('api/regsa170efdc/get/'.$Id, $this->data['login']->data->token, true);

        $this->load->view('dashboard/template/header', $this->data);
        $this->load->view('api/regsa170efdc/ViewRegsa170efdc', $this->data);
        $this->load->view('dashboard/template/footer', $this->data);
      }
    }
    