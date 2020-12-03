<?php 
   include "tpl/header.php";
   $id = $_GET["id"];
   $kino = new Kino($id);
   $getData1 = $kino->getData1();
   
   ?>
<div class="container1">
	<div class="film_art">
		<div class="film_left">
   
		<?php if(isset($getData1)){ ?>	

			<div class="film_content">
				<div class="film_home_img">
					<img src="<?php echo $kino->home_img; ?>" alt="">
				</div>
				<div class="film_table">
					<h1><?php echo $kino->name; ?></h1>
					<table>
					<?php 
						$arr = [$kino->desc1,$kino->desc2,$kino->desc3,$kino->desc4];
						for($i=0;$i<4;$i++){
							$descArr = explode(":",$arr[$i]);
							if($descArr[1]){?>
					<tr>
						<th><?php echo $descArr[0]; ?></th>
						<td> : <?php echo $descArr[1]; ?></td>
					</tr>
					<?php }
						} ?>
					<tr>
						<th>Status </th>
						<td>: <?php echo $kino->status; ?></td>
					</tr>
					<tr>
						<th>Time </th>
						<td>: <?php echo $kino->time; ?></td>
					</tr>
					<tr>
						<th>Budget </th>
						<td>: <?php echo $kino->budget; ?></td>
					</tr>
					<tr>
						<th>Revenue </th>
						<td>: <?php echo $kino->revenue; ?></td>
					</tr>
					<tr>
						<th>Year </th>
						<td>:
						<?php 
						if(isset(explode(" ",$kino->relase)[1])){
							$y = explode(" ",$kino->relase);
							if(isset(explode(",",$kino->relase)[1])){
								$y[] = $kino->relase[1];
							}
						
						} 
						echo $y[0]." ".$y[1].$y[2] ; ?></td>
					</tr>
					<tr>
						<th>Language </th>
						<td>: <?php echo $kino->lang; ?></td>
					</tr>
					<tr>
						<th>Genres </th>
						<td>: <?php 
							$genres = explode(",",$kino->genres);
							for($i = 0;$i<count($genres);$i++){
								?>
							<a href="genre.php?genre=<?php echo($genres[$i]); ?>"><?php echo($genres[$i]);
								if($i != count($genres)-1) echo ",";
								?></a>
							<?php 
								}
								
								?>
						</td>
					</tr>
					<tr>
						<th>By </th>
						<td>: <?php echo $kino->from; ?> </td>
					</tr>
					</table>
				</div>
				<div class="film_desc">
					<p><?php echo $kino->desc ?></p>
				</div>
				<div class="film_trailer">
					<?php echo $kino->trailer; ?>
				</div>
			</div>
			<div class="film_glavn">
				<h1>Top Billed Cast</h1>
				<?php $glavnArr = [$kino->glavnin0,$kino->glavnin1,$kino->glavnin2,$kino->glavnin3,$kino->glavnin4] ?>
				<?php $glavnArr1 = [$kino->glavni0,$kino->glavni1,$kino->glavni2,$kino->glavni3,$kino->glavni4] ?>
				<?php 
					for($i = 0;$i<count($glavnArr);$i++){
						?>
				<div id = "<?php if($i == count($glavnArr)-1) echo "film_glavn_last"; ?>">
					<img src="<?php echo $glavnArr[$i]?>" alt="">
					<p><?php echo $glavnArr1[$i] ?></p>
				</div>
				<?php 
					} ?>
			</div>
			<div class="player" >
				  <img class="mySlides" src="<?php echo $kino->nkar1 ?>" width = "100%" height="500px">
				  <img class="mySlides" src="<?php echo $kino->nkar2 ?>" width = "100%" height="500px">
				  <img class="mySlides" src="<?php echo $kino->nkar3 ?>" width = "100%" height="500px">
				  <img class="mySlides" src="<?php echo $kino->nkar4 ?>" width = "100%" height="500px">
				  <img class="mySlides" src="<?php echo $kino->nkar5 ?>" width = "100%" height="500px">
				  <img class="mySlides" src="<?php echo $kino->nkar6 ?>" width = "100%" height="500px">
				  <img class="mySlides" src="<?php echo $kino->nkar7 ?>" width = "100%" height="500px">
				  <img class="mySlides" src="<?php echo $kino->nkar8 ?>" width = "100%" height="500px">
				  <img class="mySlides" src="<?php echo $kino->nkar9 ?>" width = "100%" height="500px">
				  <img class="mySlides" src="<?php echo $kino->nkar10 ?>" width = "100%" height="500px">
			</div>
				<script type="text/javascript">
					var myIndex = 0;
					carousel();
					function carousel() {
					  var i;
					  var x = document.getElementsByClassName("mySlides");
					  for (i = 0; i < x.length; i++) {
					    x[i].style.display = "none";  
					  }
					  console.log(1)
					  myIndex++;
					  if (myIndex > x.length) {myIndex = 1}    
					  x[myIndex-1].style.display = "block";  
					  setTimeout(carousel, 2000); 
					}
				</script>
			<?php include "tpl/comments.php" ;
				}else{
					echo "<h2 class='nof'>No film selected</h2>";
				}?>
		</div>
		<?php
			include "tpl/right.php" ;?>
	</div>
	<?php include "tpl/footer.php";?>