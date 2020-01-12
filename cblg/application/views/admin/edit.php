<div class="content container">
<div class="card mt-3">
<div class="card-header">
<h3>Detail & Edit Artikel</h3>
</div>
  <div class="card-body">    
    
    <div class="table-container">
    <form action="" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label for="judul_artikel">Judul:</label>
            <input type="text" class="form-control" id="judul_artikel" name="judul_artikel" value="<?=$artikel['judul_artikel']?>">
        </div>
        <div class="form-group">
            <label for="kategori">Kategori:</label>
            <select class="form-control" id="kategori" name="kategori">
            <?php foreach($kategori as $k) : ?>
            <?php if($k['id_kategori'] == $artikel['id_kategori']) :?>
            <option value="<?=$k['id_kategori']?>" selected><?=$k['kategori']?></option>
            <?php else: ?>            
            <option value="<?=$k['id_kategori']?>"><?=$k['kategori']?></option>
            <?php endif;?>
            <?php endforeach; ?>
            </select>
        </div>
        <div class="form-group">
            <label for="waktu_artikel">Waktu:</label>
            <input type="text" class="form-control" id="waktu_artikel" name="waktu_artikel" value="<?=$artikel['waktu_artikel']?>" disabled>
        </div>
        <div class="form-group">
            <label for="author">Author:</label>
            <input type="text" class="form-control" id="author" name="author" value="<?=$user['nama_pengguna']?>" disabled>
        </div>
        <div class="form-group">
            <label for="isi_artikel">Konten:</label>
            <textarea class="form-control" id="isi_artikel" rows="3" name="isi_artikel"><?=$artikel['isi_artikel']?></textarea>
        </div>
        
        <div class="gambarArtikel"><img class="img-thumbnail mb-3" src="<?=base_url('assets/img/artikel/').$artikel['gambar_artikel']?>" alt="Jika gambar belum muncul silahkan refresh halaman ini!"></div>
       
        <div class="input-group">
            <div class="custom-file">
            <input type="file" class="custom-file-input" id="image" name="image">
            <label class="custom-file-label" for="image"><?=$artikel['gambar_artikel']?></label>
            </div>
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