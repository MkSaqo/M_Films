<?php 
include "../template/functions.php" ;
require "../class/Login.php";
$link = $_SESSION['link'];
$conn = new Login();
if (isset($_POST['login']) ) {
    if($_POST['Lmail'] && $_POST['Lpass']){
        $email = $_POST['Lmail'];
        $pass = $_POST['Lpass'];
        $r = $conn->getLogin($email,$pass);
     }

    if ($r){
        $_SESSION['login'] = $r["email"];
        $a = $conn->getName();
        $_SESSION['name']= $a;

    } 
}
if (isset($_GET['login']) ) {
    if($_GET['Lmail'] && $_GET['Lpass']){
        $email = $_GET['Lmail'];
        $pass = $_GET['Lpass'];
        $r = $conn->getLogin($email,$pass);
     }

    if ($r) $_SESSION['login'] = $r["email"];
}

if (isset($_POST['logout'])) {
    session_destroy();
}	

header("Location: ../home.php");

?>