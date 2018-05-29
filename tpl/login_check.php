<?php include "functions.php" ;
 include "connect.php" ;
pre($_GET);
$link = $_SESSION['link'];
if (isset($_POST['login']) ) {
    $email = $_POST['Lmail'];
    $pass = $_POST['Lpass'];
    $sql = "SELECT * FROM `users` WHERE `email` = '$email' and `pass` = '$pass'";
    $r = mysqli_fetch_assoc(mysqli_query($db, $sql));
    if ($r) {

        $_SESSION['login'] = $r["email"];
        header("Location: ../$link");
    }
}
if(isset($_GET['login'])){
    $email = $_GET['Lmail'];
    $pass = $_GET['Lpass'];
    $sql = "SELECT * FROM `users` WHERE `email` = '$email' and `pass` = '$pass'";
    $r = mysqli_fetch_assoc(mysqli_query($db, $sql));
    if ($r) {
        $_SESSION['login'] = $r["email"];
        header("Location: ../$link");
    }
}
if (isset($_POST['logout'])) {
    session_destroy();
    header("Location: ../$link");
}	

?>