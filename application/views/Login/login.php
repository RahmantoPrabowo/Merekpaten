<!DOCTYPE html>
<html lang="en">
    
<head>
        <title>Matrix Admin</title><meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link rel="stylesheet" href="<?php echo base_url("assets/theme");?>/css/bootstrap.min.css" />
		<link rel="stylesheet" href="<?php echo base_url("assets/theme");?>/css/bootstrap-responsive.min.css" />
        <link rel="stylesheet" href="<?php echo base_url("assets/theme");?>/css/matrix-login.css" />
        <link href="<?php echo base_url("assets/theme");?>/font-awesome/css/font-awesome.css" rel="stylesheet" />
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>

    </head>
    <body>
        <div id="loginbox">            
            <form id="loginform" class="form-vertical" action="<?php echo site_url('Welcome/VerifyInput')?>" method="POST">
				 <div class="control-group normal_text"> <h3><img src="<?php echo base_url("assets/theme");?>/img/logo.png" alt="Logo" /></h3></div>
                <div class="control-group">
                    <div class="controls">
                        <div class="main_input_box">
                            <span class="add-on bg_lg"><i class="icon-user"> </i></span><input type="text" placeholder="Username" name="username"/>
                        </div>
                    </div>
                </div>
                <div class="control-group">
                    <div class="controls">
                        <div class="main_input_box">
                            <span class="add-on bg_ly"><i class="icon-lock"></i></span><input type="password" placeholder="Password" name="pass"/>
                        </div>
                    </div>
                </div>
                <div class="form-actions">
                    <center><span><button type="submit" class="btn btn-success">Login</button></span></center>
                </div>
            </form>
           
        </div>
        
        <script src="<?php echo base_url("assets/theme");?>/js/jquery.min.js"></script>  
        <script src="<?php echo base_url("assets/theme");?>/js/matrix.login.js"></script> 
    </body>

</html>
