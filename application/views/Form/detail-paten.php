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
      <div id="breadcrumb"> <a href="<?php echo site_url();?>" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="<?php echo site_url("aplikasi_haki");?>" class="tip-bottom">Aplikasi Haki</a> <a href="<?php echo site_url("aplikasi_haki/paten");?>" class="tip-bottom">Paten</a><a href="" class="current">Detail Paten</a> </div>
      <h1>Detail Pengajuan Paten</h1>
  </div>

  <div class="container-fluid">
  <hr>
    <!-- widget box -->
   <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-list"></i> </span>
            <h5>Data Pemohon</h5>
          </div>
          <div class="widget-content"> 

            <table >
              <tr>
                <td width="70%">
                  <b>Nama</b>
                </td>
                <td>
                   : <?php echo $detail_pengajuan_paten[0]['nama'];?>
                </td>
              </tr>
              <tr>
                <td>
                  <b>Alamat</b>
                </td>
                <td>
                   : <?php echo $detail_pengajuan_paten[0]['alamat'];?>
                </td>
              </tr>
              <tr>
                <td>
                  <b>Telpon</b>
                </td>
                <td>
                   : <?php echo $detail_pengajuan_paten[0]['telpon'];?>
                </td>
              </tr>
              <tr>
                <td>
                  <b>Email</b>
                </td>
                <td>
                   : <?php echo $detail_pengajuan_paten[0]['email'];?>
                </td>
              </tr>
            </table>
             
          </div>
        </div>
      </div>
    </div>
    <!-- end of widget box -->
    <style type="text/css">
      .table-data
      {
        table-layout: fixed;
        width: 100%;
      }
    </style>
     <!-- widget box -->
   <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-list"></i> </span>
            <h5>Data Pengajuan Paten</h5>
          </div>
          <div class="widget-content"> 

            <table rules="rows" class="table-data">
              <tr>
                <td width="40%">
                  <b>Tanggal Pengajuan</b>
                </td>
                <td >
                   : <?php echo $detail_pengajuan_paten[0]['tgl_pengajuan'];?>
                </td>
              </tr>
              <tr>
                <td>
                  <b>Nomor Permohonan</b>
                </td>
                <td>
                   : <?php echo $detail_pengajuan_paten[0]['no_permohonan'];?>
                </td>
              </tr>
              <tr>
                <td>
                  <b>Nama Paten</b>
                </td>
                <td>
                   : <?php echo $detail_pengajuan_paten[0]['nama_paten'];?>
                </td>
              </tr>
              <tr>
                <td>
                  <b>Jenis Paten</b>
                </td>
                <td>
                   : <?php if($detail_pengajuan_paten[0]['jenis_paten']=="1") echo "Paten Sederhana";
                            else echo "Paten";
                   ?>
                </td>
              </tr>
              <tr>
                <td>
                  <b>Nomor PCT</b>
                </td>
                <td>
                   : <?php echo $detail_pengajuan_paten[0]['no_pct_permohonan'];?>
                </td>
              </tr>
              <tr>
                <td>
                  <b>Judul Invensi</b>
                </td>
                <td>
                   : <?php echo $detail_pengajuan_paten[0]['judul_invensi'];?>
                </td>
              </tr>
              <tr>
                <td>
                  <b>Perubahan Paten dengan no</b>
                </td>
                <td>
                   : <?php echo $detail_pengajuan_paten[0]['no_perubahan_paten'];?>
                </td>
              </tr>
              <tr>
                <td>
                  <b>Inventor</b>
                </td>
                <td>
                  <h5>Tabel Inventor</h5>
                   <?php
                          echo "<table border=='1' class='table-data'>";
                          echo "<tr>";
                          echo "<th width='15%'>Nama</th>";
                          echo "<th width='15%'>Email</th>";
                          echo "<th width='40%'>Alamat</th>";
                          echo "<th width='30%'>Warga Negara</th>"; 
                          echo "</tr>";
                          foreach ($data_inventor as $key) {
                              echo "<tr>";
                              echo "<td>".$key['nama']."</td>";
                              echo "<td>".$key['email']."</td>";
                              echo "<td>".$key['alamat']."</td>";
                              echo "<td>".$key['warga_negara']."</td>"; 
                              echo "</tr>";
                          }
                          echo "</table>";
                   ?>
                </td>
              </tr>

               <tr>
                <td>
                  <b>Hak Prioritas</b>
                </td>
                <td>
                  <h5>Tabel Hak Prioritas</h5>
                   <?php
                          echo "<table border=='1' style='right:".'"0px;"'."'>";
                          echo "<tr>";
                          echo "<th width='20%'>Negara</th>";
                          echo "<th width='20%'>Tanggal</th>";
                          echo "<th width='30%'>No Prioritas</th>"; 
                          echo "</tr>";
                          foreach ($data_hak_prioritas as $key) {
                              echo "<tr>";
                              echo "<td>".$key['negara']."</td>";
                              echo "<td>".$key['tgl_penerimaan_permohonan']."</td>";
                              echo "<td>".$key['no_prioritas']."</td>";
                              echo "</tr>";
                          }
                          echo "</table>";
                   ?>
                </td>
              </tr>
               <tr>
                <td>
                  <b>Lampiran</b>
                </td>
                <td>
                   <?php $lampiran = explode(",", $detail_pengajuan_paten[0]['lampiran']);

                     
                                if($lampiran[0] != 0)
                                  echo "Surat Kuasa;<br>";
                                if($lampiran[1] != 0)
                                  echo "Surat Pengalihan hak atas penemuan;<br>";
                                if($lampiran[2] != 0)
                                  echo "Surat Pernyataan Kepemilikan invensi oleh inventor;<br>";
                                if($lampiran[3] != 0)
                                  echo "Bukti Penunjukan Negara Tujuan (DO/EO);<br>";
                                if($lampiran[5] != 0)
                                  echo "Dokumen Prioritas dan Terjemahanya;<br>";
                                if($lampiran[6] != 0)
                                  echo "Dokumen Permohonan Paten Internasional/PCT;<br>";
                                if($lampiran[7] != 0)
                                  echo "Sertifikat Penyimpanan Jasad Renik dan Terjemahanya;<br>";
                                if($lampiran[8] != "0")
                                  echo "Dokumen Lain: ".$lampiran[8].";";
                   ?>
                </td>
              </tr>
              <tr>
                <td>
                  <b>Lampiran Invensi</b>
                </td>
                <td>
                <?php $invensi = explode(",", $detail_pengajuan_paten[0]['file_invensi']);
                          echo "<table border=='1' style='right:".'"0px;"'."'>";
                          echo "<tr>";
                          echo "<td width='25%'>Uraian</td>";
                          echo "<td width='25%'>".$invensi[0]."</td>"; 
                          echo "</tr>";
                          echo "<tr>";
                          echo "<td width='25%'>Klaim</td>";
                          echo "<td width='25%'>".$invensi[1]."</td>"; 
                          echo "</tr>";
                          echo "<tr>";
                          echo "<td width='25%'>Abstrak</td>";
                          echo "<td width='25%'>".$invensi[2]."</td>"; 
                          echo "</tr>";
                          echo "<tr>";
                          echo "<td width='25%'>Gambar</td>";
                          echo "<td width='25%'>".$invensi[3]."</td>"; 
                          echo "</tr>";
                          echo "</table>";
                   ?>
                </td>
                </tr>
                 <tr>
                  <td>
                    <b>Nomor Gambar Usulan</b>
                  </td>
                  <td>
                     : <?php echo $detail_pengajuan_paten[0]['nomor_gambar_abstrak'];?>
                  </td>
                </tr>

                 <tr>
                  <td>
                    <b>Status</b>
                  </td>
                  <td>
                      
                     <table class="table-data">
                       <tr>
                         <td id="isi-status">
                           : <?php  if($detail_pengajuan_paten[0]['status']=="1")
                                      echo "Diajukan";
                                    else if($detail_pengajuan_paten[0]['status']=="2")
                                      echo "Kena surat";
                                    else if($detail_pengajuan_paten[0]['status']=="3")
                                      echo "Jawab surat";
                                    else if($detail_pengajuan_paten[0]['status']=="4")
                                      echo "Diterima";
                                    else if($detail_pengajuan_paten[0]['status']=="5")
                                      echo "Ditolak";


                            ?>
                         </td>
                         <td id="btn-open-change">
                           <button class="btn btn-success" onclick="OpenChangeStatus()">Change Status</button>
                         </td>
                       </tr>
                     </table>
                  </td>
                </tr>
              <input type="hidden" id="id-pengajuan" name="id-pengajuan" value="<?php echo $detail_pengajuan_paten[0]['id_permohonan_paten'];?>">
            </table>
             
          </div>
        </div>
      </div>
    </div>
    <!-- end of widget box -->


    <!-- widget box -->
   <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-list"></i> </span>
            <h5>File Lampiran</h5>
          </div>
          <div class="widget-content"> 
            <div id="file-container"> 
              <table class="table-data" rules="coloumn" id="table-file">
            <?php

              foreach ($data_file_lampiran as $key) {
                
                echo "<tr>";
                echo "<td width='45%'>";
                echo '<h5><a href="'.$key['address'].'">'.$key['file_name'].'</a></h5>';
                echo "</td>";
                echo "<td>";
                echo '<h5 class="btn btn-danger" onclick="hapusLampiran('.$key['id'].')">Hapus</h5>';
                echo "</td>";
                echo "</tr>";
              }
           ?>
            </table>
           </div> 
            <form id="berkas-lampiran" method="post" enctype="multipart/form-data" action="<?php echo site_url("crud/save_lampiran");?>">
               <input type="hidden" id="id-pengajuan" name="id-pengajuan" value="<?php echo $detail_pengajuan_paten[0]['id_permohonan_paten'];?>">
               <input type="hidden" id="id-tipe" name="id-tipe" value="1">
               Add File : <input type="file" name="file-lampiran" id="file-lampiran"> <button id="save-lampiran" class="btn btn-success" >Save</button>
           </form>
          </div>
        </div>
      </div>
    </div>
    <!-- end of widget box -->


  </div>


  

