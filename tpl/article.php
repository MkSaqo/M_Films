 	<?php 
	if($i%2==0)$anim = "left";
	else $anim = "right";
	
	?>
<article  data-aos="fade-<?php echo $anim ?>"     data-aos-duration="1500" class="art_spisk">
	<div class="index_s_l"  onmouseover="a(<?php echo $f ?>,'play','home',true)" 
							onmouseout="a(<?php echo $f ?>,'play','home',false)">
		<a href="film.php?id=<?php echo $kino->id;?>">
			<img class="play" src="nkarner/play.png" alt="">
			<img  class="home" src="<?php echo $kino->home_img ?>" alt="">
		</a>
		
	</div>
	
	<div  class="index_s_r">
		<a href="film.php?id=<?php echo $kino->id; ?>"><h2 class="animate__animated "><?php echo $kino->name; ?></h2></a>
		<div  class="index_s_r_1">
		<?php
		// $o++;
		$arr = [$kino->desc1,$kino->desc2,$kino->desc3,$kino->desc4];
		for($m=0;$m<4;$m++){
			$descArr = explode(":",$arr[$m]);
			if($descArr[1]){?>
			
				<p><b><?php echo $descArr[0]."</b> : ". $descArr[1]; ?></p>
				<?php }
		} 
		$genres = explode(",",$kino->genres);
		?>
		<p><b>Genres : </b> <?php
		for($m = 0;$m<count($genres);$m++){
		?>
			<a href="cat.php?G=<?php echo $genres[$m]; ?>"><?php echo($genres[$m]);
			if($m != count($genres)-1) echo ",";
			?></a>
	
	<?php 
		}?>
		</p>
			
		</div>
		<div class="index_s_r_2">
		<?php if(isset(explode(" ",$kino->relase)[2])) $year = explode(" ",$kino->relase)[2];
			else $year = explode(",",$kino->relase)[1];?>
			<p><b>Status </b> : <?php echo $kino->status; ?></p> 
			<p><b>Time </b> : <?php echo $kino->time; ?></p> 
			<p><b>Budget </b> : <?php echo $kino->budget; ?></p> 
			<p><b>Revenue </b> : <?php echo $kino->revenue; ?></p> 
			<p><b>Year</b> : <a href="cat.php?Y=<?php echo $year;?>"><?php echo $year; ?></p></a>
		</div>
		<div class="index_desc">
			<p><b>Description : </b><?php echo substr($kino->desc,0,200); ?><a href="film.php?id=<?php echo $kino->id;?>">.....</a>
		
		</p>
	</div>
	</div>
	<a  id="watch" href="film.php?id=<?php echo $kino->id;?>"><div class="watch animate__animated">Watch Now</div></a>
</article>
