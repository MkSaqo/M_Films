<?php
include "new.php";
include "connect.php";

$i = 0;
$f = 0;
$filmCount = 7;
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

	<div class="container">
		<div class="index_left">
			<?php
		while ($f++ < $filmCount) {	
			if($result = mysqli_fetch_assoc($conn)){
				include "var_data.php";
				include "article.php";
				?>
				

			<?php }}?>
			
			<div class="pages">
				<p><?php
				for($i = 1;$i<=ceil($conCount/$filmCount);$i++){?>	
					<a href="?page=<?php echo $i;?>"><span><?php echo $i; ?></span></a>
				<?php }?>
				</p>
			</div>
		</div>
		<?php include "right.php" ;?>
	
<?php include "footer.php"?>