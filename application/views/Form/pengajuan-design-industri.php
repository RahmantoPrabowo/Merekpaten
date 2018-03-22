<div id="content">
<div id="content-header">
    <div id="breadcrumb"> <a href="<?php echo site_url();?>" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="<?php echo site_url("aplikasi_haki");?>" class="tip-bottom">Aplikasi Haki</a> <a href="<?php echo site_url("aplikasi_haki/design_industri");?>" class="tip-bottom">Design Industri</a><a href="" class="current">Pengajuan Design Industri</a> </div>
    <h1>Pengajuan Design Industri</h1>
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
          <form action="<?php echo site_url("crud/InsertPermohonanDesign");?>" class="form-horizontal" method="POST" enctype="multipart/form-data">
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
                      <label class="control-label">Judul Design</label>
                      <div class="controls">
                        <input type="text" class="span11" placeholder="" name="judul-design" />
                      </div>                        
            </div>


            <div class="control-group">
                <label class="control-label">Designer</label>
            </div>

             <div class="control-group">
                <label class="control-label">Nama</label>
                <div class="controls">
                    <input type="text" class="span6" placeholder="" name="nama-designer" id="nama-designer"/>
                </div>
            </div>

            <div class="control-group">
               <label class="control-label">Kewarganegaraan</label>
                  <div class="controls">
                     <input type="text" class="span6" placeholder="" name="kewarganegaraan-designer" id="kewarganegaraan-designer"/>
                  </div>

            </div>
            <div >
                <label class="btn btn-success" id="simpan-designer" onclick="jalaninDesign()" style="margin-left: 100px;">Simpan</label>
            </div>


            <div class="control-group" id="designer-container">
               
            </div>

            <input type="hidden" name="id-designer" id="id-designer">

            <script type="text/javascript">

                function jalaninDesign(){
                  
                      var nama = $("#nama-designer").val();
                      var kwn  = $("#kewarganegaraan-designer").val();

                      if(nama=="" || kwn==""){
                        alert("Lengkapi data Designer");
                      }else{

                        $.ajax({
                            url: '<?php echo site_url("Ambil_data/tambah_designer");?>',
                            type: 'post',
                            data: {

                                nama: nama,
                                kwn : kwn
                            },// we send data parameter using data properties
                        })

                        .done(function(data) { //<---- we use .done here 
                          data = JSON.parse(data);
                            var html = $('#designer-container').html();
                            var i; 
                                html += ' <label class="control-label">'+data[0].nama+'</label><label class="control-label">'+data[0].warga_negara+'</label>';
                        $('#designer-container').html(html);   
                        $("#nama-designer").val("");
                        $("#kewarganegaraan-designer").val("");  
                        $("#simpan-designer").html("Tambah");  

                        var id = $('#id-designer').val();
                        if(id==""){
                          id = data[0].id_designer;  
                        }
                        else{
                          id += ','+ data[0].id_designer;
                        }
                        
                        $('#id-designer').val(id);
                        
                              
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
                      <label class="control-label">Kelas Design Industri</label>
                      <div class="controls">
                        <input type="text" class="span11" placeholder="" name="kelas-design" />
                      </div>
            </div>

            <div class="control-group">
              <label class="control-label">Lampiran</label>
              <div class="controls">
                 <label>
                  <input type="hidden" name="lampiran_surat_kuasa" value="0"/>
                  <input type="checkbox" name="lampiran_surat_kuasa" value="1" />
                  Surat Kuasa</label>
                <label>
                  <input type="hidden" name="lampiran_surat_pernyataan" value="0"/>
                  <input type="checkbox" name="lampiran_surat_pernyataan" value="2" />
                  Surat Penyataan pengalihan hak atas design industri</label>
                <label>
                  <input type="hidden" name="lampiran_bukti_pemilikan" value="0" />
                  <input type="checkbox" name="lampiran_bukti_pemilikan" value="3" />
                  Bukti pemilikan hal atas desain industri</label>
                <label>
                  <input type="hidden" name="lampiran_bukti_prioritas" value="0" />
                  <input type="checkbox" name="lampiran_bukti_prioritas" value="4" />
                  Bukti Prioritas dan terjemahanya</label>
             
                <label>
                  <input type="hidden" name="lampiran_dokumen_permohonan" value="0" />
                  <input type="checkbox" name="lampiran_dokumen_permohonan" value="5" />
                  Dokumen (permohonan) desain industri dengan prioritas dan terjemahanya</label>
              </div>              
            </div> 
            <div class="control-group">
                <label class="control-label">Dokumen lain</label>
                <div class="controls">
                  <input type="text" class="span11" placeholder="sebutkan beserta jumlahnya" name="dokumen_lain"/>
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