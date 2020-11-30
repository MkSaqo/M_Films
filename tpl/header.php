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
		<link rel="stylesheet" type="text/css" href="styles/style.css">
		<link rel="icon" href="nkarner/logo.jpg">
		<meta charset="utf-8">
		<title>M_Films</title>
	</head>
	<body>
		<div class="site">
			<div class="header">
				<div class="verjin_filmer">
					<?php
					$i = 0;
					while($i<7){
						$kino = new Kino($i,$db);
							?>
						<div class="header_img"  onmouseover="a(<?php echo $i?>,'header_play','verjin_filmer_img',true)" 
													onmouseout="a(<?php echo $i?>,'header_play','verjin_filmer_img',false)">
						<a href="film.php?id=<?php echo $kino->id; ?>">
						<img class="verjin_filmer_img" src="<?php echo $kino->home_img; ?>">
							<img class="header_play" src="nkarner/play.png">
						</a>
					</div>
					<?php $i++;} ?>
				</div>
				<div class="logo">
					<a href="home.php"><img src="nkarner/logo.jpg" alt=""></a>
				</div>
			</div>
			
