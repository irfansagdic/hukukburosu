<?php 
	
	ob_start();
	session_start();
	$url ="https://coskunerhukuk.net/";

	$host="localhost";
	$user="coskune1_admin";
	$pass="Y^5h}ehb&5*R";
	$db="coskune1_hukuk";
	try {
	$baglan=new PDO("mysql:host=$host;dbname=$db;charset=utf8;",$user,$pass);
	$baglan->exec("SET NAMES 'utf8'; SET CHARSET 'utf8'");
	
	} catch ( PDOException $e ){
		print $e->getMessage();
}
	
?>