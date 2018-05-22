<?php

include "new.php";
include "connect.php";
$month = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
$dateY = date("Y");
if (isset($_POST['login'])) {
    $email = $_POST['Rmail'];
    $pass = $_POST['Lpass'];
    $sql = "SELECT * FROM `users` WHERE `email` = '$email' and `pass` = '$pass'";
    pre($sql);
    $r = mysqli_fetch_assoc(mysqli_query($db, $sql));
    if ($r) {
        $_SESSION['login'] = $r["email"];
    }
    
}
if (isset($_SESSION["login"])) {
    header("Location: home.php");
}
if (isset($_GET['logouted'])) {
    session_destroy();
}
if(isset($_POST["end"])){
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
    $rmail = $_COOKIE["rmail"];
    $rpass = $_COOKIE["pass"];
    $sql =  "INSERT INTO `users`(`fname`, `lname`, `year`, `mouth`, `day`, `films`, `img`,
     `gender`, `email`, `phone`, `about`, `pass`) 
     VALUES ('$rfname','$rlname','$ryear','$rmounth','$rday','','$rimage','$rmale',
     '$rmail','$rphone','$rabout','$rpass')";

    $subject = "end register";
    $message = "sucsesful registered";
    $headers = 'From: M_films@gmail.com';
    mail($rmail,$subject,$message,$headers);
    mysqli_query($db,$sql);
    $_POST = [];
    $_COOKIE = [];
    ?>
        <h1>EEEEENNNNDDD</h1>
    <?php
}


if (isset($_POST['login2'])){
    if($_POST['code'] && $_POST['code']==$_COOKIE['code']){
        $_POST = [];
        $_POST["login3"]="Submit";
        
    }
    else{
        ?>
    <form class="black" method="post">
        <input type="number" name="code" >
        <input type="submit" name="login2" >
    </form>
        <?php 
    }
}
if(isset($_POST["login1"])){
    $rmail = $_POST['email'];
    $subject = "Code verification";
    $message = rand(1000,9999);
    $headers = 'From: sargis.mkrtchyan1.y@tumo.org';
    mail($rmail,$subject,$message,$headers);
    setcookie("rmail",$rmail);
    setcookie("pass",$_POST['pass']);
    setcookie("code",$message);
    ?>
    <form class="black" method="post">
        <input type="number" name="code" >
        <input type="submit" name="login2" >
    </form>
<?php 
}

?>

<div class="container">
   <div class="cen">
        <div class="Ldiv">
            <form action="" method="post">
                <input type="text" name="Rmail" id="lname"><br>
                <input type="password" name="Lpass" id="lpass">
                <input type="submit" name="login" id="lsubmit" value="Log In">
            </form>
        </div>
        <?php include "reg_form.php" ;?>
        
   </div>
</div>
<?php
include "footer.php";
?>