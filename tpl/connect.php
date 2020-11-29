<?php
require "class/Kino.php";
$db = new Connection();
$db =$db->connect();
mysqli_set_charset($db, "utf8");
date_default_timezone_set ( 'Europe/Moscow' );
