<!-- CSS Special for this page -->
<link rel="stylesheet" href="<?php echo base_url("assets/theme");?>/css/colorpicker.css" />
<link rel="stylesheet" href="<?php echo base_url("assets/theme");?>/css/datepicker.css" />
<link rel="stylesheet" href="<?php echo base_url("assets/theme");?>/css/uniform.css" />
<link rel="stylesheet" href="<?php echo base_url("assets/theme");?>/css/select2.css" />
<link rel="stylesheet" href="<?php echo base_url("assets/theme");?>/css/bootstrap-wysihtml5.css" />
<!-- end of css spesial -->


<!-- Content -->


<div id="content">

	<div id="content-header">
	  <div id="breadcrumb"> <a href="<?php echo base_url();?>" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#" class="current">Edit Profil</a> </div>
	  <h1>Edit Data User</h1>
	</div>

	<div class="container-fluid">
	  <hr>
	  <div class="row-fluid">
	    <div class="span6">

		    <div class="widget-box">
		        <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
		          <h5>Personal-Data</h5>
		        </div>

	        	<div class="widget-content nopadding">

	          		<form action="<?php echo site_url("Welcome/edit_data_user");?>" method="POST" class="form-horizontal">
			             <div class="control-group">
			              <label class="control-label">Username</label>
			              <div class="controls">
			                <input type="text" class="span11" value="<?php echo $username; ?>" name="username"/>
			              </div>
			            </div>
			            <div class="control-group">
			              <label class="control-label">First Name</label>
			              <div class="controls">
			                <input type="text" class="span11" value="<?php echo $firstname; ?>" name="firstname" />
			              </div>
			            </div>
			            <div class="control-group">
			              <label class="control-label">Last Name</label>
			              <div class="controls">
			                <input type="text" class="span11" value="<?php echo $lastname; ?>" name="lastname"/>
			              </div>
			            </div>

			            <div class="control-group">
			              <label class="control-label">Password Lama</label>
			              <div class="controls">
			                <input type="password"  class="span11" placeholder="Enter Password"  name="passlama" auto/>
			                
			              </div>
			            </div>

			            <div class="control-group">
			              <label class="control-label">Password Baru</label>
			              <div class="controls">
			                <input type="password"  class="span11" placeholder="Enter Password"  id="passbaru1"/>
			              </div>
			            </div>

			            <div class="control-group">
			              <label class="control-label">Ulangi Password Baru</label>
			              <div class="controls">
			                <input type="password"  class="span11" placeholder="Enter Password"  name="passbaru" id="passbaru"/>
			                <i style="color: red; display: none;" id="peringatanpass">Password yang anda masukan tidak sama!</i>
			              </div>
			            </div>
			           
			            <div class="form-actions">
			              <button type="submit" id="submit-edit-profil" class="btn btn-success pull-right" disabled>Save</button>
			            </div>
	          		</form>

	        	</div>
	      	</div>
		</div>
      </div>
	</div>

</div>




