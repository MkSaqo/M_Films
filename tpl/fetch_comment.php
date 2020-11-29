<?php
include "functions.php";
require "../class/Comments.php";
$db = new Connection();
$db =$db->connect();

$id = $_SESSION['comm_id'];
$res = new Comments();
$r = $res->getComent($db,$id);
for ($i=0; $i <count($r) ; $i++) { 
 
?>
    <div class="panel panel-default">
        <div class="panel-heading">By <b><?php echo $r[$i]['name']?></b> on <i><?php echo $r[$i]['date']?></i></div>
        <div class="panel-body"><?php echo $r[$i]['comment']?></div>
    </div>
<?php 
}
 ?>
