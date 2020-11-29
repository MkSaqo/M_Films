<?php
include "tpl/header.php";
$month = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
$dateY = date("Y");

if (isset($_SESSION["login"])) {
    header("Location: home.php");
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
    $rmail = $_SESSION["rmail"];
    $rpass = $_SESSION["pass"];
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
    header("Location: tpl/login_check.php?Lmail=$rmail&Lpass=$rpass&login=a");
    
    ?>
        
    <?php
}


if (isset($_POST['login2'])){
    if($_POST['code'] && $_POST['code']==$_SESSION['code']){
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
    // $pass = $_POST['pass'];
    $sql = "SELECT `id` FROM `users` WHERE `email` ='$rmail' ";
    $r = mysqli_fetch_assoc(mysqli_query($db,$sql));
    if($r){
        ?><style> .Rdiv span{ display:inline-block;}</style><?php }
    else{
        $subject = "Code verification";
        $message = rand(1000,9999);
        $headers = 'CC: sargis.mkrtchyan1.m@gmail.com';
        mail($rmail,$subject,$message,$headers);
        pre($message);
        $_SESSION["rmail"] = $rmail;
        // $_SESSION["pass"] = $pass;
        $_SESSION["code"] = $message;
    ?>
    <form class="black" method="post">
        <input type="number" name="code" >
        <input type="submit" name="login2" >
    </form>

<?php 
}
}

?>

<div class="container1">
        <?php include "tpl/reg_form.php" ;?>
        <?php include "tpl/right.php" ;?>
</div>
<?php
include "tpl/footer.php";
?>