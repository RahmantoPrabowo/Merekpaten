<div id="content">
<div id="content-header">
    <div id="breadcrumb"> <a href="<?php echo site_url();?>" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="<?php echo site_url("aplikasi_haki");?>" class="tip-bottom">Aplikasi Haki</a> <a href="<?php echo site_url("aplikasi_haki/hak_cipta");?>" class="tip-bottom">Hak Cipta</a><a href="" class="current">Pengajuan Hak Cipta</a> </div>
    <h1>Pengajuan Hak Cipta</h1>
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
                        <input type="text" class="span11" placeholder="Nama Lengkap" name="nama-pemohon"/>
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
                    <input type="hidden" name="alamat-surat-sama" id="alamat-surat-sama">
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
                   
                <!--    
                    <div class="control-group">
                      <label class="control-label">Description field:</label>
                      <div class="controls">
                        <input type="text" class="span11" />
                        <span class="help-block">Description field</span> </div>
                    </div>
                    <div class="control-group">
                      <label class="control-label">Message</label>
                      <div class="controls">
                        <textarea class="span11" ></textarea>
                      </div>
                    </div> -->

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
      <!-- end of tab pemohon -->
        </div>
    </div> 
      
     
    <div class="span6">
      <div class="widget-box">
        <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
          <h5>Form Isian</h5>
        </div>
        <div class="widget-content nopadding">
          <form action="<?php echo site_url("crud/InsertPermohonanHakCipta");?>" class="form-horizontal" method="POST" enctype="multipart/form-data">

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
              <label class="control-label">Tanggal Permohonan</label>
              <div class="controls">
                <input type="text" data-date="01-02-2013" data-date-format="dd-mm-yyyy" required class="datepicker span11" name="tanggal-permohonan">
                <span class="help-block">Date with Formate of  (dd-mm-yy)</span> </div>
            </div>

            <div class="control-group">
              <label class="control-label">Tanggal Penerimaan</label>
              <div class="controls">
                <input type="text" data-date="01-02-2013" data-date-format="dd-mm-yyyy" required class="datepicker span11" name="tanggal-penerimaan">
                <span class="help-block">Date with Formate of  (dd-mm-yy)</span> </div>
            </div>

            <div class="control-group">
                      <label class="control-label">No Permohonan</label>
                      <div class="controls">
                        <input type="text" class="span11" placeholder="" name="nomor-permohonan" required />
                      </div>
            </div>
            <div class="control-group">
               <label class="control-label">Pencipta</label>
            </div>
            <div class="control-group">
             
              <label class="control-label">Nama</label>
              <div class="controls">
                <input type="text" class="span11" placeholder="" name="nama-pencipta" required />
              </div>

              <label class="control-label">Alamat</label>
              <div class="controls">
                <textarea name="alamat-pencipta" clas="span12"></textarea>
              </div>
              <label class="control-label">Email</label>
              <div class="controls">
                <input type="text" class="span11" placeholder="" name="email-pencipta" required />
              </div>
              <label class="control-label">Telpon</label>
              <div class="controls">
                <input type="text" class="span11" placeholder="" name="telpon-pencipta" required />
              </div>
              <label class="control-label">Fax</label>
              <div class="controls">
                <input type="text" class="span11" placeholder="" name="fax-pencipta" required />
              </div>
            </div>

            <div class="control-group">
               <label class="control-label">Pemegang Hak Cipta</label>
            </div>
            <div class="control-group">
              
              <label class="control-label">Nama</label>
              <div class="controls">
                <input type="text" class="span11" placeholder="" name="nama-pemegang-cipta" />
              </div>

              <label class="control-label">Alamat</label>
              <div class="controls">
                <textarea name="alamat-pemegang-cipta" clas="span11"></textarea>
              </div>
              <label class="control-label">Email</label>
              <div class="controls">
                <input type="text" class="span11" placeholder="" name="email-pemegang-cipta"/>
              </div>
              <label class="control-label">Telpon</label>
              <div class="controls">
                <input type="text" class="span11" placeholder="" name="telpon-pemegang-cipta"/>
              </div>
              <label class="control-label">Fax</label>
              <div class="controls">
                <input type="text" class="span11" placeholder="" name="fax-pemegang-cipta"/>
              </div>
            </div>

           
            <div class="control-group">
                      <label class="control-label">Judul Ciptaan</label>
                      <div class="controls">
                        <input type="text" class="span11" placeholder="" name="judul-ciptaan" />
                      </div>
                     
                <label>
            </div>
              <div class="control-group">
              <label class="control-label">Tanggal Diumumkan</label>
              <div class="controls">
                <input type="text" data-date="01-02-2013" data-date-format="dd-mm-yyyy" required class="datepicker span11" name="tanggal-diumumkan">
                <span class="help-block">Date with Formate of  (dd-mm-yy)</span> </div>
            </div>
           
         
            <div class="control-group">
                      <label class="control-label">Uraian Ciptaan</label>
                      <div class="controls">
                        <textarea class="span11" placeholder="Uraian Ciptaan" name="uraian-ciptaan" required></textarea>
                      </div>
            </div>

          

           
            <div class="form-actions">
              <button type="submit" class="btn btn-success">Save</button>
            </div>

          </form>

            
      

</div></div>


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