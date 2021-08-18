<?php 
	
	ob_start();
	session_start();
	$url ="https://coskunerhukuk.net/";

	$host="localhost";
	$user="**********";
	$pass="***********";
	$db="coskune1_hukuk";
	try {
	$baglan=new PDO("mysql:host=$host;dbname=$db;charset=utf8;",$user,$pass);
	$baglan->exec("SET NAMES 'utf8'; SET CHARSET 'utf8'");
	
	} catch ( PDOException $e ){
		print $e->getMessage();
}
	
?>
