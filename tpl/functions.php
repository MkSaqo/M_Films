<?php 
session_start();
function pre($var){
    echo "<pre>";
    print_r($var);
    echo "</pre>";
}
function dbConnect(){
    $db = mysqli_connect('localhost','root','root','Filmer');
    mysqli_set_charset($db, "utf8");
    date_default_timezone_set ( 'Europe/Moscow' );
    return $db;
}
function check($page){
    $pages = array("cat.php","admin.php","film.php","home.php","reg.php","search.php");
    for($i=0;$i<count($pages);$i++){
        if($page == $pages[$i]){
            return true;
        }
    }
}

function addLog(){
    $NEW_LOG_MESSAGE = '-----NEW LOG----';
	$HTTP_HOST =$_SERVER['HTTP_HOST']; 
    $HTTP_USER_AGENT =$_SERVER['HTTP_USER_AGENT']; 
    $URL =$HTTP_HOST.$_SERVER['PHP_SELF']; 
    $HTTP_COOKIE =$_SERVER['HTTP_COOKIE']; 
    $SERVER_SIGNATURE =$_SERVER['SERVER_SIGNATURE']; 
    $SERVER_ADMIN =$_SERVER['SERVER_ADMIN']; 
    $NAME =  isset($_SESSION['name']) ? $_SESSION['name'] : "Guest";
    $message = PHP_EOL.PHP_EOL.$NEW_LOG_MESSAGE.PHP_EOL.date('Y.m.d h:i:s').PHP_EOL.$NAME.PHP_EOL.$HTTP_HOST.PHP_EOL.$HTTP_USER_AGENT.PHP_EOL.$URL.PHP_EOL.$HTTP_COOKIE.PHP_EOL.$SERVER_SIGNATURE.PHP_EOL.$SERVER_ADMIN;
    $file = fopen('logs/log.log','a+');
    fwrite($file, $message);
    fclose($file);
}
function error_found(){
    header("Location: 404.php");
  }
set_error_handler('error_found');
header('X-XSS-Protection:0');

?>