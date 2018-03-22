<div id="content">

  <div id="content-header">
    <div id="breadcrumb"> <a href="<?php echo site_url();?>" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="<?php echo site_url("aplikasi_haki");?>" class="tip-bottom">Aplikasi Haki</a> <a href="#" class="current">Merek</a> </div>
    <h1>Merek</h1>
  </div>

    <div class="container-fluid">
        <div class="btn-icon-pg">
          <ul>
            <li><a href="<?php echo site_url("aplikasi_haki/pengajuan_merek");?>"><i class="bg-lg icon-upload-alt"></i> Pengajuan Merek</a></li>
            <li><a href="<?php echo site_url("aplikasi_haki/perpanjangan_merek");?>"><i class="bg-lo icon-retweet"></i> Perpanjang Merek</a></li>
          </ul>
        </div>
    </div>


  <div class="container-fluid">
    <hr>

    <div class="row-fluid">

      <div class="span12">

        <div class="widget-box">
          <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
            <h5>Data Pengajuan Merek</h5>
          </div>
          <div class="widget-content nopadding">
            <table class="table table-bordered data-table">
              <thead>
                <tr>
                  <th>Nama Merek</th>
                  <th>Deskripsi</th>
                  <th>Tanggal Diterima</th>
                  <th>Label</th>
                  <th>Status</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $status  = array('new','Diajukan','Kena surat','Jawab Surat','Diterima','Ditolak');
                foreach ($data_pengajuan_merek as $key ) {
                  echo '<tr class="gradeX">

                            <td> <a href="'.site_url("aplikasi_haki/detail_merek/").$key['id'].'/'.'3'.'">'.$key['nama_merek'].'</td></a>
                            <td>'.$key['deskripsi_merek'].'</td>
                            <td>'.$key['tanggal_penerimaan'].'</td>
                            <td><center><img src="'.$key['label_merek'].'" style="width:200px;height:auto;" alt="no-image"></center></td>
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
