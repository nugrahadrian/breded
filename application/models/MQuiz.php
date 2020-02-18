<?php

    class MQuiz extends CI_Model {
        public function __construct()
        {
            $this->load->database();
        }

        public function get_dagang($slug = FALSE){
            if($slug === FALSE){
                $query = $this->db->get('wowow');
                return $query->result_array();
            }

            $query = $this->db->get_where('wowow', array('slug' => $slug));
            return $query->row_array();
        }

        public function get_dagang_by_id($id=0){
            if($id === 0){
                $query = $this->db->get('wowow');
                return $query->result_array();
            }

            $query =$this->db->get_where('wowow', array('id' => $id));
            return $query->row_array();
        }

        public function set_dagang($id = 0){
            $this->load->helper('url');

            $slug = url_title($this->input->post('title'), 'dash', TRUE);

            $data = array(
                'id' => $this->input->post('id'),
                'Nama' => $this->input->post('Nama'),
                'Jumlah' => $this->input->post('Jumlah'),
                'Harga' => $this->input->post('Harga'),
                'Total' => $this->input->post('Total')
            );

            if($id == 0){
                return $this->db->insert('wowow', $data);
            } else {
                $this->db->where('id', $id);
                return $this->db->update('wowow', $data);
            }
        }

        public function delete_dagang($id){
            $this->db->where('id', $id);
            return $this->db->delete('wowow');
        }
    }