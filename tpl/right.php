<div class="right">
				<div class="r_search">
					<form action="search.php" method="get">
						<input class="search"
						<?php if(isset($_GET['q'])){
							?>
							value="<?php echo $_GET['q']?>"
							<?php 
						} ?>
						type="text" id="search" name="q" placeholder="Search"/>
						<input class="submit" type="submit" value=" " />
					</form>
				</div>
				<div class="film_r_top">
					<div class="film_r_cat1">
						<ul>
							<?php 
							for($i=date("Y");$i>=2000;$i--){	
								$sql = "SELECT `relase` FROM `kinoner` WHERE `relase` LIKE '%$i%'  ORDER BY `id` DESC";
								$data = mysqli_query($db,$sql);
								$l=0;
								while($r = mysqli_fetch_assoc($data)){
									$l++;
								}?>
									<a href="cat.php?Y=<?php echo $i?>"><li><?php echo $i; ?></a>  
									<a href="cat.php?Y=<?php echo $i?>"><span>(<?php echo $l; ?>)</span></li></a>  
								<?php } ?>
						</ul>
					</div>
					<div class="film_r_cat2">
						<?php 
						$genres1 = ["Adventure", "Comedy", "Crime", "Drama", "Fantasy", "Historical", "Historical fiction", "Horror", "Magical realism", "Mystery", "Paranoid Fiction", "Philosophical", "Political", "Romance", "Saga", "Satire", "Science Fiction", "Slice of Life", "Social", "Speculative", "Thriller", "Urban", "Western"]
						?>
						<ul>
							<?php for($i=0;$i<count($genres1);$i++){
									$sql = "SELECT `genres` FROM `kinoner` WHERE `genres` LIKE '%$genres1[$i]%'  ORDER BY `id` DESC";
									$data = mysqli_query($db,$sql);
									$l=0;
									while($r = mysqli_fetch_assoc($data)){
										$l++;
									}
								?>
								<a href="cat.php?G=<?php echo $genres1[$i] ?>"><li><?php echo $genres1[$i]; ?></a> 
								<a href="cat.php?G=<?php echo $genres1[$i] ?>"><span> (<?php echo $l; ?>)</span></li></a>
								<?php 
							} ?>
						</ul>
					</div>

				</div>
				<div class="film_r_bottom">
					<?php 
				
				$i = 0;
				$arr = [$id];
				if(isset($genres)){
					for($m = 0;$m<count($genres);$m++){
						if(gettype($genres)=="array" && array_key_exists($m,$genres)){
							$sql = "SELECT `home_img`,`name`,`id` FROM `kinoner` WHERE `genres` LIKE '%$genres[$m]%'  ORDER BY `id` DESC";
							$data = mysqli_query($db,$sql);
							while($r = mysqli_fetch_assoc($data)){
								$bool = true;
								if($i<12){
									for($j = 0;$j<count($arr);$j++){
										if($arr[$j]==$r['id']){
											$bool = false;
										}
									}
									if($bool){
										$arr[]=$r["id"];
										$i++;
										?>
										<div class="qh">
											<div class="right_img"  onmouseover="a2(<?php echo $i-1?>)" onmouseout="b2(<?php echo $i-1?>)">
												<img class="right_imgs" src="<?php echo $r['home_img']; ?>">
												<a href="film.php?id=<?php echo $r['id']; ?>">
													<img class="right_play" src="nkarner/play.png">
												</a>
											</div>
											<a href="film.php?id=<?php echo $r["id"];?>">
												<p><?php echo $r['name'] ?></p>
											</a>
										</div>
										
										<?php 
									}
								}
							}
						}
					}
				}
				$sql = "SELECT `home_img`,`name`,`id` FROM `kinoner` ORDER BY `id` DESC";
				$data = mysqli_query($db,$sql);
				while($i<14){
					$r = mysqli_fetch_assoc($data);
					$bool = true;
					for($j = 0;$j<count($arr);$j++){
						if($arr[$j]==$r['id']){
							$bool = false;
						}
					}
					if($bool){
						$i++;
						?>
						<div class="qh">
							<div class="right_img"  onmouseover="a2(<?php echo $i-1?>)" onmouseout="b2(<?php echo $i-1?>)">
								<img class="right_imgs" src="<?php echo $r['home_img']; ?>">
								<a href="film.php?id=<?php echo $r['id']; ?>">
									<img class="right_play" src="nkarner/play.png">
								</a>
							</div>
							<a href="film.php?id=<?php echo $r["id"];?>">
								<p><?php echo $r['name'] ?></p>
							</a>
						</div>
						<?php 
					}
				}
				?>
				</div>
			</div>
			<div id="cb"></div>
		</div>