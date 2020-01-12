<?php

  

$output = '';
foreach($artikel as $art) {
  $foto = "assets/img/artikel/".$art['gambar_artikel'];
  $judul = $art['judul_artikel'];
  $waktu = $art['waktu_artikel'];
  $author = $art['nama_pengguna'];
  $kategori = $art['kategori'];
  $id_artikel = $art['id_artikel'];
  $linkDetail = '/home/detailArtikel/';

$output .= '

  <div class="row">
  <div class="col-md-6 pt-3 pl-4">';
$output .='
      <img class="card-img-top img-thumbnail" style="width:400px" src='. base_url() .'/'. $foto.' alt="Card image cap">
  </div>
  <div class="col-md-6 pt-3">
  <div class="container"> 
      <h5 class="card-title">'.$judul.'</h5>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
      <p class="card-text"><small class="text-muted">Last updated '.$waktu.'</small></p>
      <a href='. base_url() .'/'.$linkDetail.'/'.$id_artikel .' class="btn btn-sm btn-outline-primary mb-3">Baca</a>
  </div>
  </div>
</div>
<hr class="my-4">'; 













  
//   $output .='
// <div class="card mb-2">
//    <div class="card-header">
//     *FEATURED
//   </div>

//   <div class="card mb-3">
//     <img class="card-img-top img-thumbnail" src=' . base_url() .'/'. $foto.'  alt="Card image cap">
//     <div class="card-body">';
//     $output .=


//         '<h5 class="card-title">'.$judul.'</h5>
//         <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
//         <p class="card-text"><small class="text-muted">Last updated '.$waktu.'</small></p>
//         <p class="card-text"><small class="text-muted">Author: '.$author.'</small></p>
//         <p class="card-text"><small class="text-muted">Category: '.$kategori.'</small></p>
//     </div>
//    </div>

// </div>';
}

echo $output;