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

    $subject = "Code verification";
    $message = rand(1000,9999);
    $headers = 'From: M_Films@gmail.com';
    mail($rmail,$subject,$message,$headers);
    
    // mysqli_query($db,$sql);
}
if (isset($_POST['codeSubmit'])){
    // prepr($rfname);
    // prepr($rlname);
    // prepr($rphone);
    // prepr($rmale);
    // prepr($rabout);
    // prepr($rday);
    // prepr($ryear);
    // prepr($rmounth);
    // prepr($maleImg);
    // prepr($rimage);
    // prepr($rmail);
    // prepr($rpass);
    prepr($_POST);
}
if(isset($_POST["Rsend"])){

    ?>
    <form class="black" method="post">
        <input type="number" name="code" >
        <input type="submit" name="codeSubmit" >
    </form>
<?php 
    // prepr($_POST);
}

?>

<div class="container">
   <div class="cen">
        <div class="Ldiv">
            <form action="" method="post">
                <input type="text" name="name" id="lname"><br>
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