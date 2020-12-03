<div class="right">
	<div class="r_search">
		<form action="search.php" method="get">
			<input class="search"
			<?php if(isset($_GET['q'])){?>
				value="<?php echo $_GET['q']?>"
			<?php } ?>
			type="text" id="search" name="q" placeholder="Search"/>
			<input class="submit" type="submit" value="Search" />
		</form>
	</div>
	<div class="film_r_top">
		<div class="film_r_cat1">
			<ul>
				<?php 
				for($year=date("Y");$year>=2000;$year--){
					$l =Kino::getCountYear($db,"relase",$year);?>
					<a href="cat.php?Y=<?php echo $year?>"><li><?php echo $year; ?></a>  
					<a href="cat.php?Y=<?php echo $year?>"><span>(<?php echo $l; ?>)</span></li></a>  
				<?php } ?>
			</ul>
		</div>
		<div class="film_r_cat2">
			<?php 
			$genres1 = ["Adventure", "Comedy", "Crime", "Drama", "Fantasy", "Historical", "Historical fiction", "Horror", "Magical realism", "Mystery", "Paranoid Fiction", "Philosophical", "Political", "Romance", "Saga", "Satire", "Science Fiction", "Slice of Life", "Social", "Speculative", "Thriller", "Urban", "Western"]
			?>
			<ul>
				<?php for($genre=0;$genre<count($genres1);$genre++){
					$l =Kino::getCountYear($db,"genres",$genres1[$genre]);


					?>
					<a href="cat.php?G=<?php echo $genres1[$genre] ?>"><li><?php echo $genres1[$genre]; ?></a> 
					<a href="cat.php?G=<?php echo $genres1[$genre] ?>"><span> (<?php echo $l; ?>)</span></li></a>
					<?php 
				} ?>
			</ul>
		</div>

	</div>
	<div class="film_r_bottom">
		<?php 
	$i=0;
	$arr = [$kino->id];
	if(isset($genres)){
		for($m = 0;$m<count($genres);$m++){
			if(gettype($genres)=="array" && array_key_exists($m,$genres)){
				$result=Kino::getMiniFilms($db,$genres[$m]);
				for ($i; $i <count($result) ; $i++) { 
					$kino = new Kino($result[$i]);
					$bool = true;
					if($i<12){
						for($j = 0;$j<count($arr);$j++){
							if($arr[$j]==$kino->id){
								$bool = false;
							}
						}
						if($bool){
							$arr[]=$kino->id;
							?>
							<div data-aos="zoom-in-down" class="qh">
								<div class="right_img"  onmouseover="a(<?php echo $j-1?>,'right_play','right_imgs',true)" 
														onmouseout="a(<?php echo $j-1?>,'right_play','right_imgs',false)">

									<a href="film.php?id=<?php echo $kino->id; ?>">
									<img class="right_imgs" src="<?php echo $kino->home_img; ?>">
										<img class="right_play" src="nkarner/play.png">
									</a>
								</div>
								<a href="film.php?id=<?php echo $kino->id ;?>">
									<p><?php echo $kino->name; ?></p>
								</a>
							</div>
							<?php 
						}
					}
				}
			}
		}
	}
	while($i<15){
		$kino = new Kino($i);
		$bool = true;
		for($j = 0;$j<count($arr);$j++){
			if($arr[$j]==$kino->id){
				$bool = false;
			}
		}
		if($bool){
			?>
			<div data-aos="zoom-in-down" class="qh">
				<div class="right_img"  onmouseover="a(<?php echo $j-1?>,'right_play','right_imgs',true)" 
										onmouseout="a(<?php echo $j-1?>,'right_play','right_imgs',false)">
					<a href="film.php?id=<?php echo $kino->id ?>">
					    <img class="right_imgs" src="<?php echo $kino->home_img; ?>">
						<img class="right_play" src="nkarner/play.png">
					</a>
				</div>
				<a href="film.php?id=<?php echo $kino->id ?>">
					<p><?php echo $kino->name; ?></p>
				</a>
			</div>
			<?php 
		}
			$i++;
	}
	?>
		</div>
	</div>
	<div id="cb"></div>
</div>