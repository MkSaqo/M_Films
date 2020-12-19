<?php 
$state = false;
$pages = array("cat.php","admin.php","film.php","home.php","reg.php","search.php");
$page = explode("/",$_SERVER['REQUEST_URI'])[1];
$page = explode("?",$page);
for($i=0;$i<count($pages);$i++){
    if($page[0]=="index.php" || $page[0]==""){
        $state = true;
        include "home.php";
        break;
    }
    if($page[0] == $pages[$i]){
        $state = true;
        include $pages[$i];
        break;
    }
}
if ( $state == false) include '404.php';
?>