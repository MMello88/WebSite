
    <?php
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class Regs0111efdc extends MY_Controller {
      
      public function  __construct() {
        parent::__construct();
      }
    
      public function index(){
        if ($this->session->flashdata('response')){
          $this->data['response'] = $this->session->flashdata('response');
          if($this->data['response']['status'] == 'FALSE'){
            $this->data['response']['data'] = $this->sendGet('api/regs0111efdc/get', $this->data['login']->data->token, true)->data;
          }
        } else {
          $this->data['response'] = $this->sendGet('api/regs0111efdc/get', $this->data['login']->data->token, true);
        }
    
        $this->scripts('assets/javascript/api/regs0111efdc/regs0111efdc.js');
        $this->load->view('dashboard/template/header', $this->data);
        $this->load->view('api/regs0111efdc/GridRegs0111efdc', $this->data);
        $this->load->view('dashboard/template/footer', $this->data);
      }
    
      public function get(){
        echo json_encode(['data' => $this->sendGet('api/regs0111efdc/get', $this->data['login']->data->token)->data]);
      }
    
      public function create(){
        $this->data['nameView'] = 'create';
        if($this->session->flashdata('response'))
          $this->data['response'] = $this->session->flashdata('response');
        
        $this->load->view('dashboard/template/header', $this->data);
        $this->load->view('api/regs0111efdc/CreateRegs0111efdc', $this->data);
        $this->load->view('dashboard/template/footer', $this->data);
      }
    
      public function add(){
        if($_POST){
          $salvarEVoltar = isset($_POST['cbxSaveBack']) ? TRUE : FALSE;
          unset($_POST['cbxSaveBack']);

          $response = $this->sendPost('api/regs0111efdc/create', $this->data['login']->data->token, $this->input->post(), true);

          if($response['status'] == 'FALSE')
            $response['data'] = $_POST;
          
          if($salvarEVoltar) $response['data']['cbxSaveBack'] = 'on';
          
          $this->session->set_flashdata('response', $response); 

          if($response['status'] == 'FALSE'){
            redirect('regs0111efdc/create');
          } else {
            $salvarEVoltar ? redirect('regs0111efdc') : redirect('regs0111efdc/edit/'.$response['data'][0]['0111_Id']);
          }
        }
      }
    
      public function edit($Id){
        $this->data['nameView'] = 'edit';
        if ($this->session->flashdata('response')){
          $this->data['response'] = $this->session->flashdata('response');
        } else {
          $this->data['response'] = $this->sendGet('api/regs0111efdc/get/'.$Id, $this->data['login']->data->token, true);
        }

				$this->scripts('assets/javascript/api/regs0110efdc/regs0110efdc.js');

        if(empty($this->data['response']['data'])){
          $this->data['heading'] = 'Dado não encontrado.';
          $this->data['message'] = 'Não foi encontrado nenhum dado para este identificador.';
          $this->load->view('errors/html/my_error_404', $this->data);
        } else {
          $this->load->view('dashboard/template/header', $this->data);
          $this->load->view('api/regs0111efdc/EditRegs0111efdc', $this->data);
          $this->load->view('dashboard/template/footer', $this->data);
        }
      }
    
      public function update($Id){
        if($_POST){
          $salvarEVoltar = isset($_POST['cbxSaveBack']) ? TRUE : FALSE;
          unset($_POST['cbxSaveBack']);

          $response = $this->sendPost('api/regs0111efdc/update/'.$Id, $this->data['login']->data->token, $this->input->post(), true);

          if($response['status'] == 'FALSE'){
            $_POST['0111_Id'] = $Id;
            $response['data'][0] = $_POST;
          }

          if($salvarEVoltar) $response['data']['cbxSaveBack'] = 'on';

          $this->session->set_flashdata('response', $response); 
          
          if($response['status'] == 'FALSE'){
            redirect('regs0111efdc/edit/'.$Id);
          } else {
            $salvarEVoltar ? redirect('regs0111efdc') : redirect('regs0111efdc/edit/'.$Id);
          }
        }
      }
    
      public function delete(){
        if($_POST){
          $Id = $_POST['Id'];
    
          $response = $this->sendGet('api/regs0111efdc/get/'.$Id, $this->data['login']->data->token, true);    
    
          if(empty($response['data'])){
            $this->data['heading'] = 'Dado não encontrado.';
            $this->data['message'] = 'Não foi encontrado nenhum dado para este identificador.';
            $this->load->view('errors/html/my_error_404', $this->data);
          } else {
            $response = $this->sendDelete('api/regs0111efdc/delete/'.$Id, $this->data['login']->data->token, true);
            $this->session->set_flashdata('response', $response); 
            redirect('regs0111efdc');
          }
        }
      }

      public function view($Id){
        $this->data['nameView'] = 'view';
        $this->data['response'] = $this->sendGet('api/regs0111efdc/get/'.$Id, $this->data['login']->data->token, true);

				$this->scripts('assets/javascript/api/regs0110efdc/regs0110efdc.js');

        $this->load->view('dashboard/template/header', $this->data);
        $this->load->view('api/regs0111efdc/ViewRegs0111efdc', $this->data);
        $this->load->view('dashboard/template/footer', $this->data);
      }
    }
    