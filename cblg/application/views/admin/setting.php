<div class="content container">
<div class="card mt-3">
<div class="card-header">
<h3>Preferences</h3>
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
    <form action="" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label for="nama_pengguna">Nama pengguna:</label>
            <input type="text" class="form-control" id="nama_pengguna" name="nama_pengguna" value="<?=$user['nama_pengguna']?>">
            <span class="text-small text-danger"><?=form_error('nama_pengguna')?></span>
        </div>
        <div class="form-group">               
        <label for="foto">Foto:</label>
            <div class="custom-file">                
                <input type="file" class="custom-file-input" id="foto" name="foto">
                <label class="custom-file-label" for="foto"><?=$user['foto']?></label>
            </div>            
        </div> 

        <div class="gambarArtikel"><img class="img-thumbnail mb-3" src="<?=base_url('assets/img/profile/').$user['foto']?>" alt="Jika gambar belum muncul silahkan refresh halaman ini!">
        </div>   

        <div class="modal-footer">
        <a class="btn btn-secondary" href="<?=base_url('admin')?>">Kembali</a>
        <button type="submit" class="btn btn-primary" >Simpan perubahan</button>
        </div>
     </form>




  </div>
</div>
<div class="footer mb-3 mt-2">Copyright &copy; <?=date('Y')?> | cblg.com
</div>
