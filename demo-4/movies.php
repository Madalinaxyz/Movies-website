
<?php require_once('includes/header.php'); ?>
        <h1>Movies</h1>
      
            <?php if(count($movies) > 0 ) { ?>
            <div class="row">
              <?php $i=0; foreach($movies as $key=>$movie) {$i++; ?>
               
                <div class="col-12 mb-3 col-sm-6 col-md-4 " >  
         <?php include('includes/archive-movie.php'); ?>
</div>
  <?php } ?>
        </div>
            <?php } ?>
 <?php require_once('includes/footer.php');?>