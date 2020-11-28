<?php
include "tpl/header.php";
include "tpl/connect.php";

$i = 0;
$f = 0;
$filmCount = 6;
if(isset($_GET['page'])){
	$page = $_GET['page'];
}
else{
	$page=1;
}
$sql1 = "SELECT COUNT(`id`) FROM `kinoner`";
$conCount = mysqli_fetch_assoc(mysqli_query($db,$sql1))["COUNT(`id`)"];
$sql = "SELECT * FROM `kinoner` WHERE `id` >=$page*$filmCount-$filmCount";
$conn = mysqli_query($db, $sql);

?>
	<div class="container1">
		<div class="index_left">
            <div class="img404">
            
            </div>
		</div>
<?php include "tpl/right.php" ;?>
<?php include "tpl/footer.php"?>