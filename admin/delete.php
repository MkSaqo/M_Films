<?php 

	if(isset($_GET['action']) && $_GET['action'] == "remove"){
		$id = $_GET["id"];
		$sql = "DELETE FROM `kinoner` WHERE `id` = $id ";
		$conn = mysqli_query($db,$sql);
	}

?>