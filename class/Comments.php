<?php 
require_once 'Connection.php';

class Comments extends Connection{


	public function getComent($db,$id){
		$sql = "SELECT * FROM `comments` WHERE `filmId` =$id ";
		$arr = [];
		 $conn =mysqli_query($db,$sql);
		 while ($r = mysqli_fetch_array($conn)) {
		 	$arr[] = $r;
		 }
		 return $arr;
	}

	public function addComment($db,$email,$id,$comment_content){
		$date = date("Y-m-d G:i:s");
		$query = "INSERT INTO `comments`( `name`, `filmId`, `comment`, `date`) VALUES ('$email',$id,'$comment_content','$date')";
		mysqli_query($db,$query);
	}

	
}



 ?>