<div class="content container">
<div class="card mt-3">
<div class="card-header">
<h3>Change your password</h3>
</div>
  <div class="card-body">    
    <?=$this->session->flashdata('message');?>
    <div class="table-container">
    <form action="" method="post">
        <div class="form-group">
            <label for="old_password">Password lama:</label>
            <input type="password" class="form-control" id="old_password" name="old_password">
            <span class="text-small text-danger"><?=form_error('old_password')?></span>
        </div>
        <div class="form-group">
            <label for="password">Password baru</label>
            <input type="password" class="form-control" id="password" name="password">
            <span class="text-small text-danger"><?=form_error('password')?></span>
        </div>
        <div class="form-group">
            <label for="new_password">Ulangi leh, pada ora!</label>
            <input type="password" class="form-control" id="new_password" name="new_password">
            <span class="text-small text-danger"><?=form_error('new_password')?></span>
        </div>
        
        <div class="modal-footer">
        <a class="btn btn-secondary" href="<?=base_url('admin')?>">Kembali</a>
        <button type="submit" class="btn btn-primary" >Simpan perubahan</button>
        </div>
     </form>
     </div>
  </div>
</div>

<div class="footer mb-3 mt-2">Copyright &copy; <?=date('Y')?> | cblg.com
</div>