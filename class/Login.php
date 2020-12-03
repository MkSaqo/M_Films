<?php 
class Login {
	private $fname,$lname,$email,$pass,$db;

	public function getName(){
		return $this->fname." ".$this->lname;
	}
	public function getLogin($email,$pass){
		$this->db = dbConnect();
        $sql = "SELECT * FROM `users` WHERE `email` = '$email' and `pass` = '$pass'";
        $conn = mysqli_query($this->db, $sql);
        $r = mysqli_fetch_assoc($conn);
        $this->fname = $r['fname'];
        $this->lname = $r['lname'];
        return $r;
	}

}


 

 ?>