<?php
class Barang extends CI_Controller{
    public $model = NULL;

    public function __construct(){
        parent::__construct();
        $this->load->helper('url_helper');

        $this->load->model('MBarang');
        $this->model = $this->MBarang;

        $this->load->database();
    }

    public function index(){
    
         // Ieu Kangge Delete
        //  $this->model->kode = 'A001';
        //  $this->model->delete();
    
        // Ieu Kangge Insert
    //     if (isset($_POST['btnSubmit'])){
    //         $this->model->kode = $_POST['kode'];
    //         $this->model->nama = $_POST['nama'];
    //         $this->model->harga = $_POST['harga'];
    //         $this->model->stok = $_POST['stok'];

    //         $this->model->insert();

    //         $this->load->view('barang_respon_add_view', ['model' => $this->model]);
    //     }
    //     else{
    //         $this->load->view('barang_form_add_view', ['model' => $this->model]);
    //     }
    // }

        // Ieu Kangge Update
    // $this->model->kode = 'A001';

    // $this->model->nama ='Athena';
    // $this->model->harga = 90000;
    // $this->model->stok = 19;

    // $this->model->update();

        // Query Result 
    //    $query = $this->db->query('SELECT * FROM barang');
    //    $this->load->view('query_result_view',['query'=>$query]);
        
        // Query Result Array
        // $query = $this->db->query('SELECT * FROM barang');
        // $this->load->view('query_result_array_view', ['query'=>$query]);

        //Query Row
        // $query = $this->db->query('SELECT * FROM barang');
        // $this->load->view('query_row_view', ['query'=>$query]);

        // Query Row Array
        $query = $this->db->query('SELECT * FROM barang');
        $this->load->view('query_row_array_view', ['query'=>$query]);
    }
}