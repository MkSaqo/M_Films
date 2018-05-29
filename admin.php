<?php
include "tpl/header.php";
include "tpl/connect.php";
$link = $_SESSION['link'];
?>

	<div class="container1">
		<div class="index_left">
            <?php 
            if(isset($_SESSION["login"])){
                include "tpl/insert_form.php";

                
            }else{
                header("Location: home.php");
            }
            ?>
		</div>
<?php include "tpl/right.php" ;?>
<?php include "tpl/footer.php"?>