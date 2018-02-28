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
					include "tpl/connect.php";
	
					$sql = "SELECT * FROM `kinoner`";
					$conn = mysqli_query($db,$sql);
					$i = 0;
					while(++$i<10){
						$result = mysqli_fetch_assoc($conn) ;
						$id = $result["id"];
						$home_img = $result["home_img"];
					?>
					<a href="film.php?id=<?php echo $id; ?>">
						<img class="verjin_filmer_img" src="<?php echo $home_img; ?>">
					</a>
					<?php } ?>
				</div>
			</div>
