<?php
class Login extends CI_Controller{
    
    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->helper('url');
        $this->load->helper('form');
        $this->load->model('MLogin');
        
    }

    public function index(){
        $user = $this->input->post('username');
        $pass = $this->input->post('password');
        $data = $this->MLogin->get_session_by_id($user);
        // echo $data['username'];

        if($user == 'Admin' && $pass == '1234'){
            $this->session->set_userdata('username', $user);
            // echo $this->session->userdata('username');
             
            redirect('login/buruan_admin');
        }
        elseif($user == 'User' && $pass =='1234'){
            $this->session->set_userdata('username', $user);
            redirect('login/buruan_user');
        }
        else{
            $this->load->view('login/index');
        }
    }

    public function buruan_admin(){
        $this->load->view('login/buruan_admin');
    }

    public function buruan_user(){
        $this->load->view('login/buruan_user');
    }

    public function logout(){
        $this->session->unset_userdata(array('username' => ''));
        redirect('login/index');
    }

    public function login(){
        if(isset($_POST['submit'])){
            $username=$this->input->post('username');
            $password=$this->input->post('password');
            $berhasil=$this->MLogin->login($username, $password);
        }
        else{
            $this->load->view('index');
        }
    }

}