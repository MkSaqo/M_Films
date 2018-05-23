<?php 
include "functions.php";
include "tpl/connect.php";

?>
<!DOCTYPE html>
<html class="html_filmer1">
	<head>
		<link rel="stylesheet" type="text/css" href="style.css">
		<link rel="icon" href="nkarner/logo.jpg">
		<meta charset="utf-8">
		<title>M_Films</title>
	</head>
	<body>
		<!-- ________________________SITE___________________________ -->
		<div class="site">
			<!-- ________________________HEADER_________________________ -->
			<div class="header">
				<div class="verjin_filmer">
					<?php
	
					$sql = "SELECT * FROM `kinoner`";
					$conn = mysqli_query($db,$sql);
					$i = 0;
					while(++$i<8){
						$result = mysqli_fetch_assoc($conn) ;
						$id = $result["id"];
						$home_img = $result["home_img"];
						?>
					<div class="header_img"  onmouseover="a1(<?php echo $i-1?>)" onmouseout="b1(<?php echo $i-1?>)">
						<img class="verjin_filmer_img" src="<?php echo $home_img; ?>">
						<a href="film.php?id=<?php echo $id; ?>">
							<img class="header_play" src="nkarner/play.png">
						</a>
					</div>
					<?php } ?>
				</div>
				<div class="logo">
					<a href="home.php"><img src="nkarner/logo.jpg" alt=""></a>
				</div>
			</div>
			
