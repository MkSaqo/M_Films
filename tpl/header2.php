<?php 
include "functions.php";
include "tpl/connect.php";
$s = "SELECT * FROM `info` WHERE `info_category` = 'video'";
$video = mysqli_query($db,$s);
$vid = mysqli_fetch_all($video,MYSQLI_ASSOC);
$sql = "SELECT * FROM `kinoner` ORDER BY `id` DESC ";
$conn = mysqli_query($db,$sql);
$i = 0;
while(++$i<8){
	$result = mysqli_fetch_assoc($conn) ;
	$id = $result["id"];
	$home_img = $result["home_img"];
}
?>
<!DOCTYPE html>
<html class="html_filmer1">
	<head>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  		
		<link rel="stylesheet" type="text/css" href="style.css">
		<link rel="icon" href="nkarner/logo.jpg">
		<meta charset="utf-8">
		<title>M_Films</title>
	</head>
	<body>
		<div id="vid-div">
			<video id="_vidElement" class="video_all_screen" muted loop src="nkarner/best.mp4" type="video/mp4"></video>
			<!-- <div class="aaaaa"></div> -->
			<div class="header2-logo">
				  <a href="#section02">
				<img src="nkarner/logo.jpg" alt="">
				<p>Welcome to our virtual cinema M_Films.</p>
				<section id="section01" class="demo">
				  &darr;
				</section>
				</a>
			</div>
		</div>
		<script type="text/javascript">
			var vid = document.getElementById('_vidElement');
			// var vid_div = document.getElementById('vid-div');
			// vid_div.style.height = screen.height-1000;
			$(document).ready(function(){
				if (vid.paused)
        			vid.play();				
			});	
			$(function() {
			    $('a[href*=\\#]').on('click', function(e) {
			        e.preventDefault();
		    		$('html, body').animate({ scrollTop: $($(this).attr('href')).offset().top}, 800);
		    	});
			});
		</script>		
		<div id="section02" class="site header_2_bodyStart">
			
		  