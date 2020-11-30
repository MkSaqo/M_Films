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
		<?php $a = (isset($_SESSION['login'])) ? $_SESSION['name'] : 'Guest';?>
				<h1 class ='hello'>Welcom <?php echo $a?></h1>
			
		<div id="vid-div">
			<video id="_vidElement" class="video_all_screen" muted loop src="nkarner/best.mp4" type="video/mp4"></video>
			<a href="#section02">
				<div  class="header2-logo animate__animated animate__flash">
					<img src="nkarner/logo.jpg" alt="">
					<p>Welcome to our virtual cinema M_Films.</p>
					<section class="demo"><b>&darr;</b></section>
				</div>
			</a>
		</div>

		<script type="text/javascript">
			var vid = document.getElementById('_vidElement');
			$(document).ready(function(){
				if (vid.paused)vid.play();				
			});	
			$(function() {
			    $('a[href*=\\#]').on('click', function(e) {
			        e.preventDefault();
		    		$('html, body').animate({ scrollTop: $($(this).attr('href')).offset().top}, 800);
		    	});
			});
		</script>		
		<div id="section02" class="site header_2_bodyStart">
			
		  