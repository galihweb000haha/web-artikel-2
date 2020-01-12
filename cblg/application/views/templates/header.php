<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="<?=base_url('assets/css/bootstrap.min.css')?>" />
    <link rel="stylesheet" href="<?=base_url('assets/css/mystyle.css')?>">
    <link rel="stylesheet" href="<?=base_url('assets/font/fontawesome-free/css/all.min.css')?>">
<style>
  @font-face{
    font-family: 'avocados';
    src: url('<?=base_url("assets/font/Avocados.ttf")?>') format('truetype');
  }
  body{
    font-family: 'avocados';
  }

</style>
    
</head>
<body>

<!-- navbar -->
<!-- Image and text -->
<nav class="navbar navbar-light bg-light mb-2">
<div class="container">
  <a class="navbar-brand" href="#">
    <span class="d-inline-block align-top"><i class="fas fa-laptop-code"></i></span>
    <span>CBLG.me</span>
  </a>
  <div class="form-group mt-3">
      <input class="form-control pr-2 search" type="text" placeholder="Search . . . " >    
</div>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="far fa-stream"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
    <div class="row">
      <div class="col-md-4">
        <li class="nav-item">      
          <a class="nav-link" href="<?=base_url()?>"><i class="fas fa-fw fa-home"></i>HOME <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?=base_url('home/faq')?>">FAQ</a>
        </li>
      </div>
      <div class="col-md-4">
        <li class="nav-item">
          <a class="nav-link" href="<?=base_url('home/disclaimer')?>">DISCLAIMER</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?=base_url('home/terms')?>">TERMS AND CONDITIONS</a>
        </li>
      </div>
      <div class="col-md-4">
        <li class="nav-item">
          <a class="nav-link" href="<?=base_url('home/about')?>">ABOUT US</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?=base_url('auth')?>">LOGIN</a>
        </li>
      </div>
    </div>
     
      
      
    </ul>
  </div>
  </div>
</nav>

<!-- end-navbar -->