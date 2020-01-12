
<div class="content container">
<div class="card mt-3">
<div class="card-header">
<h3>Preferences</h3>
</div>
  <div class="card-body">        
  
    <div class="card card-setDashboard" >
        <div class="card-body">
            <h5 class="card-title">Change theme</h5>
            <div class="row">
                <?php for($i = 1; $i <= 4; $i++):?>
                    <div class="col-md-3 theme<?=$i?> img-thumbnail" ></div>   
                <?php endfor;?>
            </div>     
            <div class="row">
                <?php for($i = 5; $i <= 8; $i++):?>
                    <div class="col-md-3 theme<?=$i?> img-thumbnail" ></div>   
                <?php endfor;?>
            </div>     
        </div>
    </div>
  

  </div>
</div>
<div class="footer mb-3 mt-2">Copyright &copy; <?=date('Y')?> | cblg.com
</div>