<script type="text/javascript">
  function OpenChangeStatus(){
        $("#isi-status").html('<select id="pilih-status"><option value="placeholder">Pilih Status</option><option value="2">Kena Surat</option><option value="3">Jawab Surat</option><option value="4">Diterima</option><option value="5">Ditolak</option></select>');
        $("#btn-open-change").html('<button class="btn btn-success" onclick="SaveStatus()">Save Status</button>');
  }

  function SaveStatus(){
       $("#btn-open-change").html('<button class="btn btn-success" onclick="OpenChangeStatus()">Change Status</button>');

        var status = $("#pilih-status").val();
        var id = $("#id-pengajuan").val();


        if(status!="placeholder"){
            
            $.ajax({
            url: '<?php echo site_url("crud/change_status_paten");?>',
            type: 'post',
            data: { id: id,
                    status : status
            },// we send data parameter using data properties
            })

            .done(function(data) { //<---- we use .done here 

               if(data=="1")
                  var status = "Diajukan";
                else if(data=="2")
                  var status = "Kena surat";
                else if(data=="3")
                  var status = "Jawab surat";
                else if(data=="4")
                  var status = "Diterima";
                else if(data=="5")
                  var status = "Ditolak";
             
                $('#isi-status').html(status);         
            })
        }
        else{
          alert("status tidak dipilih");
        }

       
  }

   function hapusLampiran(id_file){
        var result = confirm("Apakah Anda yakin ingin menghapus file ini?");

        if(result){
     
          var id = id_file
          var tipe = $("#id-tipe").val();
          var id_pengajuan = $("#id-pengajuan").val();

           
       $.ajax({
            url: '<?php echo site_url("crud/delete_file_lampiran");?>',
            type: 'post',
            data: { id: id,
                    tipe: tipe,
                    id_pengajuan : id_pengajuan
            },// we send data parameter using data properties
            })

            .done(function(data) { //<---- we use .done here 
              var html = "";
              data = JSON.parse(data);
                if(data != "kosong"){
                    for(i=0; i<data.length; i++){
                        html += "<tr>";
                        html += "<td width='25%'>";
                        html += '<h5><a href="'+data[i].address+'">'+data[i].file_name+'</a></h5>';
                        html += "</td>";
                        html += "<td>";
                        html += '<h5 class="btn btn-danger" onclick="hapusLampiran('+data[i].id+')">Hapus</h5>';
                        html += "</td>";
                        html += "</tr>";

                    }
                    $('#table-file').html(html); 
                }
                else{
                    $('#table-file').html("");  
                }
             
                       
            })
           }
       
  }

</script>


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