<?php 
class Register {
	private $db;
	public function __construct(){
		$this->db = dbConnect();
	}

	public function sendCode($email){
	    $sql = "SELECT `id` FROM `users` WHERE `email` ='$email' ";
	    $conn = mysqli_query($this->db,$sql);
	    $r = mysqli_fetch_assoc($conn);
	    if($r){
	        echo "<style> .Rdiv span{ display:inline-block;}</style>"; 
	    }
	    else{
	        $subject = "Code verification";
	        $message = rand(1000,9999);
	        $headers = 'CC: sargis.mkrtchyan1.m@gmail.com';
	        mail($email,$subject,$message,$headers);
	        $_SESSION["rmail"] = $email;
	        $_SESSION["code"] = $message;
	        echo '<form class="black" method="post">
		        <input type="number" name="code" >
		        <input type="submit" name="login2"  value="Submit">
		    </form>';
		}
	}
	public function verificationCode(){
		 if($_POST['code'] && $_POST['code']==$_SESSION['code']){
	        $_POST = [];
	        $_POST["login3"]="Submit";
		return false;
		}
		else return true;
	}
	public function finish(){
		$rfname = $_POST["Rfname"];
		$rlname = $_POST["Rlname"];
		$rphone = $_POST["Rphone"];
		$rabout = $_POST["Rabout"] ? $_POST["Rabout"] : "";
		$rmale = $_POST["Rmale"];
		$maleImg = $rmale == "male" ? 2 : 1;
		$rimage = $_POST["Rimage"] ? "nkarner/". $_POST["Rimage"] : "nkarner/noimg". $maleImg .".jpg ";
		$rday = $_POST["Rday"];
		$rmounth = $_POST["Rmounth"];
		$ryear = $_POST["Ryear"];
		$rmail = $_SESSION["rmail"];
		$rpass = $_POST["pass"];
		$sql =  "INSERT INTO `users`(`fname`, `lname`, `year`, `mouth`, `day`, `films`, `img`,
		 `gender`, `email`, `phone`, `about`, `pass`) 
		 VALUES ('$rfname','$rlname','$ryear','$rmounth','$rday','','$rimage','$rmale',
		 '$rmail','$rphone','$rabout','$rpass')";

		$subject = "end register";
		$message = "sucsesful registered";
		$headers = 'From: M_films@gmail.com';
		mail($rmail,$subject,$message,$headers);
		mysqli_query($this->db,$sql);
		$_POST = [];
    	header("Location: tpl/login_check.php?Lmail=$rmail&Lpass=$rpass&login=a");

	}

}


 ?>