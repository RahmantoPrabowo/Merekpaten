<div id="content">
<div id="content-header">
    <div id="breadcrumb"> <a href="<?php echo site_url();?>" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="<?php echo site_url("aplikasi_haki");?>" class="tip-bottom">Aplikasi Haki</a> <a href="<?php echo site_url("aplikasi_haki/paten");?>" class="tip-bottom">Paten</a><a href="" class="current">Pengajuan Paten</a> </div>
    <h1>Pengajuan Paten</h1>
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

            <div id="tab2" class="tab-pane"> <img src="img/demo/demo-image2.jpg" alt="demo-image"/>
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
          <form action="<?php echo site_url("crud/InsertPermohonanPaten");?>" class="form-horizontal" method="POST" enctype="multipart/form-data">
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
                      <label class="control-label">No Permohonan</label>
                      <div class="controls">
                        <input type="text" class="span11" placeholder="" name="nomor-permohonan" required />
                      </div>
            </div>


            <div class="control-group">
                      <label class="control-label">Nama Paten</label>
                      <div class="controls">
                        <input type="text" class="span11" placeholder="" name="nama-paten" />
                      </div>                        
            </div>

           

            <div class="control-group">
                      <label class="control-label">Jenis Paten</label>
                      <div class="controls">
                       <select id="jenis-paten" name="jenis-paten">
                         <option value="placeholder">Pilih Jenis Paten</option>
                         <option value="0">Paten</option>
                         <option value="1">Paten Sederhana</option>
                       </select>
                      </div>                        
            </div>

             <div class="control-group">
                <label class="control-label">No PCT</label>
                  <div class="controls">
                    <input type="text" class="span11" placeholder="" name="nomor-PCT" />
                  </div>                        
            </div>

            <div class="control-group">
                <label class="control-label">Judul Invensi</label>
                  <div class="controls">
                    <input type="text" class="span11" placeholder="" name="judul-invensi" />
                  </div>                        
            </div>
            <div class="control-group">
                <label class="control-label">Merupakan Perubahan Paten dengan No</label>
                  <div class="controls">
                    <input type="text" class="span11" placeholder="" name="no-perubahan-paten" />
                  </div>                        
            </div>

            <div class="control-group">
                <label class="control-label">Inventor</label>
            </div>

             <div class="control-group">
                <label class="control-label">Nama</label>
                <div class="controls">
                    <input type="text" class="span6" placeholder="" name="nama-inventor" id="nama-inventor"/>
                </div>
            </div>

            <div class="control-group">
               <label class="control-label">Alamat</label>
                  <div class="controls">
                    <textarea name="alamat-inventor" id="alamat-inventor"></textarea>
                    
                  </div>

            </div>

            <div class="control-group">
                <label class="control-label">Email</label>
                <div class="controls">
                    <input type="text" class="span6" placeholder="" name="email-inventor" id="email-inventor"/>
                </div>
            </div>

            <div class="control-group">
                <label class="control-label">Kewarganegaraan</label>
                <div class="controls">
                    <input type="text" class="span6" placeholder="" name="kwn-inventor" id="kwn-inventor"/>
                </div>
            </div>

            <div >
                <label class="btn btn-success" id="simpan-inventor" onclick="jalan()" style="margin-left: 100px;">Simpan</label>
            </div>


            <div class="control-group" id="inventor-container">
               
            </div>

            <input type="hidden" name="id-inventor" id="id-inventor">

            <script type="text/javascript">

                function jalan(){

                      var nama   = $("#nama-inventor").val();
                      var alamat = $("#alamat-inventor").val();
                      var email  = $("#email-inventor").val();
                      var kwn    = $("#kwn-inventor").val();


                      if(nama=="" || kwn=="" || alamat=="" || email==""){
                        alert("Lengkapi data Inventor");
                      }else{

                        $.ajax({
                                url: '<?php echo site_url("Ambil_data/tambah_inventor");?>',
                                type: 'post',
                                data: {

                                    nama: nama,
                                    alamat : alamat,
                                    kwn : kwn,
                                    email : email

                                 
                                },// we send data parameter using data properties
                            })


                        .done(function(data) { //<---- we use .done here 
                          
                          data = JSON.parse(data);
                            var html = $('#inventor-container').html();
                            var i; 
                                html += ' <label class="control-label">'+data[0].nama+'</label><label class="control-label">'+data[0].warga_negara+' | '+data[0].email+'</label>';
                        $('#inventor-container').html(html);   
                        $("#nama-inventor").val("");
                        $("#alamat-inventor").val("");  
                        $("#email-inventor").val("");
                        $("#kwn-inventor").val("");
                        $("#simpan-inventor").html("Tambah");  

                        var id = $('#id-inventor').val();
                        if(id==""){
                          id = data[0].id_inventor;  
                        }
                        else{
                          id += ','+ data[0].id_inventor;
                        }
                        
                        $('#id-inventor').val(id);
                        
                              
                        })
                      }
                }
                
                   
            </script>

            <div class="control-group">
                      <label class="control-label">Hak Prioritas</label>
            </div>

            

            <div class="control-group">
               <label class="control-label">Negara</label>
                  <div class="controls">
                     <input type="text" class="span6" placeholder="" name="negara-hak" id="negara-hak"/>
                  </div>

            </div>

            <div class="control-group">
               <label class="control-label">Tanggal Penerimaan</label>
                  <div class="controls">
             <input type="text" data-date="01-02-2013" data-date-format="dd-mm-yyyy" class="datepicker span11" name="tanggal-penerimaan-hak" id="tanggal-penerimaan-hak"> 

               </div>

            </div>

            <div class="control-group">
                <label class="control-label">Nomor Prioritas</label>
                <div class="controls">
                    <input type="text" class="span6" placeholder="" name="nama-designer" id="nomor-prioritas"/>
                </div>
            </div>

            <div >
                <label class="btn btn-success" id="simpan-hak" onclick="jalanin()" style="margin-left: 100px;">Simpan</label>
            </div>


            <div class="control-group" id="hak-container">
               
            </div>
            <input type="hidden" name="id-hak-prioritas" id="id-hak-prioritas">

            <script type="text/javascript">

                function jalanin(){
                  alert("masuk");
                  
                      var negara = $("#negara-hak").val();
                      var tgl    = $("#tanggal-penerimaan-hak").val();
                      var nomor  = $("#nomor-prioritas").val();

                      if(negara=="" || tgl=="" || nomor==""){
                        alert("Lengkapi data hak prioritas");
                      }else{

                         $.ajax({
                                url: '<?php echo site_url("Ambil_data/tambah_hak_prio");?>',
                                type: 'post',
                                data: {

                                    negara: negara,
                                    tgl : tgl,
                                    nomor : nomor
                                 
                                },// we send data parameter using data properties
                            })

                            .done(function(data) { //<---- we use .done here 
                               
                              data = JSON.parse(data);

                                var html = $('#hak-container').html();
                      
                         
                                    html += '<label class="control-label">'+data[0].negara+'</label><label class="control-label">'+data[0].tgl_penerimaan_permohonan+' | '+data[0].no_prioritas+'</label>';
                               

                            $('#hak-container').html(html);   
                            $("#negara-hak").val("");
                            $("#tanggal-penerimaan-hak").val("");  
                            $("#nomor-prioritas").val("");  
                            $("#simpan-hak").html("Tambah");  

                          
                            var id = $('#id-hak-prioritas').val();
                            if(id==""){
                             id = data[0].id_hak_prioritas; 
                            }
                            else
                            {
                              id += ','+ data[0].id_hak_prioritas;
                            }
                            
                            $('#id-hak-prioritas').val(id)

                            })


                      }

                }
                 
            </script>

           

            <div class="control-group">
              <label class="control-label">Lampiran</label>
              <div class="controls">
                 <label>
                  <input type="hidden" name="lampiran_surat_kuasa" value="0"/>
                  <input type="checkbox" name="lampiran_surat_kuasa" value="1" />
                  Surat Kuasa</label>
                <label>
                  <input type="hidden" name="lampiran_surat_pengalihan" value="0"/>
                  <input type="checkbox" name="lampiran_surat_pengalihan" value="2" />
                  Surat Pengalihan hak atas penemuan</label>
                <label>
                  <input type="hidden" name="lampiran_surat_pernyataan_kepemilikan" value="0"/>
                  <input type="checkbox" name="lampiran_surat_pernyataan_kepemilikan" value="3" />
                  Surat Pernyataan Kepemilikan invensi oleh inventor</label>
                <label>
                  <input type="hidden" name="lampiran_bukti_penunjukan" value="0" />
                  <input type="checkbox" name="lampiran_bukti_penunjukan" value="4" />
                  Bukti Penunjukan Negara Tujuan (DO/EO)</label>
                <label>
                  <input type="hidden" name="lampiran_dokumen_prioritas" value="0" />
                  <input type="checkbox" name="lampiran_dokumen_prioritas" value="5" />
                  Dokumen Prioritas dan Terjemahannya</label>
             
                <label>
                  <input type="hidden" name="lampiran_dokumen_permohonan" value="0" />
                  <input type="checkbox" name="lampiran_dokumen_permohonan" value="6" />
                  Dokumen Permohonan Paten Internasional/PCT</label>

                <label>
                  <input type="hidden" name="lampiran_sertifikat_penyimpanan" value="0" />
                  <input type="checkbox" name="lampiran_sertifikat_penyimpanan" value="7" />
                  Sertifikat Penyimpanan Jasad Renik dan Terjemahannya </label>


              </div>              
            </div> 
            <div class="control-group">
                <label class="control-label">Dokumen lain</label>
                <div class="controls">
                  <input type="text" class="span11" placeholder="sebutkan beserta jumlahnya" name="dokumen_lain"/>
                </div>
            </div> 

            <div class="control-group">
                <label class="control-label">Lampiran Invensi</label>
            </div>  
            <div class="control-group">
                <label class="control-label">Uraian</label>
                <div class="controls">
                  <input type="text" class="span11" placeholder="Jumlah halaman" name="jumlah-uraian"/>
                </div>
            </div> 

            <div class="control-group">
                <label class="control-label">Klaim</label>
                <div class="controls">
                  <input type="text" class="span11" placeholder="Jumlah Klaim" name="jumlah-klaim"/>
                </div>
            </div> 

            <div class="control-group">
              <label class="control-label"></label>
              <div class="controls">
                 <label>
                  <input type="hidden" name="lampiran_abstrak" value="0"/>
                  <input type="checkbox" name="lampiran_abstrak" value="1" />
                  Abstrak</label>
               </div>              
            </div>

            <div class="control-group">
                <label class="control-label">Gambar</label>
                <div class="controls">
                  <input type="text" class="span11" placeholder="Jumlah Gambar" name="jumlah-gambar"/>
                </div>
            </div> 

            <div class="control-group">
                <label class="control-label">Nomor Gambar Usulan</label>
                <div class="controls">
                  <input type="text" class="span11" placeholder="nomor gambar" name="nomor-gambar"/>
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