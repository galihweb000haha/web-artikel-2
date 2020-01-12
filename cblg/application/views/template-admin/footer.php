<div class="scrollToTop">Tap</div>
<script src="<?=base_url('assets/js/jquery.min.js')?>"></script>
<script src="<?=base_url('assets/js/bootstrap.min.js')?>"></script>
<script src="<?=base_url('assets/js/sweetalert2.all.min.js')?>"></script>
<script src="<?=base_url('assets/js/Chart.js')?>"></script>
<script src="<?=base_url('assets/js/myscript.js')?>"></script>

<script>
$('.custom-file-input').on('change', function(){
   const fileName = $(this).val().split('\\').pop();
   $(this).next('.custom-file-label').addClass("selected").html(fileName);
});
   window.onscroll = function(){
        scrollFunction();
    }
    function scrollFunction(){
        if(document.body.scrollTop > 20 || document.documentElement.scrollTop > 20){
            $('.scrollToTop').css("display", "block");
        }else{
            $('.scrollToTop').css("display", "none");
        }
    }
    $('.scrollToTop').click(function(){
        $('html, body').animate({
            scrollTop: 0
        }, 1000);
   })
    $('.search').keyup(function(){        
        $('table').load("<?=base_url('admin/resultSearch/')?>" + $('.search').val());        
    });
    $.get("<?=base_url('admin/get_jmlArtikel/')?>", function(data,status){
        data_jmlArtikel = $.parseJSON(data);
        
    })   

        $.get("<?=base_url('admin/get_kategori/')?>", function(data,status){
            data_kategori = $.parseJSON(data);
 
            
        var ctx = document.getElementById('myChart').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: data_kategori,
                datasets: [{
                    label: 'Items',
                    data: data_jmlArtikel,
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(255, 159, 64, 0.2)'
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(255, 159, 64, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true
                        }
                    }]
                }
            }
        });

        })
    
</script>
</body>
</html>
