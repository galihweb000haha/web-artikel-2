
<div class="container">
<div class="row">
    <div class="col-md-8">
<div class="card mb-2">
  <div class="card-body">
    <h2 class="text-center">~ARTICLE~</h2>
  </div>
</div>
<article>
<div class="card mb-2">
   <div class="card-header">
   <?php if(isset($filter)) : ?>
   <?= '*'.strtoupper($categoryName->kategori); ?>
   <?php else : ?>
    *ALL CATEGORIES
  <?php endif;?>
  </div>
<?php foreach ($artikel as $art) : ?>
  <div class="row">
    <div class="col-md-6 pt-3 pl-4">
        <img class="card-img-top img-thumbnail" style="width:400px" src="<?=base_url('assets/img/artikel/').$art['gambar_artikel']?>" alt="Card image cap">
    </div>
    <div class="col-md-6 pt-3">
    <div class="container">    
        <h5 class="card-title"><?=$art['judul_artikel'];?></h5>
        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
        <p class="card-text"><small class="text-muted">Last updated <?=$art['waktu_artikel'];?></small></p>
        <a href="<?=base_url('home/detailArtikel/') . $art['id_artikel']  ?>" class="btn btn-sm btn-outline-primary mb-3">Baca</a>
    </div>
    </div>
  </div>
  <hr class="my-4">
<?php endforeach; ?>
</div>
</article>
<?= $this->pagination->create_links(); ?>
</div>

    