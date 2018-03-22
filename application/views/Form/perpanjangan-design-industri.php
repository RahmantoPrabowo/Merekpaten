<div id="content">

<div id="content-header">
    <div id="breadcrumb"> <a href="<?php echo site_url();?>" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="<?php echo site_url("aplikasi_haki");?>" class="tip-bottom">Aplikasi Haki</a> <a href="<?php echo site_url("aplikasi_haki/design_industri");?>" class="tip-bottom">Design Industri</a><a href="" class="current">Perpanjangan Design Industri</a> </div>
    <h1>Perpanjangan Design Industri</h1>
</div>
  <div class="container-fluid">
    <hr>

    <div class="row-fluid">

      <div class="span12">

        <div class="widget-box">
          <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
            <h5>Data Design Industri</h5>
          </div>
          <div class="widget-content nopadding">
            <table class="table table-bordered data-table">
              <thead>
                <tr>
                  <th>Judul Design</th>
                  <th>Nama Pemohon</th>
                  <th>Tanggal Diterima</th>
                  <th>Status</th>
                </tr>
              </thead>
              <tbody>
                <?php
                foreach ($data_pengajuan_design as $key ) {
                  echo '<tr class="gradeX">
                            <td>'.$key['judul_desain'].'</td>
                            <td>'.$key['nama'].'</td>
                            <td>'.$key['tanggal_penerimaan'].'</td>
                            <td>'.$key['status'].'</td>
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