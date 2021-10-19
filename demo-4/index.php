<?php require_once('includes/header.php'); ?>

<?php
date_default_timezone_set("Europe/Bucharest");
echo date_default_timezone_get();
?>
  <div class="col text-center">
          <br> Hello,movie lovers!Welcome to our page,we hope you'll enjoy the experience.
          Check out the latest 2 movies!
          <?php
$t = localtime( time(), true ); 
$h = $t[ 'tm_hour' ]; 
 
if( $h >= 7 && $h <= 11 ) print "Good morning!";
elseif( $h > 11 && $h < 18 ) print "Good afternoon!";
elseif( $h >= 18 && $h < 22 ) print "Good evening!";
elseif( $h >= 22 ) print "Good night!";
else print "Why are you awake?";
 
?> </br>
          <div>

        <div class="row">
              <?php 
              $i=0; foreach($movies as $key=>$movie) {$i++; 
              if ($i<=2){  ?>
               <div class="col-lg-4  mb-3 " >   
         <?php include('includes/archive-movie.php'); ?>
         </div>
         
              <?php }
              }
              
  ?>
       </div>
       
<?php require_once('includes/footer.php');?>

    