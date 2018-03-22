<!DOCTYPE html>
<html lang="en">
<head>
<title>Sistem Informasi Pengelolaan Haki</title>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="stylesheet" href="<?php echo base_url("assets/theme");?>/css/bootstrap.min.css" />
<link rel="stylesheet" href="<?php echo base_url("assets/theme");?>/css/bootstrap-responsive.min.css" />
<link rel="stylesheet" href="<?php echo base_url("assets/theme");?>/css/uniform.css" />
<link rel="stylesheet" href="<?php echo base_url("assets/theme");?>/css/select2.css" />
<link rel="stylesheet" href="<?php echo base_url("assets/theme");?>/css/fullcalendar.css" />
<link rel="stylesheet" href="<?php echo base_url("assets/theme");?>/css/matrix-style.css" />
<link rel="stylesheet" href="<?php echo base_url("assets/theme");?>/css/matrix-media.css" />
<link href="<?php echo base_url("assets/theme");?>/font-awesome/css/font-awesome.css" rel="stylesheet" />
<link rel="stylesheet" href="<?php echo base_url("assets/theme");?>/css/jquery.gritter.css" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="<?php echo base_url("assets/theme");?>/css/jquery.autocomplete.css" />
</head>
<body>





<!--Header-part-->
<div id="header">
  <h1><a href="dashboard.html">Matrix Admin</a></h1>
</div>
<!--close-Header-part-->


<!--top-Header-menu-->
<div id="user-nav" class="navbar navbar-inverse">
  <ul class="nav">
    <li  class="dropdown" id="profile-messages" ><a title="" href="#" data-toggle="dropdown" data-target="#profile-messages" class="dropdown-toggle"><i class="icon icon-user"></i>  <span class="text">Welcome User</span><b class="caret"></b></a>
      <ul class="dropdown-menu">
        <li><a href="#"><i class="icon-user"></i> My Profile</a></li>
        <li class="divider"></li>
        <li><a href="<?php echo site_url("Welcome/edit_profil");?>"><i class="icon-user"></i> Edit Profile</a></li>
        <li class="divider"></li>

        <li><a href="<?php echo site_url("Welcome/Logout");?>"><i class="icon-key"></i> Log Out</a></li>
      </ul>
    </li>

  
    <li class=""><a title="" href="<?php echo site_url("Welcome/Logout");?>"><i class="icon icon-share-alt"></i> <span class="text">Logout</span></a></li>
  </ul>
</div>
<!--close-top-Header-menu-->


<!--start-top-serch-->
<div id="search">
  <input type="text" placeholder="Search here..."/>
  <button type="submit" class="tip-bottom" title="Search"><i class="icon-search icon-white"></i></button>
</div>
<!--close-top-serch-->
