<?php
include "tpl/new.php";
include "tpl/connect.php";

if (isset($_POST['login'])) {
    $name = $_POST['name'];
    $pass = $_POST['pass'];
    $sql = "SELECT * FROM `users` WHERE `fname` = '$name' and `pass` = '$pass'";
    $r = mysqli_fetch_assoc(mysqli_query($db, $sql));
    if ($r) {
        $_SESSION['login'] = $r["email"];
    }
}
if ($_SESSION["login"]) {
    header("Location: index.php");
}
if($_GET['logouted']){
    session_destroy();

}
?>

<div class="container">
    <div class="Ldiv">
        <form action="" method="post">
            <input type="text" name="name" id="lname"><br>
            <input type="password" name="pass" id="lpass">
            <input type="submit" name="login" id="lsubmit" value="Log In">
        </form>
    </div>
</div>
<?php
include "tpl/footer.php";
?>