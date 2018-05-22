<article>
					<div class="index_s_l"  onmouseover="a(<?php echo $f-1?>)" onmouseout="b(<?php echo $f-1?>)">
						<a href="film.php?id=<?php echo $id;?>">
							<img class="play" src="nkarner/play.png" alt="">
						</a>
						<img  class="home" src="<?php echo $home_img ?>" alt="">
						
					</div>
					<script>
						function a(a){
							var play =  document.getElementsByClassName("play");
							var home =  document.getElementsByClassName("home");
							play[a].style.zIndex = 1;
							home[a].style.opacity = 0.5;
						}
						function b(a){
							var play =  document.getElementsByClassName("play");
							var home =  document.getElementsByClassName("home");
							play[a].style.zIndex = -1;
							home[a].style.opacity = 1;
						}

					</script>
					<div class="index_s_r">
						<h2><?php echo $name; ?></h2>
						<div class="index_s_r_1">
						<?php
						$arr = [$desc1,$desc2,$desc3,$desc4];
						for($i=0;$i<4;$i++){
							$descArr = explode(":",$arr[$i]);
							if($descArr[1]){?>
							
								<p><b><?php echo $descArr[0]."</b> : ". $descArr[1]; ?></p>
                                <?php }
                        } 
                        $genres = explode(",",$genres);
                        ?>
                        <p><b>Genres : </b> <?php
                        for($i = 0;$i<count($genres);$i++){
                        ?>
                            <a href="cat.php?G=<?php echo $genres[$i]; ?>"><?php echo($genres[$i]);
                            if($i != count($genres)-1) echo ",";
                            ?></a>
                    
                    <?php 
                        }?>
                        </p>
							
						</div>
						<div class="index_s_r_2">
						<?php $year = explode(" ",$relase)[2]; ?>
							<p><b>Status </b> : <?php echo $status; ?></p> 
							<p><b>Time </b> : <?php echo $time; ?></p> 
							<p><b>Budget </b> : <?php echo $budget; ?></p> 
							<p><b>Revenue </b> : <?php echo $revenue; ?></p> 
							<p><b>Year</b> : <a href="cat.php?Y=<?php echo $year;?>"><?php echo $year; ?></p></a>
						</div>
						<div class="index_desc">
							<p><b>Description : </b><?php echo substr($desc,0,200); ?><a href="film.php?id=<?php echo $id;?>">.....</a>
						
						</p>
					</div>
					<a id="watch" href="film.php?id=<?php echo $id;?>"><div class="watch">Watch Now</div></a>
				</article>
