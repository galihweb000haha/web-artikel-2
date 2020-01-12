<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="author" content="Kodinger">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<title>Login Page</title>
	<link rel="stylesheet" type="text/css" media="screen" href="<?=base_url('assets/css/bootstrap.min.css')?>" />
    <link rel="stylesheet" href="<?=base_url('assets/css/mystyle.css')?>">
    <link rel="stylesheet" href="<?=base_url('assets/font/fontawesome-free/css/all.min.css')?>">
    <link rel="stylesheet" href="<?=base_url('assets/css/my-dashboard.css')?>">
    <style>
        @font-face{
            font-family: 'avocados';
            src: url('<?=base_url("assets/font/Avocados.ttf")?>') format('truetype');
        }
    </style>
</head>
<body>

<nav class="navbar navbar-expand-md navbar-light bg-light ">
<div class="container">
  
  <a class="navbar-brand" href="#">
    <span class="d-inline-block align-top"><i class="fas fa-laptop-code"></i></span>
    <span>CoBaLaGi.com</span>
  </a>
  <div class="user_management">
        
        <span onclick="document.location.href='<?=base_url()?>/admin/setting'"><?=$user['nama_pengguna']?></span>
        <img src="<?=base_url('assets/img/profile/').$user['foto']?>" alt="foto profil" onclick="document.location.href='<?=base_url()?>/admin/setting'">   
        <span class="fas fa-fw fa-bell fa-sm fa-fw mr-2 text-gray-400"></span>     
        <span class="fas fa-fw fa-envelope fa-sm fa-fw mr-2 text-gray-400"></span>            
  </div>
  
  
  <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      
      <li class="nav-item dropdown d-sm-block d-md-none">
        <a class="nav-link dropdown-toggle" href="#" id="smallerscreenmenu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dashboard
        </a>
        <div class="dropdown-menu" aria-labelledby="smallerscreenmenu">
            <a class="dropdown-item" href="<?=base_url('admin/')?>">Artikel</a>
            <a class="dropdown-item" href="#">Report</a>
        </div>
      </li><li class="nav-item dropdown d-sm-block d-md-none">
        <a class="nav-link dropdown-toggle" href="#" id="smallerscreenmenu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Profile
        </a>
        <div class="dropdown-menu" aria-labelledby="smallerscreenmenu">
            <a class="dropdown-item" href="#">Setting</a>
            <a class="dropdown-item" href="<?=base_url()?>/admin/changeKey">Password</a>
            <a class="dropdown-item" href="<?=base_url()?>/auth/logout">Logout</a>
        </div>
      </li>
      
    </ul>
  </div>
  </div>
</nav>