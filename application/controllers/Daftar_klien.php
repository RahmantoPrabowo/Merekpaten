<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class daftar_klien extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->database();
		//$this->load->library('session');
	}
	
	public function index()
	{
		if($this->session->userdata('status')=='loged')
    {
      $data['menu'] = 8;
      $this->load->view('Header/header-admin');
      $this->load->view('Sidebar/sidebar-admin',$data);
      $this->load->view('Semua Data/daftar-klien');
      $this->load->view('Footer/footer-aplikasi');
    }
    else
    {
      redirect(site_url('Welcome/Login'));
    }
		
	}
	


}
