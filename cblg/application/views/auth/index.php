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
    <link rel="stylesheet" href="<?=base_url('assets/css/my-login.css')?>">
    <style>
        @font-face{
            font-family: 'avocados';
            src: url('<?=base_url("assets/font/Avocados.ttf")?>') format('truetype');
        }
    </style>
</head>
<body>
    
<div class="card kotak1">
  <div class="card-body">
    <h3 class="text-center">LOGIN</h3>
    <hr>

<?=$this->session->flashdata('message')?>
    <form action="" method="post">
        <div class="form-group">
            <label for="username">Username</label>
            <input type="text" class="form-control" id="username"  placeholder="Username" name="username"> 
            <span class="small text-danger"><?=form_error('username')?></span>           
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" id="password" placeholder="Password" name="password">
            <span class="small text-danger"><?=form_error('password')?></span> 
        </div>        
        <button type="submit" class="btn btn-block btn-primary">LOGIN</button>
        <p class="text-center mt-2">Don't have an account? <a href="#">Create One</a></p>
    </form>

    <div class="card-footer text-muted">
        <p class="text-center">Copyright &copy; <?=date('Y')?> | www.khuzema.me</p>
    </div>
  </div>
</div>

<script src="<?=base_url('assets/js/jquery.min.js')?>"></script>
<script src="<?=base_url('assets/js/bootstrap.min.js')?>"></script>
</body>
</html>
