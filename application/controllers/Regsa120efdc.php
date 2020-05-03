
    <?php
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class Regsa120efdc extends MY_Controller {
      
      public function  __construct() {
        parent::__construct();
      }
    
      public function index(){
        if ($this->session->flashdata('response')){
          $this->data['response'] = $this->session->flashdata('response');
          if($this->data['response']['status'] == 'FALSE'){
            $this->data['response']['data'] = $this->sendGet('api/regsa120efdc/get', $this->data['login']->data->token, true)->data;
          }
        } else {
          $this->data['response'] = $this->sendGet('api/regsa120efdc/get', $this->data['login']->data->token, true);
        }
    
        $this->scripts('assets/javascript/api/regsa120efdc/regsa120efdc.js');
        $this->load->view('dashboard/template/header', $this->data);
        $this->load->view('api/regsa120efdc/GridRegsa120efdc', $this->data);
        $this->load->view('dashboard/template/footer', $this->data);
      }
    
      public function get($IdParent, $Id = ''){
        if(empty($Id))
          echo json_encode(['data' => $this->sendGet('api/regsa120efdc/getByParent/'.$IdParent, $this->data['login']->data->token)->data]);
        else 
          echo json_encode(['data' => $this->sendGet('api/regsa120efdc/getByParent/'.$IdParent.'/'.$Id, $this->data['login']->data->token)->data]);
      }
    
      public function create($parentView, $IdParent){
        $this->data['nameView'] = 'create';
        $this->data['IdParent'] = $IdParent;
        $this->data['parentView'] = $parentView;
        if($this->session->flashdata('response'))
          $this->data['response'] = $this->session->flashdata('response');
        
        $this->load->view('dashboard/template/header', $this->data);
        $this->load->view('api/regsa120efdc/CreateRegsa120efdc', $this->data);
        $this->load->view('dashboard/template/footer', $this->data);
      }
    
      public function add($parentView, $IdParent){
        if($_POST){
          $salvarEVoltar = isset($_POST['cbxSaveBack']) ? TRUE : FALSE;
          unset($_POST['cbxSaveBack']);

          $response = $this->sendPost('api/regsa120efdc/create', $this->data['login']->data->token, $this->input->post(), true);

          if($response['status'] == 'FALSE')
            $response['data'] = $_POST;
          
          if($salvarEVoltar) $response['data']['cbxSaveBack'] = 'on';
          
          $this->session->set_flashdata('response', $response); 

          if($response['status'] == 'FALSE'){
            redirect('regsa120efdc/create/'.$parentView.'/'.$IdParent);
          } else {
            $salvarEVoltar ? redirect('regsa100efdc/'.$parentView.'/'.$IdParent) : redirect('regsa120efdc/edit/'.$parentView.'/'.$IdParent.'/'.$response['data'][0]['a120_Id']);
          }
        }
      }
    
      public function edit($parentView, $IdParent, $Id){
        $this->data['nameView'] = 'edit';
        $this->data['IdParent'] = $IdParent;
        $this->data['parentView'] = $parentView;
        if ($this->session->flashdata('response')){
          $this->data['response'] = $this->session->flashdata('response');
        } else {
          $this->data['response'] = $this->sendGet('api/regsa120efdc/get/'.$Id, $this->data['login']->data->token, true);
        }
        

        if(empty($this->data['response']['data'])){
          $this->data['heading'] = 'Dado não encontrado.';
          $this->data['message'] = 'Não foi encontrado nenhum dado para este identificador.';
          $this->load->view('errors/html/my_error_404', $this->data);
        } else {
          $this->load->view('dashboard/template/header', $this->data);
          $this->load->view('api/regsa120efdc/EditRegsa120efdc', $this->data);
          $this->load->view('dashboard/template/footer', $this->data);
        }
      }
    
      public function update($parentView, $IdParent, $Id){
        if($_POST){
          $salvarEVoltar = isset($_POST['cbxSaveBack']) ? TRUE : FALSE;
          unset($_POST['cbxSaveBack']);

          $response = $this->sendPost('api/regsa120efdc/update/'.$Id, $this->data['login']->data->token, $this->input->post(), true);

          if($response['status'] == 'FALSE'){
            $_POST['a120_Id'] = $Id;
            $response['data'][0] = $_POST;
          }

          if($salvarEVoltar) $response['data']['cbxSaveBack'] = 'on';

          $this->session->set_flashdata('response', $response); 
          
          if($response['status'] == 'FALSE'){
            redirect('regsa120efdc/edit/'.$parentView.'/'.$IdParent.'/'.$Id);
          } else {
            $salvarEVoltar ? redirect('regsa100efdc/'.$parentView.'/'.$IdParent) : redirect('regsa120efdc/edit/'.$parentView.'/'.$IdParent.'/'.$Id);
          }
        }
      }
    
      public function delete(){
        if($_POST){
          $Id = $_POST['Id'];
    
          $response = $this->sendGet('api/regsa120efdc/get/'.$Id, $this->data['login']->data->token, true);    
    
          if(empty($response['data'])){
            $this->data['heading'] = 'Dado não encontrado.';
            $this->data['message'] = 'Não foi encontrado nenhum dado para este identificador.';
            $this->load->view('errors/html/my_error_404', $this->data);
          } else {
            $response = $this->sendDelete('api/regsa120efdc/delete/'.$Id, $this->data['login']->data->token, true);
            $this->session->set_flashdata('response', $response); 
            redirect('regsa120efdc');
          }
        }
      }

      public function view($Id){
        $this->data['nameView'] = 'view';
        $this->data['response'] = $this->sendGet('api/regsa120efdc/get/'.$Id, $this->data['login']->data->token, true);


        $this->load->view('dashboard/template/header', $this->data);
        $this->load->view('api/regsa120efdc/ViewRegsa120efdc', $this->data);
        $this->load->view('dashboard/template/footer', $this->data);
      }
    }
    