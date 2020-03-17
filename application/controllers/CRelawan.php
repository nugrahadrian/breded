<?php
class CRelawan extends CI_Controller{

    public function __construct(){
        parent:: __construct();
        $this->load->model('MRelawan');
        $this->load->helper('url_helper');
    }

    public function index(){
        $data['relawan'] = $this->MRelawan->get_relawan();
        $data['title'] = 'Arsip Arsip';
            
        $this->load->view('templates/header', $data); 
        $this->load->view('relawan/index', $data); 
        $this->load->view('templates/footer'); 
    }

    public function view(){
        $data['relawan_item'] = 'getRelawan';
        $this->MRelawan->getRelawan();
        $data['title'] = ' Tampil data Relawan';
        $this->load->view('view', $data);
    }

    public function create(){
            $this->load->helper('form'); 
            $this->load->library('form_validation'); 

            $data['title'] = 'Jieun Data Relawan Anyar'; 

            $this->form_validation->set_rules('id', 'Id'); 
            $this->form_validation->set_rules('nim', 'Nim'); 
            $this->form_validation->set_rules('nama', 'Nama', 'required'); 
            $this->form_validation->set_rules('alamat', 'Alamat', 'required'); 
            $this->form_validation->set_rules('notelp', 'Notelp', 'required'); 
            $this->form_validation->set_rules('kdwil', 'KodeWilayah', 'required'); 

            if ($this->form_validation->run() === FALSE){
                $this->load->view('templates/header', $data); 
                $this->load->view('relawan/create'); 
                $this->load->view('templates/footer');
            } else {
                $this->MRelawan->insertUpdateRelawan(); 
                $this->load->view('templates/header', $data); 
                $this->load->view('relawan/success'); 
                $this->load->view('templates/footer'); 
            }
    }

    public function tambah(){
        $data['relawan'] = $this->MRelawan->get_relawan();
        $data['title'] = 'Jieun Arsip Anyar';
        
        $this->load->view('templates/header', $data); 
        $this->load->view('relawan/create', $data); 
        $this->load->view('templates/footer'); 
    }

    public function edit(){
        $id = $this->uri->segment(3); 

        // if (empty($id)){
        //     show_404(); 
        // }

        $this->load->helper('form'); 
        $this->load->library('form_validation'); 

        $data['title'] = 'Update Item Anyar';
        $data['news_item'] = $this->MRelawan->get_relawan_by_id($id); 

        $this->form_validation->set_rules('id', 'Id', 'required'); 
        $this->form_validation->set_rules('nim', 'Nim'); 
        $this->form_validation->set_rules('nama', 'Nama', 'required'); 
        $this->form_validation->set_rules('alamat', 'Alamat', 'required'); 
        $this->form_validation->set_rules('notelp', 'Notelp'); 
        $this->form_validation->set_rules('kdwil', 'Kode Wilayah', 'required'); 
        // $this->form_validation->set_rules('Harga', 'Harga', 'required'); 
        // $this->form_validation->set_rules('Total', 'Total', 'required'); 

        if ($this->form_validation->run() === FALSE){
            $this->load->view('templates/header', $data); 
            $this->load->view('relawan/edit', $data); 
            $this->load->view('templates/footer'); 
        } else {
            $this->MRelawan->insertUpdateRelawan($id); 
            //$this->load->view('news/success');
            redirect( base_url() . 'index.php/crelawan');
        }
    }

    public function delete(){
        $id = $this->uri->segment(3); 

        // if (empty($kode)){
        //     show_404(); 
        // }

        $dagang_item = $this->MRelawan->get_relawan_by_id($id); 
        $this->MRelawan->delete_relawan($id);
        redirect( base_url() . 'index.php/CRelawan');         
               
    }
}