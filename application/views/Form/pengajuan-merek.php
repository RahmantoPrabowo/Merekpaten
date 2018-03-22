<!--  <script type='text/javascript'>
        var site = "<?php //echo site_url();?>";
        $(function(){
            $('.autocomplete').autocomplete({
                // serviceUrl berisi URL ke controller/fungsi yang menangani request kita
                serviceUrl: site+'/autocomplete/searchProvinsi',
                // fungsi ini akan dijalankan ketika user memilih salah satu hasil request
                onSelect: function (suggestion) {
                    $('#').val(''+suggestion.name); // membuat id 'v_nim' untuk ditampilkan
                    $('#v_jurusan').val(''+suggestion.id); // membuat id 'v_jurusan' untuk ditampilkan
                }
            });
        });
  </script> -->



<div id="content">
<div id="content-header">
    <div id="breadcrumb"> <a href="<?php echo site_url();?>" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="<?php echo site_url("aplikasi_haki");?>" class="tip-bottom">Aplikasi Haki</a> <a href="<?php echo site_url("aplikasi_haki/merek");?>" class="tip-bottom">Merek</a><a href="" class="current">Pengajuan Merek</a> </div>
    <h1>Pengajuan Merek</h1>
</div> 
<div class="container-fluid">
  <hr>
  <div class="row-fluid">



    <div class="span6">

      <!-- Tab Pemohon -->
      <div class="widget-box">
          <div class="widget-title">
            <ul class="nav nav-tabs">
              <li class="active"><a data-toggle="tab" href="#tab1">Tambah Pemohon Baru</a></li>
              <li><a data-toggle="tab" href="#tab2">Pemohon Lama</a></li>
            </ul>
          </div>

          <div class="widget-content tab-content">
            <div id="tab1" class="tab-pane active">
                <div class="widget-content nopadding">
                  <form action="<?php echo site_url("crud/InsertPemohon");?>" method="POST" class="form-horizontal">
                    <div class="control-group">
                      <label class="control-label">Nama Lengkap </label>
                      <div class="controls">
                        <input type="text" class="span11" placeholder="Nama Lengkap" name="nama-pemohon" required />
                      </div>
                    </div>
                    <div class="control-group">
                      <label class="control-label">Jenis</label>
                      <div class="controls">
                        <select id="jenis-pemohon" name="jenis-pemohon">
                          <option value="1">Perorangan</option>
                          <option value="2">Badan Usaha</option>
                        </select>
                      </div>
                    </div>
                     <!-- <div class="control-group">
                      <label class="control-label">Nama Perusahaan</label>
                      <div class="controls">
                        <input type="text" class="span11" placeholder="Nama Perusahaan" name="nama-perusahaan"/>
                      </div>
                    </div> -->
                    <div class="control-group">
                      <label class="control-label">Warga Negara</label>
                      <div class="controls">
                        <select id="kewarganegaraan" name="kewarganegaraan">
                          <option value="1">WNI</option>
                          <option value="2">WNA</option>
                        </select>
                      </div>
                    </div>
                    <hr>
                    <div class="control-group">
                      <label class="control-label">Alamat</label>
                    </div>
                    <div class="control-group">
                      <label class="control-label">Negara</label>
                      <div class="controls">
                        <select class="provinsi" name="negara">
                          <option value="Indoensia">Indonesia</option>
                        </select>
                      </div>
                    </div>
                    <div class="control-group">
                      <label class="control-label">Provinsi</label>
                      <div class="controls">
                        <select class="provinsi" name="propinsi">
                          <option value="placeholder">Pilih Provinsi</option>
                          <?php
                            foreach ($data_provinsi as $key) {
                                echo "<option value='".$key['id']."'>".$key['name']."</option>";
                            }
                          ?>
                        </select>
                      </div>
                    </div>
                     <div class="control-group">
                      <label class="control-label">Kota/Kabupaten</label>
                      <div class="controls controls-kabupaten">
                        <select id="kabupaten" name="kabupaten" disabled>
                          <option value="placeholder">Pilih Kabupaten/Kota</option>
                        </select>
                      </div>
                    </div>
                     <div class="control-group">
                      <label class="control-label">Kecamatan</label>
                      <div class="controls controls-kecamatan">
                        <select id="kecamatan" name="kecamatan" disabled>
                          <option value="placeholder">Pilih Kecamatan</option>
                        </select>
                      </div>
                    </div>
                     <div class="control-group">
                      <label class="control-label">Kelurahan</label>
                      <div class="controls controls-kelurahan">
                        <select id="kelurahan" name="kelurahan" disabled>
                          <option value="placeholder">Pilih Kelurahan</option>
                          
                        </select>
                      </div>
                    </div>
                     <div class="control-group">
                      <label class="control-label">Alamat Lengkap</label>
                      <div class="controls">
                        <textarea class="span11" placeholder="Nama Jalan, Perumahan, RT, RW" name="alamat-lengkap"></textarea>
                      </div>
                    </div>
                    <div class="control-group">
                      <label class="control-label">Kode Pos</label>
                      <div class="controls">
                        <input type="text" class="span11" placeholder="" name="kode-pos"/>
                      </div>
                    </div>
                    <hr>
                    <input type="hidden" name="alamat-surat-sama" id="alamat-surat-sama" value="1">
                    <div class="control-group">
                      <label class="control-label" style="color: #2080aa; font-weight: bold;">Klik Jika</label>
                       <label id="label-buka" class="control-label" style="color: #2080aa; font-weight: bold;" onclick="BukaAlamatSurat()" >Alamat Surat Berbeda</label>
                       <label id="label-tutup" class="control-label" style="color: #2080aa; font-weight: bold;display: none;" onclick="TutupAlamatSurat()" >Alamat Surat Sama</label>
                    </div>
                   
                    <div id="alamat_surat" style="display: none;">
                     <div class="control-group">
                      <label class="control-label">Negara</label>
                      <div class="controls">
                        <select class="provinsi" name="negara-surat">
                          <option value="Indoensia">Indonesia</option>
                        </select>
                      </div>
                    </div>
                    <div class="control-group">
                      <label class="control-label">Provinsi</label>
                      <div class="controls">
                         <select class="provinsi-surat" name="propinsi-surat">
                          <option value="placeholder">Pilih Provinsi</option>
                          <?php
                            foreach ($data_provinsi as $key) {
                                echo "<option value='".$key['id']."'>".$key['name']."</option>";
                            }
                          ?>
                        </select>
                      </div>
                    </div>
                     <div class="control-group">
                      <label class="control-label">Kota/Kabupaten</label>
                      <div class="controls controls-kabupaten-surat">
                        <select id="kabupaten-surat" name="kabupaten-surat" disabled>
                          <option value="placeholder">Pilih Kabupaten</option>
                        </select>
                      </div>
                    </div>
                     <div class="control-group">
                      <label class="control-label">Kecamatan</label>
                      <div class="controls controls-kecamatan-surat">
                        <select id="kecamatan-surat" name="kecamatan-surat" disabled>
                          <option value="placeholder">Pilih Kecamatan</option>
                        </select>
                      </div>
                    </div>
                     <div class="control-group">
                      <label class="control-label">Kelurahan</label>
                      <div class="controls controls-kelurahan-surat">
                        <select id="kelurahan-surat" name="kelurahan-surat" disabled>
                          <option valaue="placeholder">Pilih Kelurahan</option>
                        </select>
                      </div>
                    </div>
                     <div class="control-group">
                      <label class="control-label">Alamat Lengkap</label>
                      <div class="controls">
                        <textarea class="span11" placeholder="Nama Jalan, Perumahan, RT, RW" name="alamat-lengkap-surat"></textarea>
                      </div>
                    </div>
                    <div class="control-group">
                      <label class="control-label">Kode Pos</label>
                      <div class="controls">
                        <input type="text" class="span11" placeholder="" name="kode-pos-surat"/>
                      </div>
                    </div>
                   
                    </div>
                    <hr>
                     <div class="control-group">
                      <label class="control-label">Telpon/HP</label>
                      <div class="controls">
                        <input type="text" class="span11" placeholder="" name="telpon"/>
                      </div>
                    </div>
                    <div class="control-group">
                      <label class="control-label">Email</label>
                      <div class="controls">
                        <input type="text" class="span11" placeholder="" name="email"/>
                      </div>
                    </div>
                     <div class="control-group">
                      <label class="control-label">NPWP</label>
                      <div class="controls">
                        <input type="text" class="span11" placeholder="" name="npwp"/>
                      </div>
                    </div>

                    <div class="form-actions">
                      <button type="submit" class="btn btn-success">Save</button>
                    </div>
                  </form>
                </div>
                <script type="text/javascript">
                  function BukaAlamatSurat() {
                    $("#alamat_surat").css("display","block");
                    $("#label-buka").css("display","none");
                    $("#label-tutup").css("display","block");
                    $("#alamat-surat-sama").val("1");

                  }
                  function TutupAlamatSurat() {
                    $("#alamat_surat").css("display","none");
                    $("#label-buka").css("display","block");
                    $("#label-tutup").css("display","none");
                    $("#alamat-surat-sama").val("0");
                  }
                </script>
            </div>

            <input type="hidden" name="pemohon-pilihan" id="pemohon-pilihan">
            <div id="tab2" class="tab-pane"> 
                <div class="widget-box">
                    <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
                      <h5>Data Pemohon</h5>
                    </div>
                    <div class="widget-content nopadding">
                      <table class="table table-bordered data-table">
                        <thead>
                          <tr>
                            <th>Nama Pemohon</th>
                            <th>Email</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php
                            foreach ($pemohon as $key) {
                                echo 
                                 "<tr class='gradeX'>
                                    <td onclick='PilihPemohon(".$key['id'].",this)' data-alamat-surat='".$key['id_alamat_surat']."' data-nama='".$key['nama']."' data-email='".$key['email']."' data-jenis-pemohon='".$key['jenis']."' style='cursor:pointer;'><a>".$key['nama']."</a></td>
                                    <td>".$key['email']."</td>
                                  </tr>";
                            }
                          ?>

                        </tbody>
                      </table>
                    </div>
                  </div>
            </div>
           
          </div>
      </div>
      <!-- end of tab pemohon -->

    </div> 

     
    <div class="span6">
      <div class="widget-box">
        <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
          <h5>Form Isian</h5>
        </div>
        <div class="widget-content nopadding">
          <form action="<?php echo site_url("crud/InsertPermohonanMerek");?>" class="form-horizontal" method="POST" enctype="multipart/form-data">
            <div id="data-pemohon" class="control-group">
              <label class="control-label">Nama Pemohon</label>
              <div class="controls">
                <input type="text" class="span11" name="pemohon-dipilih" id="pemohon-dipilih" disabled>
               </div>
               <label class="control-label">Email</label>
              <div class="controls">
                <input type="text" class="span11" name="email-pemohon-dipilih" id="email-pemohon-dipilih" disabled>
               </div>
               <input type="hidden"  name="id-pemohon-dipilih" id="id-pemohon-dipilih">
               <input type="hidden"  name="id-surat-pemohon-dipilih" id="id-surat-pemohon-dipilih">
               <input type="hidden"  name="jenis-pemohon" id="jenis-pemohon">
            </div>

            <div class="control-group">
              <label class="control-label">Tanggal Pengajuan</label>
              <div class="controls">
                <input type="text" data-date="01-02-2013" data-date-format="dd-mm-yyyy" required class="datepicker span11" name="tanggal-pengajuan">
                <span class="help-block">Date with Formate of  (dd-mm-yy)</span> </div>
            </div>

            <div class="control-group">
              <label class="control-label">Tanggal Penerimaan</label>
              <div class="controls">
                <input type="text" data-date="01-02-2013" data-date-format="dd-mm-yyyy" required class="datepicker span11" name="tanggal-penerimaan">
                <span class="help-block">Date with Formate of  (dd-mm-yy)</span> </div>
            </div>

             <div class="control-group">
                      <label class="control-label">No Referensi Pemohon </label>
                      <div class="controls">
                        <input type="text" class="span11" placeholder="" name="nomor-referensi" required />
                      </div>
            </div>

            <div class="control-group">
                      <label class="control-label">No Permohonan</label>
                      <div class="controls">
                        <input type="text" class="span11" placeholder="" name="nomor-permohonan" required />
                      </div>
            </div>

            <div class="control-group">
              <label class="control-label">Jenis Permohonan</label>
              <div class="controls">
                <label>
                  <input type="hidden" name="jenis-lebih1" value="0" />
                  <input type="checkbox" name="jenis-lebih1" value="1" />
                  Lebih dari satu pihak</label>
                <label>
                  <input type="hidden" name="jenis-UMKM" value="0" />
                  <input type="checkbox" name="jenis-UMKM" value="2" />
                  UMKM</label>
                <label>
                  <input type="hidden" name="jenis-perorangan" value="0" />
                  <input type="checkbox" name="jenis-perorangan" value="3" />
                  Perorangan</label>
                <label>
                  <input type="hidden" name="jenis-badan-hukum" value="0"/>
                  <input type="checkbox" name="jenis-badan-hukum" value="4" />
                  Badan Hukum</label>
              </div>
            </div>

            <div class="control-group">
              <label class="control-label">Tipe Merek</label>
              <div class="controls">
                <label>
                  <input type="hidden" name="tipe_merek_kata" value="0" />
                  <input type="checkbox" name="tipe_merek_kata" value="1" />
                  Merek Kata</label>
                <label>
                  <input type="hidden" name="tipe_merek_tiga_dimensi" value="0"/>
                  <input type="checkbox" name="tipe_merek_tiga_dimensi" value="2"/>
                  Merek Tiga Dimensi</label>
                <label>
                  <input type="hidden" name="tipe_merek_lukisan_logo" value="0"/>
                  <input type="checkbox" name="tipe_merek_lukisan_logo" value="3"/>
                  Merek Lukisan/logo</label>
                <label>
                  <input type="hidden" name="tipe_merek_suara" value="0"/>
                  <input type="checkbox" name="tipe_merek_suara" value="4"/>
                  Merek Suara</label>
                <label>
                  <input type="hidden" name="tipe_merek_hologram" value="0"/>
                  <input type="checkbox" name="tipe_merek_hologram" value="5"/>
                  Merek Hologram</label>
                <label>
                  <input type="hidden" name="tipe_merek_kolektif" value="0"/>
                  <input type="checkbox" name="tipe_merek_kolektif" value="6"/>
                  Merek Kolektif</label>
              </div>
            </div>

            <div class="control-group">
                      <label class="control-label">Terjemahan Merek</label>
                      <div class="controls">
                        <input type="text" class="span11" placeholder="" name="terjemahan-merek" />
                      </div>
                      <div class="controls">
                        <label>
                          <input type="hidden" name="no-meaning" value="0" />
                          <input type="checkbox" name="no-meaning" value="1" />
                            Tidak Memiliki Arti</label>
                      </div>
                        
                <label>
            </div>

             <div class="control-group">
                      <label class="control-label">Pengucapan</label>
                      <div class="controls">
                        <input type="text" class="span11" placeholder="" name="pengucapan"/>
                        <span class="help-block">jika merek menggunakan karakter huruf non-latin</span>
                      </div>
                     
                <label>
            </div>

            <div class="control-group">
                      <label class="control-label">Unsur Warna</label>
                      <div class="controls">
                        <input type="text" class="span11" placeholder="" name="unsur-warna" required />
                        
                      </div>
                     
                <label>
            </div>

             <div class="control-group">
              <label class="control-label">Label Merek</label>
              <div class="controls">
                <input type="file" name="label-merek"/>
              </div>
            </div>

            <div class="control-group">
                      <label class="control-label">Nama Merek</label>
                      <div class="controls">
                        <input type="text" class="span11" placeholder="" name="nama-merek" required />
                        
                      </div>
                     
                <label>
            </div>

            <div class="control-group">
                      <label class="control-label">Deskripsi</label>
                      <div class="controls">
                        <textarea class="span11" placeholder="Deskripsi Merek" name="deskripsi-merek" required></textarea>
                      </div>
            </div>

            <div class="control-group">
                      <label class="control-label">Kelas Barang/Jasa</label>
                      <div class="controls">
                        <input type="text" class="span11" placeholder="" name="kelas-merek" required />
                        
                      </div>
                     
                <label>
            </div>

            <div class="control-group">
                <label class="control-label">Jenis Barang/Jasa</label>
                  <div class="controls">
                    <input type="text" class="span11" placeholder="" name="jenis-merek" required />
                  </div>
            </div> 

            <div class="control-group">
              <label class="control-label">Lampiran</label>
              <div class="controls">
                <label>
                  <input type="hidden" name="lampiran_merek" value="0" />
                  <input type="checkbox" name="lampiran_merek" value="1" />
                  3 Lembar Label merek</label>
                <label>
                  <input type="hidden" name="lampiran_pembayaran_biaya" value="0" />
                  <input type="checkbox" name="lampiran_pembayaran_biaya" value="2" />
                  Bukti Pembayaran Biaya</label>
                <label>
                  <input type="hidden" name="lampiran_surat_kuasa" value="0"/>
                  <input type="checkbox" name="lampiran_surat_kuasa" value="3" />
                  Surat Kuasa</label>
                <label>
                  <input type="hidden" name="lampiran_surat_pernyataan" value="0"/>
                  <input type="checkbox" name="lampiran_surat_pernyataan" value="4" />
                  Surat Penyataan Kepemilikan Merek</label>
                <label>
                  <input type="hidden" name="lampiran_bukti_prioritas" value="0" />
                  <input type="checkbox" name="lampiran_bukti_prioritas" value="5" />
                  Bukti Prioritas dan Terjemahanya</label>
                <label>
                  <input type="hidden" name="lampiran_merek_kolektif" value="0" />
                  <input type="checkbox" name="lampiran_merek_kolektif" value="6" />
                  Salinan Ketentuan Penggunaan Merek Kolektif</label>
              
              </div>
            </div>           
            <div class="form-actions">
              <button type="submit" class="btn btn-success">Save</button>
            </div>
          </form>


         

</div>
</div>



<script type="text/javascript">
      function PilihPemohon(id,pemohon){
        
        $("#pemohon-dipilih").val(pemohon.getAttribute('data-nama'));
        $("#email-pemohon-dipilih").val(pemohon.getAttribute('data-email'));
        $("#id-pemohon-dipilih").val(id);
        $("#id-surat-pemohon-dipilih").val(pemohon.getAttribute('data-alamat-surat'));
        $("#jenis-pemohon").val(pemohon.getAttribute('data-jenis-pemohon'));

        
        alert("Pemohon Telah Dipilih");
      }
</script>