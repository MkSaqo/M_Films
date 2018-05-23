<?php
session_start();
function pre($var){
    echo "<pre>";
    print_r($var);
    echo "</pre>";
}
function error_found(){
    header("Location: 404.php");
  }
  set_error_handler('error_found');
?>