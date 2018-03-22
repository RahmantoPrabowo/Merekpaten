<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->database();
		//$this->load->library('session');
	}
	
	public function index()
	{
		if($this->session->userdata('status')=='loged')
    {
      $data['menu'] = 1;
      $this->load->view('Header/header-admin');
      $this->load->view('Sidebar/sidebar-admin',$data);
      $this->load->view('Dashboard/dashboard');
      $this->load->view('Footer/footer-admin');
    }
    else
    {
      redirect(site_url('Welcome/Login'));
    }
		
	}
	public function Login()
  {
      $this->load->view('Login/login');
  }

	public function Logout()
  {
      $this->session->sess_destroy();
      redirect(site_url('Welcome/login'));
  }
  public function VerifyInput()
  {
      $user_name = $_POST['username'];
      $password   = md5($_POST['pass']);
        
      $this->db->select('*');
      $this->db->from('user');

    	$this->db->where('username', $user_name);
    	$this->db->where('pass', $password);
    	$query = $this->db->get();

       if($query->num_rows() > 0){
            $this->session->set_userdata('status','loged');
            $hasil = $query->result_array();
            $sess_array = array();

            foreach($hasil as $row)
            {       
                
               $sess_array = array(
                'id'        => $row['id'],
                'firstname' => $row['firstname'],
                'lastname'  => $row['lastname'],
                'nama'      => $row['nama'], 
                'username'  => $row['username'],
                'pass'      => $row['pass']
                 
               );
                $this->session->set_userdata('data_session',$sess_array);
                
            }

          	redirect(site_url('Welcome'));
        }
        else{
            redirect(site_url('Welcome/Login'));
        }

  }

  public function edit_profil()
  {

    if($this->session->userdata('status')=='loged')
    {
      $data = $this->session->userdata('data_session');
      $data['menu'] = 1;
      $this->load->view('Header/header-admin');
      $this->load->view('Sidebar/sidebar-admin',$data);
      $this->load->view('Admin/edit-profil', $data);
      $this->load->view('Footer/footer-edit-profil');
    }
    else
    {
      redirect(site_url('Welcome/Login'));
    }
     
  }

  public function edit_data_user()
  {
      $firstname    = $_POST['firstname'];
      $lastname     = $_POST['lastname'];
      $username     = $_POST['username'];
      $passlama     = $_POST['passlama'];
      $passbaru     = $_POST['passbaru'];

      $data = $this->session->userdata('data_session');
      if (md5($passlama) != $data['pass']) 
      {
          $this->session->set_flashdata('msg', 'Password Salah');
          redirect(site_url("Welcome/edit_profil"));
      }
      else
      {
          $dataupdate = array('firstname' => $firstname,
                              'lastname'  => $lastname,
                              'username'  => $username,
                              'pass'      => md5($passbaru)
                             );
          $this->db->where('id', $data['id']);
          $this->db->update('user', $dataupdate);
          
          if($this->db->affected_rows() >=0){
            redirect(site_url('Welcome/logout')); //add your code here
          }else{
            redirect(site_url('Welcome/edit_profil')); //add your your code here
          }
      }
      
  }



}
