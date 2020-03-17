<?php
class MBarang extends CI_Model{
    public $kode;
    public $nama;
    public $harga;
    public $stok;

    public $label = [];

    public function __construct(){
        parent::__construct();
        $this->label = $this->_attributeLabels();

        $this->load->database();
    }

    public function insert(){
        $sql = sprintf("INSERT INTO barang VALUES ('%s', '%s', %f, %d) ",
            $this->kode,
            $this->nama,
            $this->harga,
            $this->stok
    );
    $this->db->query($sql);
    }

    public function update(){
        $sql = sprintf("UPDATE barang SET nama='%s', harga=%f, stok=%d "." WHERE kode='%s'",
            $this->nama,
            $this->harga,
            $this->stok,
            $this->kode
    );
    $this->db->query($sql);
    }

    private function _attributeLabels(){
        return[
            'kode'=>'Kode : ',
            'nama'=>'Nama Prodak : ',
            'harga'=>'Harga Prodak : ',
            'stok'=>'Stok : ',
        ];
    }

    public function delete(){
        $sql = sprintf("DELETE FROM barang"." WHERE kode='%s'",
        $this->kode
    );
    $this->db->query($sql);
    }
}