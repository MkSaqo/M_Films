<?php
include "../template/header.php";
require "../class/Register.php"; 
$month = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
$dateY = date("Y");
$newUser = new Register();

if (isset($_SESSION["login"])) {
    header("Location: home.php");
}

if(isset($_POST["end"])){
  $newUser->finish();    

}


if (isset($_POST['login2'])){
    $check = true;
    $check = $newUser->verificationCode();
    if($check){
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
    $newUser->sendCode($rmail);
}
?>

<div class="container1">
        <?php include "../template/reg_form.php" ;?>
        <?php include "../template/right.php" ;?>
</div>
<?php
include "../template/footer.php";
?>