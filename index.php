<?php 
$state = false;
$pages = array("cat.php","film.php","home.php","index.php","login.php","search.php");
$page = explode("/",$_SERVER['REQUEST_URI'])[2];
$page = explode("?",$page);
for($i=0;$i<count($pages);$i++){
    if($page[0] == $pages[$i]){
    	$state = true;
        include $pages[$i];
    }
}
if ( $state == false) include '404.php';
?>