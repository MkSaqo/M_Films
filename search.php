<?php
include "new.php";
include "connect.php";

$sql = "SELECT * FROM `kinoner`";
$conn = mysqli_query($db, $sql);
$i = 0;
?>
	<div class="container">
		<div class="index_left">

			
		</div>
		<?php include "right.php" ;?>
	
<?php include "footer.php"?>