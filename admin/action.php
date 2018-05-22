<?php 
$db = mysqli_connect('localhost','root','root','Filmer');
mysqli_set_charset($db, "utf8");

if(isset($_POST['insert'])){
	$name = $_POST['name'];
	$country = $_POST['country'];
	$genres = $_POST['genres'];
	$date = $_POST['date'];
	$url = $_POST['url'];
	$desc = $_POST['desc'];
	$home_img = "nkarner/" . $_FILES["home_img"]["name"];
	$file_path = "../" . $home_img	;
	move_uploaded_file($_FILES["home_img"]["name"], $file_path);

	echo "<pre>";
	print_r($_FILES['home_img']['name']);
	echo "</pre>";
	

	$sql = "INSERT INTO `kinoner`(`name`, `country`, `genres`, `date`, `desc`, `home_img`, `url`)
		VALUES ('$name','$country','$genres','$date','$desc','$home_img','$url')
	";
	$conn = mysqli_query($db,$sql);
	if($conn){
		echo "Դուք ավելացրել եք  նոր ֆիլմ` <br> $name','$country','$genres','$date','$url','$home_img','$desc";
	}

	else{
		echo "Ինչ որ մի բան այն չէ))):";

	}
}

if(isset($_POST['update'])){
$id = $_POST['id'];
$name = $_POST['name'];
$country = $_POST['country'];
$genres = $_POST['genres'];
$date = $_POST['date'];
$desc = $_POST['desc'];
$home_img = $_POST['home_img'];
$url = $_POST['url'];

$sql = "UPDATE `kinoner`
	SET 
		`name`='$name',
		`country`='$country',
		`genres`='$genres',
		`date`='$date',
		`desc`='$desc',
		`home_img`='$home_img',
		`url`='$url'
	WHERE `id` = $id";

	$r = mysqli_query($db,$sql);
	if($r){
		echo "ok";

	}
	else{
		echo "error";
	}
}
?>