<div class="content container">
<div class="card mt-3">
<div class="card-header">
<h3>Reports</h3>
</div>
  <div class="card-body">        
    <div class="clear"></div>
    <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash'); ?>"></div>
    <div class="alert alert-info alert-dismissible fade show" role="alert">
    Selamat datang di halaman dashboard <strong><?=$username?></strong>, Jika chart tidak muncul mohon refresh (F6) halaman ini!. 
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
    </div>
    <div class="table-container">
        <canvas id="myChart" width="200" height="100"></canvas>
    </div>
  </div>
</div>
<div class="footer mb-3 mt-2">Copyright &copy; <?=date('Y')?> | cblg.com
</div>
