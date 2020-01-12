const flashData = $('.flash-data').data('flashdata');

if(flashData){
    Swal({
        title: 'Data Artikel',
        text: 'Berhasil ' + flashData,
        type: 'success'
    });    
}
$('.tombol-hapus').on('click', function(e){
    e.preventDefault();
    const href = $(this).attr('href');
    Swal({
        title: 'Apa anda yakin?',
        text: 'Hapus data',
        type: 'warning',
        showCancelButton: 'true',
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes I\'m sure'
    }).then((result) => {
        if(result.value){            
                document.location.href = href;            
        }
    })
});
$(document).ready(function(){
function flashAlert(){
    
        var text = document.createTextNode() = 'cek';
        console.log(text);
    
}
});
