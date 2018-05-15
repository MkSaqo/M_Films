<?php

include "tpl/new.php";
include "tpl/connect.php";
$month = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
$dateY = date("Y");
if (isset($_POST['login'])) {
    $email = $_POST['Rmail'];
    $pass = $_POST['Lpass'];
    $sql = "SELECT * FROM `users` WHERE `email` = '$email' and `pass` = '$pass'";
    $r = mysqli_fetch_assoc(mysqli_query($db, $sql));
    if ($r) {
        $_SESSION['login'] = $r["email"];
    }
    
}
if (isset($_SESSION["login"])) {
    header("Location: index.php");
}
if (isset($_GET['logouted'])) {
    session_destroy();
}
if(isset($_POST["Rsend"])){
    $rfname = $_POST["Rfname"];
    $rlname = $_POST["Rlname"];
    $rphone = $_POST["Rphone"];
    $rmale = $_POST["Rmale"];
    $rabout = $_POST["Rabout"] ? $_POST["Rabout"] : "";
    $rday = $_POST["Rday"];
    $ryear = $_POST["Ryear"];
    $rmounth = $_POST["Rmounth"];
    $maleImg = $rmale == "male" ? 2 : 1;
    $rimage = $_POST["Rimage"] ? "nkarner/". $_POST["Rimage"] : "nkarner/noimg". $maleImg .".jpg ";
    $rmail = $_POST["Rmail"];
    $rpass = $_POST["Rpass"];
    $sql =  "INSERT INTO `users`(`fname`, `lname`, `year`, `mouth`, `day`, `films`, `img`,
     `gender`, `email`, `phone`, `about`, `pass`) 
     VALUES ('$rfname','$rlname','$ryear','$rmounth','$rday','','$rimage','$rmale',
     '$rmail','$rphone','$rabout','$rpass')";

    $subject = "parolt asa ay hambal";
    $message = rand(1000,9999);
    $message = "ezi kylox";
    $headers = 'From: Garik.navoyan@varung.com';
    mail($rmail,$subject,$message,$headers);
    
    // mysqli_query($db,$sql);
}
if (isset($_POST['login2'])){
    if($_POST['code']==$_POST['code1']){

    }
    else{
        ?>
    <form class="black" method="post">
        <input type="number" name="code" >
        <input type="hidden" name="code1" value="<?php echo $_POST['code1'] ?>" >
        <input type="hidden" name="email" value="<?php echo $_POST['email'] ?>" >
        <input type="hidden" name="pass" value="<?php echo $_POST['pass'] ?>" >
        <input type="submit" name="login2" >
    </form>
        <?php 
    }
}
pre($_POST);
if(isset($_POST["login1"])){
    $rmail = $_POST['email'];
    $subject = "Axpers";
    $message = rand(1000,9999);
    $message = "Hrayry uti Saqoi enenenenen ";

    $headers = 'From: hrayr412@gmail.com';
    mail($rmail,$subject,$message,$headers);
    ?>
    <form class="black" method="post">
        <input type="number" name="code" >
        <input type="hidden" name="code1" value="<?php echo $message ?>" >
        <input type="hidden" name="email" value="<?php echo $rmail ?>" >
        <input type="hidden" name="pass" value="<?php echo $_POST['pass'] ?>" >
        <input type="submit" name="login2" >
    </form>
<?php 
    // pre($_POST);
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
        <?php include "tpl/reg_form.php" ;?>
        
   </div>
</div>
<?php
include "tpl/footer.php";
?>