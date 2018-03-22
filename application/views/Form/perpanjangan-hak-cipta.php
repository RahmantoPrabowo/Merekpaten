<div id="content">

<div id="content-header">
    <div id="breadcrumb"> <a href="<?php echo site_url();?>" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="<?php echo site_url("aplikasi_haki");?>" class="tip-bottom">Aplikasi Haki</a> <a href="<?php echo site_url("aplikasi_haki/hak_cipta");?>" class="tip-bottom">Hak Cipta</a><a href="" class="current">Perpanjangan Hak Cipta</a> </div>
    <h1>Perpanjangaan Hak Cipta</h1>
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
                </tr>
              </thead>
              <tbody>
                <?php
                foreach ($data_pengajuan_hak_cipta as $key ) {
                  echo '<tr class="gradeX">
                            <td>'.$key['nama'].'</td>
                            <td>'.$key['judul_ciptaan'].'</td>
                            <td>'.$key['tanggal_penerimaan'].'</td>
                            <td>'.$key['uraian_ciptaan'].'</td>
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