<?php
session_start();
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
	echo "" . $_SESSION["userid"] . "<br>";
}

	
	$error="";
	
	
	if(isset($_POST['submit']))
	{
		if(strlen($_POST['status'])<1)
		{
			print '<P class="error">Do not leave empty status! </p>';
			
		}
		
		else
		{
			$status=$_POST['status'];
			
			
			
			$userid=$_SESSION["userid"];

			
			$query="UPDATE userinfo SET status='$status' where ID='$userid'";
			$result=mysqli_query($con,"select*from userinfo where ID='$userid'")
			or die("Failed to query database".mysqli_error($con));
			
			$row=mysqli_fetch_array($result);
			
			if (mysqli_query($con,$query))
			{
			
				
				echo '<script language="javascript">';
				echo 'alert("Successfully Posted")';
				
				echo '</script>';
				header('Location:home.php');
				
			}
			else{
				$error="there is an error";
				
			}
		}
	}
	
?>
