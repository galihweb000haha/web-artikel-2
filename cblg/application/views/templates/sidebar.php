<div class="col-md-4">
        <div class="card mb-2">
            <div class="card-header">
                *RECOMENDATION
                <span><i class="fas fa-bookmark float-right"></i></span>
            </div>
            <div class="card-body">
            
            <div class="row">
                <div class="col-md-4">
                    <img class="card-img-top "  src="<?=base_url('assets/img/artikel/code.jpg')?>" alt="Card image cap">
                </div>
                <div class="col-md-8">
                    <h5 class="card-title">Sample title 1</h5>          
                </div>
            </div>
            <hr class="my-4">


            </div>
        </div>   
        <div class="card mb-2">
            <div class="card-header">
                *TRENDING
                <span><i class="fas fa-star float-right"></i></span>
            </div>
            <div class="card-body">
            <ul class="list-group list-group-flush">
            <?php foreach ($trending as $tre) : ?>
                <li class="list-group-item"><a href="<?=base_url('home/detailArtikel/') . $tre['id_artikel'] ?>"><?=$tre['judul_artikel'];?></a></li>
            <?php endforeach; ?>
            </ul>
            
                
            </div>
        </div>   
        <div class="card">
            <div class="card-header">
                *CATEGORY
                <span><i class="fas fa-folder float-right"></i></span>
            </div>

             <div class="card-body">
                <ul class="list-group list-group-flush">
                    <?php foreach ($category  as $cat) : ?>
                        <li class="list-group-item"><a href="<?= base_url('home/detailArtikelByIdKategori/') . $cat['id_kategori'] ?>"><?=$cat['kategori'];?></a><span class="badge badge-primary float-right"><?=$cat['jml_artikel'];?></span></li> 
                    <?php endforeach; ?>                   
                </ul>
                

            </div>
        </div>   
        
        
    </div>

</div>


</div>