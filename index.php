<?php
include "new.php";
include "connect.php";

$sql = "SELECT * FROM `kinoner`";
$conn = mysqli_query($db, $sql);
$i = 0;
?>
	<div class="container">
		<div class="index_left">

			<?php
			$i = 0;
		while ($i++ < 1) {	
			$r = mysqli_fetch_assoc($conn);
			include "var_data.php";
			?>
				<article>
					<div class="index_s_l">
						<img src="<?php echo $home_img ?>" alt="">
					</div>
					<div class="index_s_r">
						<h2><?php echo $name; ?></h2>
					</div>
				</article>
		
				<?php }?>
		</div>
		<?php include "right.php" ;?>
	
<?php include "footer.php"?>