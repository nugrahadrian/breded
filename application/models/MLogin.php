<?php
class MLogin extends CI_Model{
    public function __construct(){
        
        $this->load->database();
    }

    public function get_session_by_id($id){
        // $this->db->select('password');
        $query =$this->db->get_where('akun', array('username' => $id));
        return $query->result();
    }

    public function login ($username, $password){
        $cek = $this->db->get_where('akun', array('username' => $username, 'password' => $password));
        if ($cek->num_rows() < 0){
            return 1;
            // $query->result();
        }
        else {
            // return 0;
            // foreach($cek->result as $data){
            //     $user=$data->username;
            // }
            $this->session->set_userdata('username', $username);
            redirect('login/buruan_admin');
        }
    }
}