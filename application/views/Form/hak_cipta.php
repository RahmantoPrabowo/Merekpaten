<div id="content">

  <div id="content-header">
    <div id="breadcrumb"> <a href="<?php echo site_url();?>" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="<?php echo site_url("aplikasi_haki");?>" class="tip-bottom">Aplikasi Haki</a> <a href="#" class="current">Hak Cipta</a> </div>
    <h1>Hak Cipta</h1>
  </div>

    <div class="container-fluid">
        <div class="btn-icon-pg">
          <ul>
            <li><a href="<?php echo site_url("aplikasi_haki/pengajuan_hak_cipta");?>"><i class="bg-lg icon-upload-alt"></i> Pengajuan Hak Cipta</a></li>
          <!--   <li><a href="<?php echo site_url("aplikasi_haki/perpanjangan_hak_cipta");?>"><i class="bg-lo icon-retweet"></i> Perpanjang Hak Cipta</a></li> -->
          </ul>
        </div>
    </div>


  <div class="container-fluid">
    <hr>

    <div class="row-fluid">

      <div class="span12">

         <div class="widget-box">
          <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
            <h5>Data Pengajuan Hak Cipta</h5>
          </div>
          <div class="widget-content nopadding">
            <table class="table table-bordered data-table">
              <thead>
                <tr>
                  <th>Pencipta</th>
                  <th>Judul Ciptaan</th>
                  <th>Tanggal Diterima</th>
                  <th>Uraian Ciptaan</th>
                  <th>Status</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $status  = array('new','Diajukan','Kena surat','Jawab Surat','Diterima','Ditolak');
                foreach ($data_pengajuan_hak_cipta as $key ) {
                  echo '<tr class="gradeX">
                            <td><a href="'.site_url("aplikasi_haki/detail_hak_cipta/").$key['id'].'">'.$key['nama'].'</td>
                            <td>'.$key['judul_ciptaan'].'</td>
                            <td>'.$key['tanggal_penerimaan'].'</td>
                            <td>'.$key['uraian_ciptaan'].'</td>
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
