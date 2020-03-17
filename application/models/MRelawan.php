<?php
class MRelawan extends CI_Model{
    public function __construct(){
        
        $this->load->database();
    }

    public function get_relawan($slug = FALSE){
        if($slug === FALSE){
            $query = $this->db->get('drelawan');
            return $query->result_array();
        }

        $query = $this->db->get_where('drelawan', array('slug' => $slug));
        return $query->row_array();
    }

    public function get_relawan_by_id($id=0){
        if($id === 0){
            $query = $this->db->get('drelawan');
            return $query->result_array();
        }

        $query =$this->db->get_where('drelawan', array('id' => $id));
        return $query->row_array();
    }

    public function insertUpdateRelawan($id = 0){
        $this->load->helper('url');

        $slug = url_title($this->input->post('title'), 'dash', TRUE);

        $data = array(
            'id' => $this->input->post('id'),
            'nim' => $this->input->post('nim'),
            'nama' => $this->input->post('nama'),
            'alamat' => $this->input->post('alamat'),
            'notelp' => $this->input->post('notelp'),
            'kdwil' => $this->input->post('kdwil')
        );

        if($id == 0){
            return $this->db->insert('drelawan', $data);
        } else {
            $this->db->where('id', $id);
            return $this->db->update('drelawan', $data);
        }
    }

    public function delete_relawan($id){
        $this->db->where('id', $id);
        return $this->db->delete('drelawan');
    }

}