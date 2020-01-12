<?php
$output = '';
$output .= "<thead>
             <tr>
                 <th>#</th>
                 <th>Judul</th>
                 <th>Kategori</th>
                 <th>Author</th>
                 <th>Waktu</th>                
                 <th>Action</th>
             </tr>
        </thead>
        <tbody>";
foreach($artikel as $art){
    
    $judul = $art['judul_artikel'];
    $waktu = $art['waktu_artikel'];
    $author = $art['nama_pengguna'];
    $kategori = $art['kategori'];
    $id_artikel = $art['id_artikel'];
    $linkDelete = 'admin/deleteArtikel/';
    $linkEdit = 'admin/editArtikel/';
    

    $output .= "<tr>
                 <td>".++$awalData."</td>
                 <td>".$judul."</td>
                 <td>".$kategori."</td>
                 <td>".$author."</td>
                 <td>".$waktu."</td>
                 <td>";

             $output .= "<a href=".base_url($linkDelete).$id_artikel." class='tombol-hapus'><span class='fas fa-fw fa-window-close fa-fw mr-3 text-danger'></span></a>
                     <a href=".base_url($linkEdit).$id_artikel."><span class='fas fa-fw fa-pen fa-fw mr-3 text-warning'></span></a>
                 </td>
             </tr>";
             $awalData;
}        
$output .= "</tbody>";
echo $output;


// $i = 1;
// $link = 'admin/resultSeacrch/';
// $output .= '<nav aria-label="Page navigation example">
//         <ul class="pagination justify-content-end">';
//         if($halamanAktif > 1){
//             $output .= '<li class="page-item">';
//         }else{
//             $output .= '<li class="page-item disabled">';
//         }
//         $output .= '<a class="page-link" href="'.base_url($link).'?page='.$halamanAktif-1.'">Previous</a>
//             </li>';
//             for($i = 1; $i <= $jumlahHalaman; $i++){
//                 if($i == $halamanAktif){
//                 .$output .= '<li class="page-item"><a class="page-link " href="'.base_url($link).'?page='.$i.'" style="border-color:#007bff;">'.$i.'</a></li>';
//                 }else{
//                     $output .= '<li class="page-item"><a class="page-link" href="'.base_url($link).'?page='.$i.'"></a></li>';
//                 }
//             }
//             if($halamanAktif == $jumlahHalaman){
//                 $output .= '<li class="page-item disabled">';
//             }else{
//                 $output .= '<li class="page-item">';
//             }
//             $output .= '<a class="page-link" href="'.base_url($link).'?page='.$halamanAktif+1.'">Next</a>
//             </li>
//         </ul>
// </nav>';
// var_dump($output);die;