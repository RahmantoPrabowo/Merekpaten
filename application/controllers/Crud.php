<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Crud extends CI_Controller {

  public function __construct()
  {
    parent::__construct();
  }

	public function index()
	{

	}

	public function InsertPemohon()
	{

        $alamat_surat_sama = $_POST['alamat-surat-sama'];
		    $datainsert = array(

          'nama'              => $_POST['nama-pemohon'],
          'jenis'             => $_POST['jenis-pemohon'],
          'warga_negara'      => $_POST['kewarganegaraan'],
          'alamat'            => $_POST['alamat-lengkap'],
          'negara'            => $_POST['negara'],
          'propinsi'          => $_POST['propinsi'],
          'kabkota'           => $_POST['kabupaten'],
          'kecamatan'         => $_POST['kecamatan'],
          'kelurahan'         => $_POST['kelurahan'],
          'kodepos'           => $_POST['kode-pos'],
          'telpon'            => $_POST['telpon'],
          'email'             => $_POST['email'],
          'npwp'              => $_POST['npwp']

        );



    if($alamat_surat_sama=="1")
    {
      $this->db_model->InsertAlamatSurat($datainsert);
    }
    else{
      $datainsertbeda = array(
          'alamat'            => $_POST['alamat-lengkap-surat'],
          'negara'            => $_POST['negara-surat'],
          'propinsi'          => $_POST['propinsi-surat'],
          'kabkota'           => $_POST['kabupaten-surat'],
          'kecamatan'         => $_POST['kecamatan-surat'],
          'kelurahan'         => $_POST['kelurahan-surat'],
          'telpon'            => $_POST['telpon'],
          'email'             => $_POST['email'],
          'kodepos'           => $_POST['kode-pos-surat'],

      );
      $this->db_model->InsertAlamatSurat($datainsertbeda);
    }

    $this->db->select('id');
    $this->db->from('alamat_surat');
    $this->db->order_by('id', 'DESC');
    $this->db->limit(1);
    $query = $this->db->get();
    $hasil_query = $query->result_array();
    $id_alamat_surat = $hasil_query[0]['id'];

    $datainsert['id_alamat_surat'] = $id_alamat_surat;
    $this->db_model->InsertPemohon($datainsert);

    redirect('aplikasi_haki/pengajuan_merek', 'refresh');
	}



  public function InsertPermohonanMerek()
  {

        $jenis1="0";
        $jenis2="0";
        $jenis3="0";
        $jenis4="0";
        if($_POST['jenis-lebih1'])
          $jenis1 = $_POST['jenis-lebih1'];
        if($_POST['jenis-UMKM'])
          $jenis2 = $_POST['jenis-UMKM'];
        if($_POST['jenis-perorangan'])
          $jenis3 = $_POST['jenis-perorangan'];
        if($_POST['jenis-badan-hukum'])
          $jenis3 = $_POST['jenis-badan-hukum'];
        $jenis_permohonan = $jenis1.",".$jenis2.",".$jenis3.",".$jenis4;


        $tipe1="0";
        $tipe2="0";
        $tipe3="0";
        $tipe4="0";
        $tipe5="0";
        $tipe6="0";
        if($_POST['tipe_merek_kata'])
          $tipe1 = $_POST['tipe_merek_kata'];
        if($_POST['tipe_merek_tiga_dimensi'])
          $tipe2 = $_POST['tipe_merek_tiga_dimensi'];
        if($_POST['tipe_merek_lukisan_logo'])
          $tipe3 = $_POST['tipe_merek_lukisan_logo'];
        if($_POST['tipe_merek_suara'])
          $tipe4 = $_POST['tipe_merek_suara'];
        if($_POST['tipe_merek_hologram'])
          $tipe5 = $_POST['tipe_merek_hologram'];
        if($_POST['tipe_merek_kolektif'])
          $tipe6 = $_POST['tipe_merek_kolektif'];
        $tipe_merek = $tipe1.",".$tipe2.",".$tipe3.",".$tipe4.",".$tipe5.",".$tipe6;


        $lampiran1="0";
        $lampiran2="0";
        $lampiran3="0";
        $lampiran4="0";
        $lampiran5="0";
        $lampiran6="0";
        if($_POST['lampiran_merek'])
          $lampiran1 = $_POST['lampiran_merek'];
        if($_POST['lampiran_pembayaran_biaya'])
          $lampiran2 = $_POST['lampiran_pembayaran_biaya'];
        if($_POST['lampiran_surat_kuasa'])
          $lampiran3 = $_POST['lampiran_surat_kuasa'];
        if($_POST['lampiran_surat_pernyataan'])
          $lampiran4 = $_POST['lampiran_surat_pernyataan'];
        if($_POST['lampiran_bukti_prioritas'])
          $lampiran5 = $_POST['lampiran_bukti_prioritas'];
        if($_POST['lampiran_merek_kolektif'])
          $lampiran6 = $_POST['lampiran_merek_kolektif'];
        $lampiran = $lampiran1.",".$lampiran2.",".$lampiran3.",".$lampiran4.",".$lampiran5.",".$lampiran6;


        if($_FILES['label-merek'])
        {
          $config['upload_path']          = './Gambar/Label';
          $config['allowed_types']        = 'gif|jpg|png';
          $config['max_size']             = 10000;
          $config['max_width']            = 10240;
          $config['max_height']           = 10240;
          $config['encrypt_name']         = TRUE;
          $new_name                       = date("d-m-YY")."-".$_POST["nama-merek"];
          $config['file_name']            = $new_name;

          $this->load->library('upload', $config);

          if ( ! $this->upload->do_upload('label-merek'))
          {
                  $error = array('error' => $this->upload->display_errors());
                  $img_address = "";
          }
          else
          {
                  $data = array('upload_data' => $this->upload->data());
                  print_r($data);
                  $img_address = base_url("/Gambar/Label/").$data['upload_data']['file_name'];
          }
        }
        else{
          $img_address = "kosong";
        }



         $datainsert = array(
          'id_pemohon'            => $_POST['id-pemohon-dipilih'],
          'jenis_pemohon'         => $_POST['jenis-pemohon'],
          'id_alamat_surat'       => $_POST['id-surat-pemohon-dipilih'],
          'id_kuasa'              => "1",
          'tanggal-pengajuan'     => date("Y-m-d", strtotime($_POST['tanggal-pengajuan'])),
          'tanggal-penerimaan'    => date("Y-m-d", strtotime($_POST['tanggal-penerimaan'])),
          'nomor-referensi'       => $_POST['nomor-referensi'],
          'nomor-permohonan'      => $_POST['nomor-permohonan'],
          'jenis-permohonan'      => $jenis_permohonan,
          'tipe-merek'            => $tipe_merek,
          'terjemahan-merek'      => $_POST['terjemahan-merek'],
          'pengucapan'            => $_POST['pengucapan'],
          'unsur-warna'           => $_POST['unsur-warna'],
          'label-merek'           => $img_address,
          'nama-merek'            => $_POST['nama-merek'],
          'deskripsi-merek'       => $_POST['deskripsi-merek'],
          'kelas-merek'           => $_POST['kelas-merek'],
          'jenis-merek'           => $_POST['jenis-merek'],
          'lampiran'              => $lampiran,
          'status'                => "1"
        );

        $this->db_model->InsertPermohonanMerek($datainsert);

        redirect(site_url("aplikasi_haki/merek"));

  }

  public function InsertPermohonanHakCipta()
  {

           $datainsertpencipta = array(
          'nama'            => $_POST['nama-pencipta'],
          'alamat'          => $_POST['alamat-pencipta'],
          'email'           => $_POST['email-pencipta'],
          'telpon'          => $_POST['telpon-pencipta'],
          'fax'             => $_POST['fax-pencipta'],
          );
          $this->db->insert("pencipta",$datainsertpencipta);

          $this->db->select('id_pencipta');
          $this->db->from('pencipta');
          $this->db->order_by('id_pencipta', 'DESC');
          $this->db->limit(1);
          $query = $this->db->get();
          $hasil_query = $query->result_array();
          $id_pencipta = $hasil_query[0]['id_pencipta'];

          $id_pemegang_cipta = "";
          if($_POST['nama-pemegang-cipta']){
            $datainsertpencipta = array(
            'nama'            => $_POST['nama-pemegang-cipta'],
            'alamat'          => $_POST['alamat-pemegang-cipta'],
            'email'           => $_POST['email-pemegang-cipta'],
            'telpon'          => $_POST['telpon-pemegang-cipta'],
            'fax'             => $_POST['fax-pemegang-cipta'],
            );
            $this->db->insert("pencipta",$datainsertpencipta);

            $this->db->select('id_pencipta');
            $this->db->from('pencipta');
            $this->db->order_by('id_pencipta', 'DESC');
            $this->db->limit(1);
            $query = $this->db->get();
            $hasil_query = $query->result_array();
            $id_pemegang_cipta = $hasil_query[0]['id_pencipta'];
          }

         $datainsert = array(
          'tanggal-permohonan'      => date("Y-m-d", strtotime($_POST['tanggal-permohonan'])),
          'tanggal-penerimaan'      => date("Y-m-d", strtotime($_POST['tanggal-penerimaan'])),
          'nomor-permohonan'        => $_POST['nomor-permohonan'],
          'id_pencipta'             => $id_pencipta,
          'id_pemegang_hak_cipta'   => $id_pemegang_cipta,
          'judul-ciptaan'           => $_POST['judul-ciptaan'],
          'tanggal-diumumkan'       => date("Y-m-d", strtotime($_POST['tanggal-diumumkan'])),
          'uraian-ciptaan'          => $_POST['uraian-ciptaan'],
          'status'                  => "1",
          'id_pemohon'              => $_POST['id-pemohon-dipilih'],
          'id_kuasa'                => "1"
        );

        $this->db_model->InsertPermohonanHakCipta($datainsert);
  }

  public function InsertPermohonanDesign()
  {


          $lampiran1 = $_POST['lampiran_surat_kuasa'];

          $lampiran2 = $_POST['lampiran_surat_pernyataan'];

          $lampiran3 = $_POST['lampiran_bukti_pemilikan'];

          $lampiran4 = $_POST['lampiran_bukti_prioritas'];

          $lampiran5 = $_POST['lampiran_dokumen_permohonan'];

          $lampiran6 = $_POST['dokumen_lain'];
          $lampiran = $lampiran1.",".$lampiran2.",".$lampiran3.",".$lampiran4.",".$lampiran5.",".$lampiran6;

         $datainsert = array(

          'tanggal-permohonan'      => date("Y-m-d", strtotime($_POST['tanggal-permohonan'])),
          'tanggal-penerimaan'      => date("Y-m-d", strtotime($_POST['tanggal-penerimaan'])),
          'nomor-permohonan'        => $_POST['nomor-permohonan'],
          'id-pemohon-dipilih'      => $_POST['id-pemohon-dipilih'],
          'id-konsultan'            => "1",//$_POST['id-konsultan'],
          'judul-design'            => $_POST['judul-design'],
          'id-designer'             => $_POST['id-designer'],
          'id-hak-prioritas'        => $_POST['id-hak-prioritas'],
          'kelas-design'            => $_POST['kelas-design'],
          'lampiran_desain'         => $lampiran,
          'status'                  => "1"
          );

        $this->db_model->InsertPermohonanDesign($datainsert);
  }

  public function InsertPermohonanPaten()
  {

          $lampiran1="0";
          $lampiran2="0";
          $lampiran3="0";
          $lampiran4="0";
          $lampiran5="0";
          $lampiran6="0";
          $lampiran7="0";
          $lampiran8="0";

          $lampiran1 = $_POST['lampiran_surat_kuasa'];
          $lampiran2 = $_POST['lampiran_surat_pengalihan'];
          $lampiran3 = $_POST['lampiran_surat_pernyataan_kepemilikan'];
          $lampiran4 = $_POST['lampiran_bukti_penunjukan'];
          $lampiran5 = $_POST['lampiran_dokumen_prioritas'];
          $lampiran6 = $_POST['lampiran_dokumen_permohonan'];
          $lampiran7 = $_POST['lampiran_sertifikat_penyimpanan'];
          $lampiran8 = $_POST['dokumen_lain'];
          $lampiran = $lampiran1.",".$lampiran2.",".$lampiran3.",".$lampiran4.",".$lampiran5.",".$lampiran6.",".$lampiran7.",".$lampiran8;

          $file_invensi1="0";
          $file_invensi1="0";
          $file_invensi1="0";
          $file_invensi1="0";
          $file_invensi1 = $_POST['jumlah-uraian'];
          $file_invensi2 = $_POST['jumlah-klaim'];
          $file_invensi3 = $_POST['lampiran_abstrak'];
          $file_invensi4 = $_POST['jumlah-gambar'];
          $file_invensi = $file_invensi1.",".$file_invensi2.",".$file_invensi3.",".$file_invensi4;

         $datainsert = array(

          'tanggal-pengajuan'         => date("Y-m-d", strtotime($_POST['tanggal-pengajuan'])),
          'no-permohonan'             => $_POST['nomor-permohonan'],
          'nama-paten'                => $_POST['nama-paten'],
          'id-pemohon'                => $_POST['id-pemohon-dipilih'],
          'jenis-paten'               => $_POST['jenis-paten'],
          'no-pct-permohonan'         => $_POST['nomor-PCT'],
          'id-konsultan'              => "1",
          'judul-invensi'             => $_POST['judul-invensi'],
          'no-perubahan-paten'        => $_POST['no-perubahan-paten'],
          'id-inventor'               => $_POST['id-inventor'],
          'id-hak-prioritas'          => $_POST['id-hak-prioritas'],
          'lampiran'                  => $lampiran,
          'file-invensi'              => $file_invensi,
          'nomor-gambar-abstrak'      => $_POST['nomor-gambar'],
          'status'                    => "1"
          );

         $this->db_model->InsertPermohonanPaten($datainsert);

         //Create file word
         $this->load->library('word');
         $objPHPWord = new PHPWord();
         //our docx will have 'lanscape' paper orientation
         $document = $objPHPWord->loadTemplate('assets/File/template_permohonan_paten.docx');
         $document->setValue("nama_pemohon","Belum Ada");
         $document->setValue("alamat_pemohon","Belum Ada");
         //$document->replaceStrToImg("qrcode", "tes.jpg");
         $filename="Permohonan_paten".$_POST['nama-paten'].".docx";
         $path = "assets/Export/2018";
         if(!is_dir($path)) //create the folder if it's not already exists
         {
           mkdir($path,0755,TRUE);
         }
         $urlsave = $path.'/'.$filename;
         //$document_xml = $document->get_document_xml();
         $document->save($urlsave);
         //echo $document_xml;
         //end of create file word



        redirect("aplikasi_haki/paten","refresh");
  }

  public function change_status_paten()
  {

    $id = $_POST['id'];
    $status = $_POST['status'];
    $data = array(
      'status' => $status
    );
    $this->db->where('id_permohonan_paten', $id);
    $this->db->update('permohonan_paten', $data);

    echo $status;
  }

  public function change_status_hak_cipta()
  {

    $id = $_POST['id'];
    $status = $_POST['status'];
    $data = array(
      'status' => $status
    );
    $this->db->where('id', $id);
    $this->db->update('permohonan_hak_cipta', $data);

    echo $status;
  }

  public function change_status_design()
  {

    $id = $_POST['id'];
    $status = $_POST['status'];
    $data = array(
      'status' => $status
    );
    $this->db->where('id_permohonan', $id);
    $this->db->update('permohonan_design', $data);

    echo $status;
  }

  public function change_status_merek()
  {

    $id = $_POST['id'];
    $status = $_POST['status'];
    $data = array(
      'status' => $status
    );
    $this->db->where('id', $id);
    $this->db->update('permohonan_merek', $data);

    echo $status;
  }

  public function save_lampiran()
  {

      $tipe = array('detail_merek','detail_paten','detail_hak_cipta','detail_design');

      $id_permohonan = $_POST["id-pengajuan"];
      $id_tipe = $_POST['id-tipe'];
      print_r($_FILES['file-lampiran']);
     if($_FILES['file-lampiran'])
        {
          $config['upload_path']          = './Berkas';
          $config['allowed_types']        = 'gif|jpg|png|docx|pdf';
          $config['max_size']             = 10000;

          $config['encrypt_name']         = TRUE;
          $new_name                       = date("d-m-YY")."-".$_FILES['file-lampiran']['name'];
          $config['file_name']            = $new_name;

          $this->load->library('upload', $config);

          if ( ! $this->upload->do_upload('file-lampiran'))
          {
                  $error = array('error' => $this->upload->display_errors());
                  $file_address = "kosong";
          }
          else
          {
                  $data = array('upload_data' => $this->upload->data());
                  $file_address = base_url("/Berkas/").$data['upload_data']['file_name'];
          }
        }
        else{
          $file_address = "kosong";
        }

        echo $file_address;

        $datainsert = array(

        'id_permohonan'   => $id_permohonan,
        'tipe'   => $id_tipe,
        'address'    => $file_address,
        'file_name' => $_FILES['file-lampiran']['name']
    );

    $this->db->insert('file_lampiran', $datainsert);

    echo $tipe[$id_tipe];

   redirect(site_url("aplikasi_haki/".$tipe[$id_tipe]."/".$id_permohonan));
  }

  public function delete_file_lampiran(){

    $id_file      = $_POST['id'];
    $tipe         = $_POST['tipe'];
    $id_pengajuan = $_POST['id_pengajuan'];


    $this->db->where('id', $id_file);
    $this->db->delete('file_lampiran');

    $this->db->select('*');
    $this->db->from('file_lampiran');
    $where = "tipe=".$tipe." and id_permohonan=".$id_pengajuan;
    $this->db->where($where);
    $query = $this->db->get();
    $data['data_file_lampiran'] = $query->result_array();

    if(count($data['data_file_lampiran']) != 0){
      echo json_encode($data['data_file_lampiran']);
    }else{
      echo "kosong";
    }

  }

  public function WriteToWord()
  {
    $this->load->library('word');
    $objPHPWord = new PHPWord();
    //our docx will have 'lanscape' paper orientation
    $document = $objPHPWord->loadTemplate('assets/File/template_word.docx');


    $document->setValue("bowo","ini text yang mau di masukin");

  //  $document->replaceStrToImg("qrcode", "tes.jpg");



    $filename="Percobaan.docx";

  $path = "assets/file/2017";

    if(!is_dir($path)) //create the folder if it's not already exists
    {
      mkdir($path,0755,TRUE);
    }

  $urlsave = $path.'/'.$filename;
//$document_xml = $document->get_document_xml();

    $document->save($urlsave);
    //echo $document_xml;
  }




}
