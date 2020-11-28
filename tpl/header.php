<?php 
include "functions.php";
include "tpl/connect.php";

?>
<!DOCTYPE html>
<html class="html_filmer1">
	<head>
				<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
		<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
		<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  		
		<link rel="stylesheet" type="text/css" href="style.css">
		<link rel="icon" href="nkarner/logo.jpg">
		<meta charset="utf-8">
		<title>M_Films</title>
	</head>
	<body>
		<div class="site">
			<div class="header">
				<div class="verjin_filmer">
					<?php
	
					$sql = "SELECT * FROM `kinoner` ORDER BY `id` DESC ";
					$conn = mysqli_query($db,$sql);
					$i = 0;
					while(++$i<8){
						$result = mysqli_fetch_assoc($conn) ;
						$id = $result["id"];
						$home_img = $result["home_img"];
						?>
						<div class="header_img"  onmouseover="a(<?php echo $i-1?>,'header_play','verjin_filmer_img',true)" 
													onmouseout="a(<?php echo $i-1?>,'header_play','verjin_filmer_img',false)">
						<a href="film.php?id=<?php echo $id; ?>">
						<img class="verjin_filmer_img" src="<?php echo $home_img; ?>">
							<img class="header_play" src="nkarner/play.png">
						</a>
					</div>
					<?php } ?>
				</div>
				<div class="logo">
					<a href="home.php"><img src="nkarner/logo.jpg" alt=""></a>
				</div>
			</div>
			
