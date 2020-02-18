<?php

    class MNews extends CI_Model {
        public function __construct()
        {
            $this->load->database();
        }

        public function get_news($slug = FALSE){
            if($slug === FALSE){
                $query = $this->db->get('baru');
                return $query->result_array();
            }

            $query = $this->db->get_where('baru', array('slug' => $slug));
            return $query->row_array();
        }

        public function get_news_by_id($id=0){
            if($id === 0){
                $query = $this->db->get('baru');
                return $query->result_array();
            }

            $query =$this->db->get_where('baru', array('id' => $id));
            return $query->row_array();
        }

        public function set_news($id = 0){
            $this->load->helper('url');

            $slug = url_title($this->input->post('title'), 'dash', TRUE);

            $data = array(
                'title' => $this->input->post('title'),
                'slug' => $slug,
                'text' => $this->input->post('text')
            );

            if($id == 0){
                return $this->db->insert('baru', $data);
            } else {
                $this->db->where('id', $id);
                return $this->db->update('baru', $data);
            }
        }

        public function delete_news($id){
            $this->db->where('id', $id);
            return $this->db->delete('baru');
        }
    }