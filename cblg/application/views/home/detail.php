
<?php if(!empty($search)) :?>
  <div class="card mb-2">
    <div class="card-header">
      *FEATURED
    </div>
    <article>
      <?php $this->load->view('home/detaillive', ['artikel' => $artikel]); ?>
    </article>
  </div>
<?php endif; ?>


<?php if(empty($search)) :?>
  <div class="container">
    <div class="row">
      <div class="col-md-8">
        <div class="card mb-2">
          <div class="card-body">
            <h2 class="text-center">~Article~</h2>
          </div>
        </div>
        <div class="card mb-2">
          <div class="card-header">
          *FEATURED
        </div>
        <div class="card mb-3">
          <img class="card-img-top img-thumbnail" src="<?=base_url('assets/img/artikel/').$artikel['gambar_artikel']?>"  alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title"><?=$artikel['judul_artikel']?></h5>
            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            <p class="card-text"><small class="text-muted">Last updated <?=$artikel['waktu_artikel']?></small></p>
            <p class="card-text"><small class="text-muted">Author: <?=$artikel['nama_pengguna']?></small></p>
            <p class="card-text"><small class="text-muted">Category: <?=$artikel['kategori']?></small></p>
        </div>
      </div>
      <ul class="opsiArtikel">
        <a href="<?=base_url('home/likeArtikel/').$artikel['id_artikel']?>" class="tombolSuka" data-id = <?=$artikel['id_artikel']?> data-user = <?=$username?>>
          <li class="fas fa-fw fa-thumbs-up text-primary">
          <?=$suka?>
          </li>
        </a>
        <a href="#" class="comments-link">
          <li class="fas fa-fw fa-comment text-primary">
          Comment
          </li>
        </a>
        <a href="#">
          <li class="fas fa-fw fa-share text-primary">
          Share
          </li>
        </a>
      </ul>
    </div>
    <div class="row">
      <div class="col-md">
        <div class="card mb-2">
          <h5 class="card-header">Comments</h5>
          <div class="card-body">            
            <div class="card-text text-secondary comments-field">

            
            <?php if($komentar == []){
                      echo "<span class='text-center'>There is no comments now!</span>";
                    }
            ?>

            <?php foreach($komentar as $kom) : ?>
            <div class="card text-dark bg-light mb-3 " >              
              <div class="card-body">
                <h5 class="card-title profile_picture"><?=$kom['nama_pengguna']?></h5>
                <p class="card-text"><?=$kom['komentar']?></p>
                <span class="text-muted float-right "><?=$kom['waktu']?></span>
              </div>
            </div>
            <?php endforeach;?>

            </div>     
            <hr class="my-4">
            <form action="<?=base_url("home/commentsAjax/").$artikel['id_artikel']?>" method="post" class="comments-form">
              <div class="form-group">
                <textarea class="form-control mb-2" name="comments" placeholder="Type here!"></textarea>
                <button type="button" class="btn btn-warning btn-sm"  data-id = <?=$artikel['id_artikel']?> >Send</button>
              </div>            
            </form>
          </div>
        </div>
      </div>
    </div>    
  </div>
<?php endif; ?>
