<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	function _construct()
	{
		parent::__construct();
	}

	public function index(){



	}


	// <--! Ieu Anu Smiley --!>
	// {
	// 	error_reporting(0);
	// 	$this->load->model('MWelcome');
	// 	// $data['nama']="Belajar";
	// 	// $data['nilai']=$this->MWelcome->get();
	// 	$data['nilai_sisi']=$this->MWelcome->lega(10,5);
	// 	$this->load->view('insert');
		
	// 	$this->load->helper('smiley');
	// 	$this->load->library('table');

	// 	if (isset($_POST['komentar'])) {
	// 		$komen_netizen = $_POST['komentar'];
	// 		$str = parse_smileys ($komen_netizen, 'assets/smileys/smileys');
	// 	}
		
	// 	$image_array = get_clickable_smileys('assets/smileys/smileys' , 'komentar');
	// 	$col_array = $this->table->make_columns($image_array, 8);

	// 	$data['smiley_table'] = $this->table->generate($col_array);
	// 	$data['komentar'] = $str;
	// 	$this->load->view('smiley_view', $data);

	// }

	// public function hitung_lega()
	// {
	// 	$p=$this->insert->post('p');
	// 	$l=$this->insert->post('l');
	// 	$data['nilai_sisi']=$this->MWelcome->lega($p, $l);
	// 	$this->load->view('input', $data);
	// }
}
