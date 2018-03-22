<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Ambil_data extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
	}
	public function get_kabupaten()
	{
	

		$id=$this->input->post('id');

		$this->db->select('*');
      	$this->db->from('regencies');
      	$this->db->where('province_id',$id);
      	$query = $this->db->get();

        $data = $query->result_array();
        echo json_encode($data);
	}
	public function get_kecamatan()
	{
		$id=$this->input->post('id');
		
		$this->db->select('*');
      	$this->db->from('districts');
      	$this->db->where('regency_id',$id);
      	$query = $this->db->get();

        $data = $query->result_array();
        echo json_encode($data);
	}

	public function get_kelurahan()
	{
		$id=$this->input->post('id');
		
		$this->db->select('*');
      	$this->db->from('villages');
      	$this->db->where('district_id',$id);
      	$query = $this->db->get();

        $data = $query->result_array();
        echo json_encode($data);
	}

	public function tambah_designer()
	{
		$nama=$this->input->post('nama');
		$kwn=$this->input->post('kwn');

		$datainsert = array(
			'nama'		   => $nama,
			'warga_negara' => $kwn
		);
		$this->db->insert("designer",$datainsert);
		
		$this->db->select('*');
        $this->db->from('designer');
        $this->db->order_by('id_designer', 'DESC');
        $this->db->limit(1);
      	$query = $this->db->get();

        $data = $query->result_array();
        echo json_encode($data);
	}

	public function tambah_hak_prio()
	{
		$negara =$this->input->post('negara');
		$tgl	=$this->input->post('tgl');
		$nomor	=$this->input->post('nomor');
		

		$datainsert = array(
			'negara'		   => $negara,
			'tgl_penerimaan_permohonan' => $tgl,
			'no_prioritas'	=> $nomor
		);
		$this->db->insert("hak_prioritas",$datainsert);
		
		$this->db->select('*');
        $this->db->from('hak_prioritas');
        $this->db->order_by('id_hak_prioritas', 'DESC');
        $this->db->limit(1);
      	$query = $this->db->get();

        $data = $query->result_array();
        echo json_encode($data);
	}

	public function tambah_inventor()
	{
		$nama	=$this->input->post('nama');
		$kwn	=$this->input->post('kwn');
        $email 	=$this->input->post('email');
        $alamat	=$this->input->post('alamat'); 

       

		$datainsert = array(
			'nama'		   => $nama,
			'warga_negara' => $kwn,
			'email'		   => $email,
			'alamat' 	   => $alamat
		);
		$this->db->insert("inventor",$datainsert);
		
		$this->db->select('*');
        $this->db->from('inventor');
        $this->db->order_by('id_inventor', 'DESC');
        $this->db->limit(1);
      	$query = $this->db->get();

        $data = $query->result_array();
        echo json_encode($data);
	}
}
?>