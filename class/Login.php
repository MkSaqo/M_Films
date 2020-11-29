<?php 
require_once 'Connection.php';
class Login extends Connection{
	private $fname,$lname,$email,$yesr,$mouth,$day,$img,$about,$pass;

	public function getName(){
		return $this->fname.$this->lname;
	}
	public function getLogin($db,$email,$pass){

        $sql = "SELECT * FROM `users` WHERE `email` = '$email' and `pass` = '$pass'";
        $r = mysqli_fetch_assoc(mysqli_query($db, $sql));
        $this->fname = $r->fname;
        $this->lname = $r->lname;
        return $r;
	}

}




 ?>