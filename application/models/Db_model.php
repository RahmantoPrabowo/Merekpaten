<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Db_model extends CI_Model {


	public function InsertPermohonan($data)
	{
		 $datainsert = array(
        'judul'     => $judul,
        'deskripsi' => $deskripsi,
        'berkas'    => $berkas,
        'tanggal'   => $tanggal,
        'user_id'   => $user_id,
        'status'    => $status
		);

		$this->db->insert('permohonan', $datainsert);
	}

	public function InsertAlamatSurat($data)
	{
		 $datainsert = array(
        'alamat' 			=> $data['alamat'],
        'negara'    		=> $data['negara'],
        'propinsi'   		=> $data['propinsi'],
        'kabkota'   		=> $data['kabkota'],
        'kecamatan'    		=> $data['kecamatan'],
        'kelurahan'			=> $data['kelurahan'],
        'telpon'			=> $data['telpon'],
        'email'				=> $data['email'],
        'kodepos'			=> $data['kodepos'],

		);

		$this->db->insert('alamat_surat', $datainsert);
	}

	public function InsertPemohon($data)
	{
		 $datainsert = array(
        /*'id'     			=> $data['id'],*/
        'jenis' 			=> $data['jenis'],
        'nama'    			=> $data['nama'],
        'warga_negara'		=> $data['warga_negara'],
        'alamat'   			=> $data['alamat'],
        'kabkota'   		=> $data['kabkota'],
        'propinsi'    		=> $data['propinsi'],
        'kecamatan'         => $data['kecamatan'],
        'kelurahan'         => $data['kelurahan'],
        'telpon'			=> $data['telpon'],
        'email'				=> $data['email'],
        'kodepos'			=> $data['kodepos'],
        'negara'   			=> $data['negara'],
        'id_alamat_surat' 	=> $data['id_alamat_surat'],
        'npwp'              => $data['npwp']
		);

		$this->db->insert('pemohon', $datainsert);
	}

	public function UpdatePemohon($i,$data)
	{
		$this->db->where('id', $id);
		$this->db->update('pemohon', $data);
	}

	public function DeletePemohon($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('pemohon');
	}

	/*Fungsi Kuasa*/
	public function InsertKuasa($data)
	{
		 $datainsert = array(
        /*'id'     			=> $data['id'],*/
        'jenis' 			=> $data['jenis'],
        'nama'    			=> $data['nama'],
        'alamat'   			=> $data['alamat'],
        'kabkota'   		=> $data['kabkota'],
        'propinsi'    		=> $data['propinsi'],
        'telpon'			=> $data['telpon'],
        'email'				=> $data['email'],
        'kodepos'			=> $data['kodepos'],
        'negara'   			=> $data['negara'],
        'id_alamat_surat' 	=> $data['id_alamat_surat']
		);

		$this->db->insert('kuasa', $datainsert);
	}

	public function UpdateKuasa($i,$data)
	{
		$this->db->where('id', $id);
		$this->db->update('kuasa', $data);
	}

	public function DeleteKuasa($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('kuasa');
	}

	/*End of Fungsi Kuasa*/

	/*Fungsi Paten*/

	public function InsertPermohonanPaten($data)
	{
		 $datainsert = array(
		  'tgl_pengajuan'             => $data['tanggal-pengajuan'],
          'no_permohonan'             => $data['no-permohonan'],
          'nama_paten'                => $data['nama-paten'],
          'id_pemohon'                => $data['id-pemohon'],
          'jenis_paten'               => $data['jenis-paten'],
          'no_pct_permohonan'         => $data['no-pct-permohonan'],
          'id_konsultan'              => $data['id-konsultan'],
          'judul_invensi'             => $data['judul-invensi'],
          'no_perubahan_paten'        => $data['no-perubahan-paten'],
          'id_inventor'               => $data['id-inventor'],
          'id_hak_prioritas'          => $data['id-hak-prioritas'],
          'lampiran'                  => $data['lampiran'],
          'file_invensi'              => $data['file-invensi'],
          'nomor_gambar_abstrak'      => $data['nomor-gambar-abstrak'],
          'status'                    => $data['status']
		);

		$this->db->insert('permohonan_paten', $datainsert);
	}

	public function UpdatePermohonanPaten($i,$data)
	{
		$this->db->where('id_permohonan_paten', $id);
		$this->db->update('permohonan_paten', $data);
	}

	public function DeletePermohonanPaten($id)
	{
		$this->db->where('id_permohonan_paten', $id);
		$this->db->delete('permohonan_paten');
	}

	public function InsertPaten($data)
	{
		 $datainsert = array(
		'tgl_permohonan'  		=> $data['tgl_permohonan'],
		'id_pemohon'	  		=> $data['id_pemohon'],
		'jenis_permohonanan'	=> $data['jenis_permohonanan'],
		'no_pct_permohonanan'  	=> $data['no_pct_permohonanan'],
		'id_konsultan'		  	=> $data['id_konsultan'],
		'id_badan_hukum'	  	=> $data['id_badan_hukum'],

		);

		$this->db->insert('permohonan_paten', $datainsert);
	}

	public function UpdatePaten($i,$data)
	{
		$this->db->where('id_permohonan_paten', $id);
		$this->db->update('permohonan_paten', $data);
	}

	public function DeletePaten($id)
	{
		$this->db->where('id_permohonan_paten', $id);
		$this->db->delete('permohonan_paten');
	}

	/*End of Fungsi Paten*/


	/*Fungsi Design*/

	public function InsertPermohonanDesign($data)
	{
		 $datainsert = array(
			'tanggal_permohonan' 	=> $data['tanggal-permohonan'],
			'tanggal_penerimaan'	=> $data['tanggal-penerimaan'],
			'no_permohonan'			=> $data['nomor-permohonan'],
			'id_pemohon'			=> $data['id-pemohon-dipilih'],
			'id_konsultan'			=> $data['id-konsultan'],
			'judul_desain'			=> $data['judul-design'],
			'id_designer'			=> $data['id-designer'],
			'id_hak_prioritas'		=> $data['id-hak-prioritas'],
			'kelas_desain'			=> $data['kelas-design'],
			'lampiran_desain'		=> $data['lampiran_desain'],
			'status'				=> $data['status']
		);

		$this->db->insert('permohonan_design', $datainsert);
	}

	public function UpdatePermohonanDesign($i,$data)
	{
		$this->db->where('id_permohonan', $id);
		$this->db->update('permohonan_design', $data);
	}

	public function DeletePermohonanDesign($id)
	{
		$this->db->where('id_permohonan', $id);
		$this->db->delete('permohonan_design');
	}

	public function InsertDesign($data)
	{
		 $datainsert = array(
		'tgl_permohonan'  		=> $data['tgl_permohonan'],
		'id_pemohon'	  		=> $data['id_pemohon'],
		'jenis_permohonanan'	=> $data['jenis_permohonanan'],
		'no_pct_permohonanan'  	=> $data['no_pct_permohonanan'],
		'id_konsultan'		  	=> $data['id_konsultan'],
		'id_badan_hukum'	  	=> $data['id_badan_hukum'],

		);

		$this->db->insert('design', $datainsert);
	}

	public function UpdateDesign($i,$data)
	{
		$this->db->where('id_design', $id);
		$this->db->update('design', $data);
	}

	public function DeleteDesign($id)
	{
		$this->db->where('id_design', $id);
		$this->db->delete('design');
	}

	/*End of Fungsi Design*/

	/*Fungsi Merek*/

	public function InsertPermohonanMerek($data)
	{

		$datainsert = array (
			'id_pemohon'				=> $data['id_pemohon'],
			'jenis_pemohon'				=> $data['jenis_pemohon'],
			'id_alamat_surat'			=> $data['id_alamat_surat'],
			'id_kuasa'					=> $data['id_kuasa'],
			'tanggal_pengajuan'		    => $data['tanggal-pengajuan'],
			'tanggal_penerimaan'		=> $data['tanggal-penerimaan'],
			'nomor_referensi'			=> $data['nomor-referensi'],
			'nomor_permohonan'		    => $data['nomor-permohonan'],
			'jenis_permohonan'			=> $data['jenis-permohonan'],
			'tipe_merek'				=> $data['tipe-merek'],
			'terjemahan_merek'			=> $data['terjemahan-merek'],
			'pengucapan'				=> $data['pengucapan'],
			'unsur_warna'				=> $data['unsur-warna'],
			'label_merek'				=> $data['label-merek'],
			'nama_merek'				=> $data['nama-merek'],
			'deskripsi_merek'			=> $data['deskripsi-merek'],
			'kelas_merek'				=> $data['kelas-merek'],
			'jenis_merek'				=> $data['jenis-merek'],
			'lampiran'					=> $data['lampiran'],
			'status'					=> $data['status'],

		);

		$this->db->insert('permohonan_merek', $datainsert);
	}

	public function UpdatePermohonanMerek($i,$data)
	{
		$this->db->where('id_permohonan_paten', $id);
		$this->db->update('permohonan_paten', $data);
	}

	public function DeletePermohonanMerek($id)
	{
		$this->db->where('id_permohonan_paten', $id);
		$this->db->delete('permohonan_paten');
	}

	public function InsertMerek($data)
	{
		 $datainsert = array(
		'tgl_permohonan'  		=> $data['tgl_permohonan'],
		'id_pemohon'	  		=> $data['id_pemohon'],
		'jenis_permohonanan'	=> $data['jenis_permohonanan'],
		'no_pct_permohonanan'  	=> $data['no_pct_permohonanan'],
		'id_konsultan'		  	=> $data['id_konsultan'],
		'id_badan_hukum'	  	=> $data['id_badan_hukum'],

		);

		$this->db->insert('permohonan_paten', $datainsert);
	}

	public function UpdateMerek($i,$data)
	{
		$this->db->where('id_permohonan_paten', $id);
		$this->db->update('permohonan_paten', $data);
	}

	public function DeleteMerek($id)
	{
		$this->db->where('id_permohonan_paten', $id);
		$this->db->delete('permohonan_paten');
	}

	/*End of Fungsi Merek*/

/*Fungsi Hak Cipta*/

	public function InsertPermohonanHakCipta($data)
	{

		$datainsert = array (
			'tanggal_permohonan'	=> $data['tanggal-permohonan'],
			'tanggal_penerimaan'	=> $data['tanggal-penerimaan'],
			'no_permohonan'			=> $data['nomor-permohonan'],
			'id_pencipta'			=> $data['id_pencipta'],
			'id_pemegang_hak_cipta'	=> $data['id_pemegang_hak_cipta'],
			'id_kuasa'				=> $data['id_kuasa'],
			'judul_ciptaan'			=> $data['judul-ciptaan'],
			'tanggal_diumumkan'		=> $data['tanggal-diumumkan'],
			'uraian_ciptaan'		=> $data['uraian-ciptaan'],
			'status'				=> $data['status'],
			'id_pemohon'			=> $data['id_pemohon']

		);

		$this->db->insert('permohonan_hak_cipta', $datainsert);
	}

	public function UpdatePermohonanHakCipta($i,$data)
	{
		$this->db->where('id_permohonan_paten', $id);
		$this->db->update('permohonan_paten', $data);
	}

	public function DeletePermohonanHakCipta($id)
	{
		$this->db->where('id_permohonan_paten', $id);
		$this->db->delete('permohonan_paten');
	}

	public function InsertHakCipta($data)
	{
		 $datainsert = array(
		'tgl_permohonan'  		=> $data['tgl_permohonan'],
		'id_pemohon'	  		=> $data['id_pemohon'],
		'jenis_permohonanan'	=> $data['jenis_permohonanan'],
		'no_pct_permohonanan'  	=> $data['no_pct_permohonanan'],
		'id_konsultan'		  	=> $data['id_konsultan'],
		'id_badan_hukum'	  	=> $data['id_badan_hukum'],

		);

		$this->db->insert('permohonan_paten', $datainsert);
	}

	public function UpdateHakCipta($i,$data)
	{
		$this->db->where('id_permohonan_paten', $id);
		$this->db->update('permohonan_paten', $data);
	}

	public function DeleteHakCipta($id)
	{
		$this->db->where('id_permohonan_paten', $id);
		$this->db->delete('permohonan_paten');
	}

	/*End of Fungsi Hak Cipta*/


}
