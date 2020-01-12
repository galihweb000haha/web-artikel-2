

<!-- footer -->
<footer class="footer-distributed">
            <div class="footer-left">
                <h3>Coba<span>Lagi</span></h3>
                <p class="footer-links">
                    <a href="<?=base_url('home')?>">HOME</a>
                    ·
                    <a href="<?=base_url('home/faq')?>">FAQ</a>
                    ·
                    <a href="<?=base_url('home/disclaimer')?>">DISCLAIMER</a>
                    ·
                    <a href="<?=base_url('auth')?>">LOGIN</a>
                    
                    
                </p>
                <p class="footer-company-name flow-text">Copyright &copy; 2019 | cblg.me</p>
            </div>
            <div class="footer-center">
                <div>
                    <i class="fas fa-fw fa-map-marker"></i>
                    <p>Tegal, Jawa Tengah, Indonesia</p>
                </div>
                <div>
                    <i class="fas fa-phone"></i>
                    <p>+6289-8667-6180</p>
                </div>
                <div>
                    <i class="fas fa-envelope"></i>
                    <p><a href="mailto:galih11120@gmail.com">Send Email</a></p>
                </div>
            </div>
            <div class="footer-right">
                <p class="footer-company-about">
                    <span>About Us</span>
                     Lorem ipsum dolor sit amet consectetur adipisicing elit. Non, corporis iste? In et impedit fugiat dolor porro quasi debitis ullam atque.
                </p>
                <div class="footer-icons">
                    <a href="#"><i class="fas fa-user"></i></a>
                    <a href="#"><i class="fas fa-user"></i></a>
                    <a href="<?=base_url('auth')?>"><i class="fas fa-user"></i></a>
                    <a href="#"><i class="fas fa-user"></i></a>
                </div>
            </div>
        </footer>
<!-- end-footer -->

<div class="scrollToTop" >Tap</div>

<script src="<?=base_url('assets/js/jquery.min.js')?>"></script>
<script src="<?=base_url('assets/js/bootstrap.min.js')?>"></script>
<script>
$(document).ready(function(){
    
    $(window).load(function(){
        $('div.value1').css("display", "none");  
        $('div.value2').css("display", "none");  
        $('div.value3').css("display", "none");  
        

        $('.btn-faq1').click(function(){
            
           $('div.value1').slideToggle("slow");
           $('div.value1').css("display", "block"); 
        
        })
        $('.btn-faq2').click(function(){
            
            $('div.value2').slideToggle("slow");
            $('div.value2').css("display", "block"); 
         
         })
         $('.btn-faq3').click(function(){
            
            $('div.value3').slideToggle("slow");
            $('div.value3').css("display", "block"); 
         
         })
    })
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
        
        $('article').load("<?=base_url('home/detaillive/')?>" + $('.search').val());
        $('h2.text-center').html('~ARTICLE~');
        // // console.log($(this).val());
        //  $.ajax({
        //     url : '<?=base_url("home/detaillive/")?>' + $('.search').val() + '/keyword',
        //     method : 'post',
        //     data : {keyword : $('.search').val()},
        //     success : function(){
        //         document.location.href = '<?=base_url("home/detaillive/")?>' + $('.search').val() + '/keyword';
        //     }

        // });
    });

    

    function loadSuka(id){
        $.get('<?=base_url("home/sukaAjax/")?>' + id, function(data){
            $('.fa-thumbs-up').html(data);
        })
    }
    $('.tombolSuka').click(function(e){
        e.preventDefault();
        if($(this).data('user') == ''){
        alert('Please Sign in first!');        

        }
        id = $(this).data('id');
        url = $(this).attr('href');
        $.ajax({
            type: 'post',
            url: url,
            id: {id:id},
            success: function(){
                loadSuka(id);
            }
        })
        
        
    })
       
  
      $('.comments-link').click(function(e){
          e.preventDefault();          
          $('.comments-field').slideToggle('slow');
      })

      function loadComments(id){
        $.get('<?=base_url("home/komentarArtikel/")?>' + id, function(data){
            $('.comments-field').html(data);
        });
        kosong = ""
        $('textarea').val(kosong);
      }
      $('.comments-form button').click(function(){
          id = $(this).data('id');
          
          $.ajax({
            url: $('.comments-form').attr('action'),
            type: 'post',            
            data: $('form').serialize(),
            success: function(data){
                loadComments(id);
            }
          })
      })
    // document.body.addEventListener('load', loadSuka());
    // setInterval('loadSuka()', 1000);
    // document.body.addEventListener('load', loadComments());
    // setInterval('loadComments()', 1000);

    $(document).load(function(){
        setInterval('loadComments()', 1000);
        setInterval('loadSuka()', 1000);
    })

})

</script>
</body>
</html>