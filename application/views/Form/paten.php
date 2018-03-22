<div id="content">

  <div id="content-header">
    <div id="breadcrumb"> <a href="<?php echo site_url();?>" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="<?php echo site_url("aplikasi_haki");?>" class="tip-bottom">Aplikasi Haki</a> <a href="#" class="current">Paten</a> </div>
    <h1>Paten</h1>
  </div>

    <div class="container-fluid">
        <div class="btn-icon-pg">
          <ul>
            <li><a href="<?php echo site_url("aplikasi_haki/pengajuan_paten");?>"><i class="bg-lg icon-upload-alt"></i> Pengajuan Paten</a></li>
          <!--   <li><a href="<?php echo site_url("aplikasi_haki/perpanjangan_paten");?>"><i class="bg-lo icon-retweet"></i> Perpanjang Paten</a></li> -->
          </ul>
        </div>
    </div>


  <div class="container-fluid">
    <hr>

    <div class="row-fluid">

      <div class="span12">

        <div class="widget-box">
          <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
            <h5>Data Paten</h5>
          </div>
          <div class="widget-content nopadding">
            <table class="table table-bordered data-table">
              <thead>
                <tr>
                  <th>Nama Paten</th>
                  <th>Nama Pemohon</th>
                  <th>Nomor Permohonan</th>
                  <th>Tanggal Pengajuan</th>
                  <th>Status</th>
                </tr>
              </thead>
              <tbody>

                <?php
                  $status  = array('new','Diajukan','Kena surat','Jawab Surat','Diterima','Ditolak');
                foreach ($data_pengajuan_paten as $key ) {
                  echo '<tr class="gradeX">
                            <td><a href="'.site_url("aplikasi_haki/detail_paten/").$key['id_permohonan_paten'].'">'.$key['nama_paten'].'</></td>
                            <td>'.$key['nama'].'</td>
                            <td>'.$key['no_permohonan'].'</td>
                            <td>'.$key['tgl_pengajuan'].'</td>
                            <td>'.$status[$key['status']].'</td>
                        </tr>';
                }

                ?>
              </tbody>
            </table>
          </div>
        </div>

      </div>
    </div>

  </div>
</div>
