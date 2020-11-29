<?php include "functions.php" ;
require "../class/Login.php";
$db = new Connection();
$db =$db->connect();
$link = $_SESSION['link'];
        $conn = new Login();
if (isset($_POST['login']) ) {
    if($_POST['Lmail'] && $_POST['Lpass']){
        $email = $_POST['Lmail'];
        $pass = $_POST['Lpass'];
        $r = $conn->getLogin($db,$email,$pass);
     }

    if ($r) $_SESSION['login'] = $r["email"];
}

if (isset($_POST['logout'])) {
    session_destroy();
}	

header("Location: ../home.php");

?>