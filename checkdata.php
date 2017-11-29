<?php

$host = 'localhost';
$user = 'root';
$pass = '';

$dbc=mysqli_connect($host, $user, $pass);

mysqli_select_db($dbc,'register');

if(isset($_POST['username']))
{
 $username=$_POST['username'];

 $checkdata=" SELECT username FROM userinfo WHERE username='$username' ";

 $query=mysqli_query($dbc,$checkdata);

 if(mysqli_num_rows($query)>0)
 {
  echo "User Name Already Exist";
 }
 else
 {
  echo "OK";
 }
 exit();
}

if(isset($_POST['email']))
{
 $email=$_POST['email'];

 $checkdata=" SELECT email FROM userinfo WHERE email='$email' ";

 $query=mysqli_query($dbc,$checkdata);

 if(mysqli_num_rows($query)>0)
 {
  echo "Email Already Exist";
 }
 else
 {
  echo "OK";
 }
 exit();
}
?>