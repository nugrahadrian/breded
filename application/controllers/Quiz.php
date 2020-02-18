<?php
    class Quiz extends CI_Controller{

        public function __construct(){
            parent:: __construct();
            $this->load->model('MQuiz');
            $this->load->helper('url_helper');
        }

        public function index(){
            $data['dagang'] = $this->MQuiz->get_dagang();
            $data['title'] = 'Arsip Arsip';
            
            $this->load->view('templates/header', $data); 
            $this->load->view('dagang/index', $data); 
            $this->load->view('templates/footer'); 
        } 

        public function create(){
            $this->load->helper('form'); 
            $this->load->library('form_validation'); 

            $data['title'] = 'Jieun Item Anyar'; 

            $this->form_validation->set_rules('id', 'Kode', 'required'); 
            $this->form_validation->set_rules('Nama', 'Nama', 'required'); 
            $this->form_validation->set_rules('Jumlah', 'Jumlah', 'required'); 
            // $this->form_validation->set_rules('Harga', 'Harga', 'required'); 
            // $this->form_validation->set_rules('Total', 'Total', 'required'); 

            if ($this->form_validation->run() === FALSE){
                $this->load->view('templates/header', $data); 
                $this->load->view('dagang/create'); 
                $this->load->view('templates/footer');
            } else {
                $this->MQuiz->set_dagang(); 
                $this->load->view('templates/header', $data); 
                $this->load->view('dagang/success'); 
                $this->load->view('templates/footer'); 
            }
        }

        public function tambah(){
            $data['dagang'] = $this->MQuiz->get_dagang();
            $data['title'] = 'Jieun Arsip Anyar';
            
            $this->load->view('templates/header', $data); 
            $this->load->view('dagang/create', $data); 
            $this->load->view('templates/footer'); 
        }

        // public function checkout(){
        //     $id = $this->input->post('id');
        //     $dagang = $this->MQuiz->get_dagang_by_id($id)->row();
        //     $Jumlah = $this->input->post('Jumlah');
        //     $data = array(
        //         'dagang' => $dagang,
        //         'Jumlah' => $Jumlah,
        //         'Total' => $dagang->harga * $Jumlah,
        //         'content' => 'dagang/checkout'
        //     );
        //     $this->load->view('barang/template', $data);
        // }

        public function edit(){
            $id = $this->uri->segment(3); 

            // if (empty($id)){
            //     show_404(); 
            // }

            $this->load->helper('form'); 
            $this->load->library('form_validation'); 

            $data['title'] = 'Update Item Anyar';
            $data['dagang_item'] = $this->MQuiz->get_dagang_by_id($id); 

            $this->form_validation->set_rules('id', 'Kode', 'required'); 
            $this->form_validation->set_rules('Nama', 'Nama', 'required'); 
            $this->form_validation->set_rules('Jumlah', 'Jumlah', 'required'); 
            // $this->form_validation->set_rules('Harga', 'Harga', 'required'); 
            // $this->form_validation->set_rules('Total', 'Total', 'required'); 

            if ($this->form_validation->run() === FALSE){
                $this->load->view('templates/header', $data); 
                $this->load->view('dagang/edit', $data); 
                $this->load->view('templates/footer'); 
            } else {
                $this->MQuiz->set_dagang($id); 
                //$this->load->view('news/success');
                redirect( base_url() . 'index.php/quiz');
            }
        }

        public function delete(){
            $id = $this->uri->segment(3); 

            // if (empty($kode)){
            //     show_404(); 
            // }

            $dagang_item = $this->MQuiz->get_dagang_by_id($id); 
            $this->MQuiz->delete_dagang($id);
            redirect( base_url() . 'index.php/quiz');         
                   
        }
    }