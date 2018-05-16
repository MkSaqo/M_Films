<?php
include "tpl/new.php";
include "tpl/connect.php";
$a = $_GET["id"];
$sql = "SELECT * FROM `kinoner` WHERE `id` = $a ";
$conn = mysqli_query($db, $sql);
$result = mysqli_fetch_assoc($conn);
include "tpl/var_data.php";
?>
	<div class="container">
		<div class="film_art">
			<div class="film_left">
				<div class="film_content">
					<div class="film_home_img">
						<img src="<?php echo $home_img; ?>" alt="">
					</div>
					<div class="film_table">
						<h1><?php echo $name; ?></h1>
						<table>
								<?php 
						$arr = [$desc1,$desc2,$desc3,$desc4];
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
								<td>: <?php echo $status; ?></td>
							</tr>
							<tr> 
								<th>Time </th>
								<td>: <?php echo $time; ?></td>
							</tr>
							<tr> 
								<th>Budget </th>
								<td>: <?php echo $budget; ?></td>
							</tr>
							<tr> 
								<th>Revenue </th>
								<td>: <?php echo $revenue; ?></td>
							</tr>
							<tr> 
								<th>Language </th>
								<td>: <?php echo $lang; ?></td>
							</tr>
							<tr> 
								<th>Genres </th>
								<td>: <?php 
								$genres = explode(",",$genres);
								for($i = 0;$i<count($genres);$i++){
									?>
									<a href="genre.php?genre=<?php echo($genres[$i]); ?>"><?php echo($genres[$i]);
									if($i != count($genres)-1) echo ",";
									?></a>
									<?php 
								}
								
								?></td>
							</tr>
						</table>	
					</div>
					<div class="film_trailer">
						<iframe src="<?php echo $trailer; ?>" frameborder="0"></iframe>
						
					</div>
				</div>
				<div class="film_glavn">
					<?php $glavnArr = [$glavnin0,$glavnin1,$glavnin2,$glavnin3,$glavnin4] ?>
					<?php $glavnArr1 = [$glavni0,$glavni1,$glavni2,$glavni3,$glavni4] ?>
					<?php 
					for($i = 0;$i<count($glavnArr);$i++){
						?>
						<div id = "<?php if($i == count($glavnArr)-1) echo "film_glavn_last"; ?>">
							<img src="<?php echo $glavnArr[$i]?>" alt="">
							<p><?php echo $glavnArr1[$i] ?></p>
							
						</div>
						<?php 
					} ?>
					<p><?php echo $glavnin0; ?></p>
				</div>
			</div>
			<div class="film_right"></div>
		</div>
	</div>


<?php include "tpl/footer.php";?>
