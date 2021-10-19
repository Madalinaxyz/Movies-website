
                <div class="card" id="movie-<?php echo $key;?>">
                <img src="<?php echo "images/".$movie['poster']; ?>" class="card-img-top" src="images/arainyday.jpg" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title"><?php echo $movie ['title'];?></h5>
                  <p class="card-text"><?php echo $movie['desc'].'...';?></p>
                  <a href="<?php echo $movie['link'];?>" class="btn btn-primary">Read more...</a>
                </div>
              </div>
            
