<?php
//Address error management, if you want.
	ini_set('display_errors',1);//Let me learn from my mistakes!
	error_reporting(E_ALL | E_STRICT);


$host='localhost';
$user='root';
$pass='';
$db='register';

$con=new mysqli('localhost',$user,$pass,$db)or die("Unable to connect");


if($con){
	echo 'successfully connected!';
}

?>