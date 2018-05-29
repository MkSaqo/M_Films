<?php
include "connect.php";
session_start();

if(!empty($_POST["comment_content"])){
    $email = $_SESSION["login"];
    $id = $_SESSION["comm_id"];
    $comment_content = $_POST["comment_content"];
}
else $error = '<p>error</p>';

if($error == ''){
$date = date("Y-m-d G:i:s");
 $query = "UPDATE `kinoner`
 SET
 `comments` = CONCAT(`comments`,'___com___$comment_content ___name___$email ___date___$date') 
WHERE `id` =$id ";
mysqli_query($db,$query);
 $error = '<label class="text-success">Comment Added</label>';
}
echo json_encode(["error"=> $error]);


?>