 <?php
include "functions.php";
require "../class/Comments.php";
$error = '';
if(!empty($_POST["comment_content"])){
    $email = $_SESSION["login"];
    $id = $_SESSION["comm_id"];
    $comment_content = $_POST["comment_content"];
}
else $error = '<p>error</p>';

if($error == ''){
	$comm = new Comments();
	$comm->addComment($email,$id,$comment_content);
 $error = '<label class="text-success">Comment Added</label>';
}
echo json_encode(["error"=> $error]);


?>