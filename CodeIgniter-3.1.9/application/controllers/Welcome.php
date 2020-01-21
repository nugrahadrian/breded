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
		parent::_construct();
	}

	public function index()
	{
		$this->load->model('MWelcome');
		// $data['nama']="Belajar";
		// $data['nilai']=$this->MWelcome->get();
		$data['nilai_sisi']=$this->MWelcome->lega(10,5);
		$this->load->view('insert');
	}

	public function hitung_lega()
	{
		$p=$this->insert->post('p');
		$l=$this->insert->post('l');
		$data['nilai_sisi']=$this->MWelcome->lega($p, $l);
		$this->load->view('input', $data);
	}
}
