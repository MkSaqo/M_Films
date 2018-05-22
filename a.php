<?php 
$state = false;
$pages = array("home.php","login.php");
$page = explode("/",$_SERVER['REQUEST_URI']);
for($i=0;$i<count($pages);$i++){
    if($page[2] == $pages[$i]){
    	$state = true;
        include "".$pages[$i];
    }
}
if ( $state == false) include '404.php';
?>