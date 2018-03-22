e<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Aplikasi_haki extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->database();
		//$this->load->library('session');
	}

	public function index()
	{
		if($this->session->userdata('status')=='loged')
    {
      $data['menu'] = 2;
      $this->load->view('Header/header-admin');
      $this->load->view('Sidebar/sidebar-admin',$data);
      $this->load->view('Form/menu-aplikasi');
      $this->load->view('Footer/footer-aplikasi');
    }
    else
    {
      redirect(site_url('Welcome/Login'));
    }

	}

  public function merek()
  {
    if($this->session->userdata('status')=='loged')
    {
      $data['menu'] = 3;
      $this->db->select('*');
      $this->db->from('permohonan_merek');
      $query = $this->db->get();
      $data['data_pengajuan_merek'] = $query->result_array();
      $this->load->view('Header/header-admin');
      $this->load->view('Sidebar/sidebar-admin',$data);
      $this->load->view('Form/merek',$data);
      $this->load->view('Footer/footer-aplikasi');
    }
    else
    {
      redirect(site_url('Welcome/Login'));
    }

  }

  public function pengajuan_merek($id_pemohon = NULL)
  {
    if($this->session->userdata('status')=='loged')
    {
      $data['menu'] = 3;

      $this->db->select('*');
      $this->db->from('provinces');
      $query = $this->db->get();
      $data['data_provinsi'] = $query->result_array();

      $this->db->select('id,nama,email,id_alamat_surat,jenis');
      $this->db->from('pemohon');
      $query = $this->db->get();
      $data['pemohon'] = $query->result_array();



      $this->load->view('Header/header-crud');
      $this->load->view('Sidebar/sidebar-admin',$data);
      $this->load->view('Form/pengajuan-merek',$data);
      $this->load->view('Footer/footer-crud');
    }
    else
    {
      redirect(site_url('Welcome/Login'));
    }

  }

  public function perpanjangan_merek()
  {
    if($this->session->userdata('status')=='loged')
    {
      $data['menu'] = 3;
       $this->db->select('*');
      $this->db->from('permohonan_merek');
      $query = $this->db->get();
      $data['data_pengajuan_merek'] = $query->result_array();
      $this->load->view('Header/header-crud');
      $this->load->view('Sidebar/sidebar-admin',$data);
      $this->load->view('Form/detail-merek',$data);
      $this->load->view('Footer/footer-crud');
    }
    else
    {
      redirect(site_url('Welcome/Login'));
    }

  }

  public function detail_merek($id)
  {
    if($this->session->userdata('status')=='loged')
    {
      $data['menu'] = 3;

      $this->db->select('*,a.id as id_permohonan');
      $this->db->from('permohonan_merek as a');
      $this->db->join('pemohon as b', 'a.id_pemohon = b.id');
      $this->db->where('a.id',$id);
      $query = $this->db->get();

      $data['detail_pengajuan_merek'] = $query->result_array();

       /*get data lampiran*/
        $this->db->select('*');
        $this->db->from('file_lampiran');
        $where = "tipe=0 and id_permohonan=".$id;
        $this->db->where($where);
        $query = $this->db->get();
        $data['data_file_lampiran'] = $query->result_array();
      /*end of get data lampiran*/
      /*print_r($data);*/
      $this->load->view('Header/header-admin');
      $this->load->view('Sidebar/sidebar-admin',$data);
      $this->load->view('Form/detail-merek',$data);
      $this->load->view('Footer/footer-aplikasi');
    }
    else
    {
      redirect(site_url('Welcome/Login'));
    }

  }


  public function hak_cipta()
  {
    if($this->session->userdata('status')=='loged')
    {
      $data['menu'] = 4;

      $this->db->select('*');
      $this->db->from('permohonan_hak_cipta');
      $this->db->join('pencipta', 'permohonan_hak_cipta.id_pencipta = pencipta.id_pencipta');
      $query = $this->db->get();
      $data['data_pengajuan_hak_cipta'] = $query->result_array();

      $this->load->view('Header/header-admin');
      $this->load->view('Sidebar/sidebar-admin',$data);
      $this->load->view('Form/hak_cipta',$data);
      $this->load->view('Footer/footer-aplikasi');
    }
    else
    {
      redirect(site_url('Welcome/Login'));
    }

  }

  public function pengajuan_hak_cipta()
  {
    if($this->session->userdata('status')=='loged')
    {
      $data['menu'] = 4;
      $this->db->select('*');
      $this->db->from('provinces');
      $query = $this->db->get();
      $data['data_provinsi'] = $query->result_array();

      $this->db->select('id,nama,email,id_alamat_surat,jenis');
      $this->db->from('pemohon');
      $query = $this->db->get();
      $data['pemohon'] = $query->result_array();

      $this->load->view('Header/header-crud');
      $this->load->view('Sidebar/sidebar-admin',$data);
      $this->load->view('Form/pengajuan-hak-cipta',$data);
      $this->load->view('Footer/footer-crud');
    }
    else
    {
      redirect(site_url('Welcome/Login'));
    }

  }

  public function perpanjangan_hak_cipta()
  {
    if($this->session->userdata('status')=='loged')
    {
      $data['menu'] = 4;

      $this->db->select('*');
      $this->db->from('permohonan_hak_cipta');
      $this->db->join('pencipta', 'permohonan_hak_cipta.id_pencipta = pencipta.id_pencipta');
      $query = $this->db->get();
      $data['data_pengajuan_hak_cipta'] = $query->result_array();

      $this->load->view('Header/header-crud');
      $this->load->view('Sidebar/sidebar-admin',$data);
      $this->load->view('Form/perpanjangan-hak-cipta',$data);
      $this->load->view('Footer/footer-crud');
    }
    else
    {
      redirect(site_url('Welcome/Login'));
    }

  }

  public function paten()
  {
    if($this->session->userdata('status')=='loged')
    {
      $data['menu'] = 5;

      $this->db->select('*');
      $this->db->from('permohonan_paten');
      $this->db->join('pemohon', 'permohonan_paten.id_pemohon = pemohon.id');
      $query = $this->db->get();
      $data['data_pengajuan_paten'] = $query->result_array();

      $this->load->view('Header/header-admin');
      $this->load->view('Sidebar/sidebar-admin',$data);
      $this->load->view('Form/paten',$data);
      $this->load->view('Footer/footer-aplikasi');
    }
    else
    {
      redirect(site_url('Welcome/Login'));
    }

  }

  public function pengajuan_paten()
  {
    if($this->session->userdata('status')=='loged')
    {
      $data['menu'] = 5;
      $this->db->select('*');
      $this->db->from('provinces');
      $query = $this->db->get();
      $data['data_provinsi'] = $query->result_array();

      $this->db->select('id,nama,email,id_alamat_surat,jenis');
      $this->db->from('pemohon');
      $query = $this->db->get();
      $data['pemohon'] = $query->result_array();

      $this->load->view('Header/header-crud');
      $this->load->view('Sidebar/sidebar-admin',$data);
      $this->load->view('Form/pengajuan-paten',$data);
      $this->load->view('Footer/footer-crud');
    }
    else
    {
      redirect(site_url('Welcome/Login'));
    }

  }

  public function perpanjangan_paten()
  {
    if($this->session->userdata('status')=='loged')
    {
      $data['menu'] = 5;
      $this->load->view('Header/header-crud');
      $this->load->view('Sidebar/sidebar-admin',$data);
      $this->load->view('Form/perpanjangan-paten');
      $this->load->view('Footer/footer-crud');
    }
    else
    {
      redirect(site_url('Welcome/Login'));
    }

  }
  public function detail_paten($id)
  {
    if($this->session->userdata('status')=='loged')
    {
      $data['menu'] = 5;

      $this->db->select('*');
      $this->db->from('permohonan_paten');
      $this->db->join('pemohon', 'permohonan_paten.id_pemohon = pemohon.id');
      $this->db->where('permohonan_paten.id_permohonan_paten',$id);
      $query = $this->db->get();
      $data['detail_pengajuan_paten'] = $query->result_array();

      /*get data inventor*/
      $this->db->select('*');
      $this->db->from('inventor');
      $where = "id_inventor in (".$data['detail_pengajuan_paten'][0]["id_inventor"].")";
      $this->db->where($where);
      $query = $this->db->get();
      $data['data_inventor'] = $query->result_array();
      /*end of get data inventor*/

      /*get data hak prioritas*/
      $this->db->select('*');
      $this->db->from('hak_prioritas');
      $where = "id_hak_prioritas in (".$data['detail_pengajuan_paten'][0]["id_hak_prioritas"].")";
      $this->db->where($where);
      $query = $this->db->get();
      $data['data_hak_prioritas'] = $query->result_array();
      /*end of get data hak prioritas*/

       /*get data lampiran*/
        $this->db->select('*');
        $this->db->from('file_lampiran');
        $where = "tipe=1 and id_permohonan=".$id;
        $this->db->where($where);
        $query = $this->db->get();
        $data['data_file_lampiran'] = $query->result_array();
      /*end of get data lampiran*/


      /*print_r($data_inventor);*/
      $this->load->view('Header/header-admin');
      $this->load->view('Sidebar/sidebar-admin',$data);
      $this->load->view('Form/detail-paten',$data);
      $this->load->view('Footer/footer-aplikasi');
    }
    else
    {
      redirect(site_url('Welcome/Login'));
    }

  }

  public function design_industri()
  {
    if($this->session->userdata('status')=='loged')
    {
      $data['menu'] = 6;

      $this->db->select('*');
      $this->db->from('permohonan_design');
      $this->db->join('pemohon', 'permohonan_design.id_pemohon = pemohon.id');
      $query = $this->db->get();
      $data['data_pengajuan_design'] = $query->result_array();



     $this->load->view('Header/header-admin');
      $this->load->view('Sidebar/sidebar-admin',$data);
      $this->load->view('Form/design_industri',$data);
      $this->load->view('Footer/footer-aplikasi');
    }
    else
    {
      redirect(site_url('Welcome/Login'));
    }

  }

  public function pengajuan_design_industri()
  {
    if($this->session->userdata('status')=='loged')
    {
      $data['menu'] = 6;
      $this->db->select('*');
      $this->db->from('provinces');
      $query = $this->db->get();
      $data['data_provinsi'] = $query->result_array();

      $this->db->select('id,nama,email,id_alamat_surat,jenis');
      $this->db->from('pemohon');
      $query = $this->db->get();
      $data['pemohon'] = $query->result_array();
      $this->load->view('Header/header-crud');
      $this->load->view('Sidebar/sidebar-admin',$data);
      $this->load->view('Form/pengajuan-design-industri',$data);
      $this->load->view('Footer/footer-crud');
    }
    else
    {
      redirect(site_url('Welcome/Login'));
    }

  }

  public function perpanjangan_design_industri()
  {
    if($this->session->userdata('status')=='loged')
    {
      $data['menu'] = 6;
        $this->db->select('*');
      $this->db->from('permohonan_design');
      $this->db->join('pemohon', 'permohonan_design.id_pemohon = pemohon.id');
      $query = $this->db->get();
      $data['data_pengajuan_design'] = $query->result_array();

      $this->load->view('Header/header-crud');
      $this->load->view('Sidebar/sidebar-admin',$data);
      $this->load->view('Form/perpanjangan-design-industri',$data);
      $this->load->view('Footer/footer-crud');
    }
    else
    {
      redirect(site_url('Welcome/Login'));
    }

  }

   public function detail_design($id)
  {
    if($this->session->userdata('status')=='loged')
    {
      $data['menu'] = 6;

      $this->db->select('*');
      $this->db->from('permohonan_design');
      $this->db->join('pemohon', 'permohonan_design.id_pemohon = pemohon.id');
      $this->db->where('permohonan_design.id_permohonan',$id);
      $query = $this->db->get();
      $data['detail_pengajuan_design'] = $query->result_array();

     // print_r($data['detail_pengajuan_design']);
      /*get data designer*/
     $this->db->select('*');
      $this->db->from('designer');
      $where = "id_designer in (".$data['detail_pengajuan_design'][0]["id_designer"].")";
      $this->db->where($where);
      $query = $this->db->get();
      $data['data_designer'] = $query->result_array();
      /*end of get data inventor*/

      /*get data hak prioritas*/
      if($data['detail_pengajuan_design'][0]["id_hak_prioritas"])
      {
        $this->db->select('*');
        $this->db->from('hak_prioritas');
        $where = "id_hak_prioritas in (".$data['detail_pengajuan_design'][0]["id_hak_prioritas"].")";
        $this->db->where($where);
        $query = $this->db->get();
        $data['data_hak_prioritas'] = $query->result_array();
      }else
      {
        $data['data_hak_prioritas'] ="kosong";
      }

      /*end of get data hak prioritas*/


      /*get data lampiran*/
        $this->db->select('*');
        $this->db->from('file_lampiran');
        $where = "tipe=3 and id_permohonan=".$id;
        $this->db->where($where);
        $query = $this->db->get();
        $data['data_file_lampiran'] = $query->result_array();
      /*end of get data lampiran*/

      /*print_r($data_inventor);*/
      $this->load->view('Header/header-admin');
      $this->load->view('Sidebar/sidebar-admin',$data);
      $this->load->view('Form/detail-design',$data);
      $this->load->view('Footer/footer-aplikasi');
    }
    else
    {
      redirect(site_url('Welcome/Login'));
    }

  }

  public function detail_hak_cipta($id)
  {
    if($this->session->userdata('status')=='loged')
    {
      $data['menu'] = 4;

      $this->db->select('*, a.id as id_permohonan,
        b.nama as nama_pemohon,
        c.nama as nama_pencipta,
        c.alamat as alamat_pencipta,
        c.email as email_pencipta,
        c.telpon as telpon_pencipta,
        c.fax as fax_pencipta,
         d.nama as nama_pemegang_hak_cipta,
        d.alamat as alamat_pemegang_hak_cipta,
        d.email as email_pemegang_hak_cipta,
        d.telpon as telpon_pemegang_hak_cipta,
        d.fax as fax_pemegang_hak_cipta, ');
      $this->db->from('permohonan_hak_cipta as a');
      $this->db->join('pemohon as b', 'a.id_pemohon = b.id');
      $this->db->join('pencipta as c', 'a.id_pencipta = c.id_pencipta');
      $this->db->join('pemegang_hak_cipta as d', 'a.id_pemegang_hak_cipta = d.id_pemegang_hak_cipta');
      $this->db->where('a.id',$id);
      $query = $this->db->get();
      $data['detail_pengajuan_hak_cipta'] = $query->result_array();

       /*get data lampiran*/
        $this->db->select('*');
        $this->db->from('file_lampiran');
        $where = "tipe=2 and id_permohonan=".$id;
        $this->db->where($where);
        $query = $this->db->get();
        $data['data_file_lampiran'] = $query->result_array();
      /*end of get data lampiran*/

     $this->load->view('Header/header-admin');
      $this->load->view('Sidebar/sidebar-admin',$data);
      $this->load->view('Form/detail-hak-cipta',$data);
      $this->load->view('Footer/footer-aplikasi');
    }
    else
    {
      redirect(site_url('Welcome/Login'));
    }

  }


}
