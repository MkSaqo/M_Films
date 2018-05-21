<?php
include "new.php";
include "connect.php";
$i = 0;
$f = 0;
$filmCount = 7;
if(isset($_GET['q'])){
	$q = $_GET['q'];
}
$sql = "SELECT * FROM `kinoner` 
WHERE (`name` LIKE '%".$q."%') OR (`desc` LIKE '%".$q."%')OR (`desc1` LIKE '%".$q."%')OR (`desc2` LIKE '%".$q."%')
OR (`desc3` LIKE '%".$q."%')OR (`desc4` LIKE '%".$q."%')OR (`status` LIKE '%".$q."%')OR (`time` LIKE '%".$q."%')
OR (`budget` LIKE '%".$q."%')OR (`revenue` LIKE '%".$q."%')OR (`genres` LIKE '%".$q."%')OR (`lang` LIKE '%".$q."%')";
$conn = mysqli_query($db,$sql);
$sql1 = "SELECT COUNT(*) FROM `kinoner` WHERE (`name` LIKE '%".$q."%') OR (`desc` LIKE '%".$q."%')OR (`desc1` LIKE '%".$q."%')OR (`desc2` LIKE '%".$q."%')
OR (`desc3` LIKE '%".$q."%')OR (`desc4` LIKE '%".$q."%')OR (`status` LIKE '%".$q."%')OR (`time` LIKE '%".$q."%')
OR (`budget` LIKE '%".$q."%')OR (`revenue` LIKE '%".$q."%')OR (`genres` LIKE '%".$q."%')OR (`lang` LIKE '%".$q."%')";;
$conCount = mysqli_fetch_assoc(mysqli_query($db,$sql1))["COUNT(*)"];


?>

	<div class="container">
		<div class="search">
		
		<?php
		if(strlen($q)>2){
			$bool=false;
			while ($f++ < $filmCount) {	
				if($result = mysqli_fetch_assoc($conn)){
					$bool = true;
					include "var_data.php";
					?>
					<article>
						<div class="index_s_l"  onmouseover="a(<?php echo $f-1?>)" onmouseout="b(<?php echo $f-1?>)">
							<a href=film.php?id="<?php echo $id;?>">
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
							} ?>

								
							</div>
							<div class="index_s_r_2">
								<p><b>Status </b> : <?php echo $status; ?></p> 
								<p><b>Time </b> : <?php echo $time; ?></p> 
								<p><b>Budget </b> : <?php echo $budget; ?></p> 
								<p><b>Revenue </b> : <?php echo $revenue; ?></p> 
								<p><b>Language </b> : <?php echo $lang; ?></p>
							</div>
							<div class="index_desc">
								<p><b>Description : </b><?php echo substr($desc,0,200); ?><a href="film.php?id=<?php echo $id;?>">.....</a>
							
							</p>
						</div>
						<div class="watch">Watch Now</div>

						</div>
					</article>

				<?php }
			else if($bool){
				break;
			}else{
				?>
				<h2>No result for <?php echo $q;break; ?></h2>
				<?php 
			}
			}
		?>
			
		<div class="pages">
				<p><?php
				for($i = 1;$i<=ceil($conCount/$filmCount);$i++){?>	
					<a href="?page=<?php echo $i;?>"><span><?php echo $i; ?></span></a>
				<?php }?>
				</p>
			</div>
		<?php }
		else{
			?>
			<h2>Minimum length is 3 </h2>
			<?php 
		}
		?>
		</div>
	<?php include "right.php" ;?>
	
<?php include "footer.php"?>