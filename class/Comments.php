<?php 

class Comments{
private $db;
	public function __construct(){
		$this->db = dbConnect();
	}

	public function getComent($id){
		$sql = "SELECT * FROM `comments` WHERE `filmId` =$id ";
		$arr = [];
		 $conn =mysqli_query($this->db,$sql);
		 while ($r = mysqli_fetch_array($conn)) {
		 	$arr[] = $r;
		 }
		 return $arr;
	}

	public function addComment($email,$id,$comment_content){
		$date = date("Y-m-d G:i:s");
		$query = "INSERT INTO `comments`( `name`, `filmId`, `comment`, `date`) VALUES ('$email',$id,'$comment_content','$date')";
		mysqli_query($this->db,$query);
	}

	
}



 ?>