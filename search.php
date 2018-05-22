<?php
include "new.php";
include "connect.php";
$i = 0;
$f = 0;
$filmCount = 6;
if(isset($_GET['q'])){
	$q = $_GET['q'];
}
if(isset($_GET['page'])){
    $page = $_GET['page'];
    $limit1=$page*$filmCount-$filmCount;
	$limit2=$page*$filmCount;
}
else{
	$limit1 = 0;
	$limit2 = $filmCount;
}

$sql = "SELECT * FROM `kinoner` 
WHERE (`name` LIKE '%".$q."%') OR (`desc` LIKE '%".$q."%')OR (`desc1` LIKE '%".$q."%')OR (`desc2` LIKE '%".$q."%')
OR (`desc3` LIKE '%".$q."%')OR (`desc4` LIKE '%".$q."%')OR (`status` LIKE '%".$q."%')OR (`time` LIKE '%".$q."%')
OR (`budget` LIKE '%".$q."%')OR (`revenue` LIKE '%".$q."%')OR
 (`genres` LIKE '%".$q."%')OR (`lang` LIKE '%".$q."%')  LIMIT $limit1,$limit2";

$conn = mysqli_query($db,$sql);
$sql1 = "SELECT COUNT(*) FROM `kinoner` WHERE (`name` LIKE '%".$q."%') OR (`desc` LIKE '%".$q."%')OR (`desc1` LIKE '%".$q."%')OR (`desc2` LIKE '%".$q."%')
OR (`desc3` LIKE '%".$q."%')OR (`desc4` LIKE '%".$q."%')OR (`status` LIKE '%".$q."%')OR (`time` LIKE '%".$q."%')
OR (`budget` LIKE '%".$q."%')OR (`revenue` LIKE '%".$q."%')OR (`genres` LIKE '%".$q."%')OR (`lang` LIKE '%".$q."%')";;
$conCount = mysqli_fetch_assoc(mysqli_query($db,$sql1))["COUNT(*)"];
?>

	<div class="container">
		<div class="search">
		<?php
		if(strlen($q)>2){
			$bool=false;
			while ($f++ < $filmCount) {	
				if($result = mysqli_fetch_assoc($conn)){
					$bool = true;
					include "var_data.php";
					include "article.php";
					?>
					
				<?php }
			else if($bool){
				break;
			}else{
				?>
				<h2>No result for <?php echo $q;break; ?></h2>
				<?php }}?>
			
		<div class="pages">
			<p><?php
			for($i = 1;$i<=ceil($conCount/$filmCount);$i++){?>	
				<a href="?q=<?php echo $q;?>&page=<?php echo $i;?>"><span><?php echo $i; ?></span></a>
			<?php }?>
			</p>
		</div>
		<?php }else{?>
			<h2>Minimum length is 3 </h2>
		<?php }?>
		</div>
		
<?php include "right.php" ;?>
<?php include "footer.php"?>