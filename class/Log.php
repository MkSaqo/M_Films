<?php 
class Log{
	const NEW_LOG_MESSAGE = '-----NEW LOG----';
	public function __construct(){
	}
	public function log($text){
		$HTTP_HOST =$_SERVER['HTTP_HOST']; 
		$HTTP_USER_AGENT =$_SERVER['HTTP_USER_AGENT']; 
		$URL =$_SERVER['HTTP_REFERER'].$_SERVER['PHP_SELF']; 
		$HTTP_COOKIE =$_SERVER['HTTP_COOKIE']; 
		$SERVER_SIGNATURE =$_SERVER['SERVER_SIGNATURE']; 
		$SERVER_ADMIN =$_SERVER['SERVER_ADMIN']; 
		$NAME = $_SESSION['name'];
		$message = PHP_EOL.PHP_EOL.self::NEW_LOG_MESSAGE.PHP_EOL.date('Y.m.d h:i:s').PHP_EOL.$NAME.PHP_EOL.$HTTP_HOST.PHP_EOL.$HTTP_USER_AGENT.PHP_EOL.$URL.PHP_EOL.$HTTP_COOKIE.PHP_EOL.$SERVER_SIGNATURE.PHP_EOL.$SERVER_ADMIN;
			$file = fopen('logs/log.log','a+');
		fwrite($file, $message);
		fclose($file);
			}
}




 ?>