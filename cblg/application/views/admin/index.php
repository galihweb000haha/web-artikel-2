<?php
$i = 1;
?>
<div class="content container">
<div class="card mt-3">
<div class="card-header">
<h3>Article</h3>
</div>
  <div class="card-body">    
    <div class="form-group searchInput float-right">
        <input class="form-control search" type="text" placeholder="Cari . .">
    </div>
    <div class="clear"></div>
    <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash'); ?>"></div>
    <div class="alert alert-info alert-dismissible fade show" role="alert">
    Selamat datang di halaman dashboard <strong><?=$user['nama_pengguna']?></strong>, anda adalah seorang admin! 
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
    </div>
   <?php if(form_error('judul_artikel')) :?>
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
    <?=form_error('judul_artikel')?>
    <?=form_error('isi_artikel')?>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
    </div>
    <?php endif; ?>



    <button type="button" class="btn btn-primary btn-lg btn-block mb-4" data-toggle="modal" data-target="#exampleModal">Bikin artikel dong sob!</button>

    <div class="table-container">
     <table class="table">
         <thead>
             <tr>
                 <th>#</th>
                 <th>Judul</th>
                 <th>Kategori</th>
                 <th>Author</th>
                 <th>Waktu</th>                
                 <th>Action</th>
             </tr>
         </thead>
         <tbody>
         
         <?php foreach($artikel as $art) : ?>
             <tr>
                 <td><?=++$awalData?></td>
                 <td><?=$art['judul_artikel']?></td>
                 <td><?=$art['kategori']?></td>
                 <td><?=$art['nama_pengguna']?></td>
                 <td><?=$art['waktu_artikel']?></td>
                 <td>
                     <a href="<?=base_url('admin/deleteArtikel/').$art['id_artikel']?>" class="tombol-hapus"><span class="fas fa-fw fa-window-close fa-fw mr-3 text-danger"></span></a>
                     <a href="<?=base_url('admin/editArtikel/').$art['id_artikel']?>"><span class="fas fa-fw fa-pen fa-fw mr-3 text-warning"></span></a>
                     
                 </td>
             </tr>
             <?php $awalData ?>
        <?php endforeach; ?>
        
         </tbody>
  
     </table>

    <nav aria-label="Page navigation example">
        <ul class="pagination justify-content-end">
        <?php if($halamanAktif > 1) :?>
            <li class="page-item">
        <?php else : ?>
            <li class="page-item disabled">
        <?php endif; ?>
            <a class="page-link" href="?page=<?=$halamanAktif-1;?>">Previous</a>
            </li>
            <?php for($i = 1; $i <= $jumlahHalaman; $i++) :?>
                <?php if($i == $halamanAktif) :?>
                <li class="page-item"><a class="page-link " href="?page=<?=$i;?>" style="border-color:#007bff;"><?=$i;?></a></li>
                <?php else : ?>
                <li class="page-item"><a class="page-link" href="?page=<?=$i;?>"><?=$i;?></a></li>
                <?php endif; ?>
            <?php endfor; ?>
            <?php if($halamanAktif == $jumlahHalaman) :?>
            <li class="page-item disabled">
            <?php else : ?>
            <li class="page-item">
            <?php endif; ?>
            <a class="page-link" href="?page=<?=$halamanAktif+1;?>">Next</a>
            </li>
        </ul>
    </nav>


     </div>
  </div>
</div>

<div class="footer mb-3 mt-2">Copyright &copy; <?=date('Y')?> | cblg.com
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Form tambah artikel</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label for="judul_artikel">Judul:</label>
            <input type="text" class="form-control" id="judul_artikel" name="judul_artikel">
        </div>
        <div class="form-group">
            <label for="kategori">Kategori:</label>
            <select class="form-control" id="kategori" name="kategori">
            <?php foreach($kategori as $k) : ?>
            <option value="<?=$k['id_kategori']?>"><?=$k['kategori']?></option>            
            <?php endforeach; ?>
            </select>
        </div>
        <div class="form-group">
            <label for="isi_artikel">Konten:</label>
            <textarea class="form-control" id="isi_artikel" rows="3" name="isi_artikel"></textarea>
        </div>
        <div class="input-group">
            <div class="custom-file">
            <input type="file" class="custom-file-input" id="image" name="image">
            <label class="custom-file-label" for="image">Pilih gambar</label>
            </div>
        </div>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary" >Save changes</button>
        </form>
      </div>
    </div>
  </div>
</div>

