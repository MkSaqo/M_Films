<?php
include "connect.php";
include "functions.php";
$id = $_SESSION['comm_id'];
$sql = "SELECT `comments` FROM `kinoner` WHERE `id` =$id ";
$r = mysqli_fetch_assoc(mysqli_query($db,$sql));
?>
<?php 
$allComent = explode("___com___",$r["comments"]);
for($i=count($allComent)-1;$i>0;$i--){
    $data = explode("___name___",$allComent[$i]);
    $data1 = explode("___date___",$data[1]);
    ?>
    <div class="panel panel-default">
        <div class="panel-heading">By <b><?php echo $data1[0]?></b> on <i><?php echo $data1[1]?></i></div>
        <div class="panel-body"><?php echo $data[0]?></div>
    </div>
<?php 
}
 ?>