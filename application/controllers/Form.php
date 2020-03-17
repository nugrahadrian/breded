<?php
class Form extends CI_Controller{

    public function __construct(){
        parent::__construct();
        $this->load->library('form_validation');
        
    }

    public function index(){
        $this->load->view('Form/v_form');
    }

    public function aksi(){
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('konfir_email', 'Konfirmasi Email ', 'required');

        if($this->form_validation->run() != false){
            echo " Form Validation Oke";
        }
        else{
            $this->load->view('Form/v_form');
        }
    }
}