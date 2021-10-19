
<?php require_once('includes/header.php'); ?>
    <h1>A rainy day in New York</h1>
      <div class="row">
        <div class="col-12 col-md-3">
         <img src="images/arainyday.jpg" >
    
        </div>
        
        <div class="col-12 col-md-9">
          <h1>2019</h1>
          A Rainy Day in New York is a 2019 American romantic comedy film written and directed by Woody Allen. It stars Timothée Chalamet, Elle Fanning, Selena Gomez, Jude Law, Diego Luna, and Liev Schreiber. The film follows the romantic exploits of a young college student (Chalamet) on a weekend trip in his hometown of New York City, trying to further bond with his college girlfriend (Fanning) while she is in the city to interview a famous film director (Schreiber).

          The film was completed in 2018.
    <br><strong>Directed by:</strong>Woody Ellen</br>
  <strong>Runtime:</strong> <?php echo runtime_prettier(92);?> 
<br><strong>Year:</strong>2019 <?php if ($age = check_old_movie(1950)){?>
  <span class="badge badge-primary">
 Old movie: <?php echo $age ;?> years
  </span>

<?php };
  ?> </br>

    <br><b>Cast:</b></br>
<ul>
  <li>Selena Gomez</li>
  <li>Timothee Chalamet</li>
  <li>Elle Fanning</li>
</ul>


        </div>
      </div>
      <?php require_once('includes/footer.php');?>