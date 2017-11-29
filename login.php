<?php
session_start();

	$dbc=mysqli_connect('localhost','root','');
	mysqli_select_db($dbc,'register');
	//Get values passes from the main.php file
	$username=$_POST['username'];
	$password=$_POST['password'];
	
	
	$username=stripcslashes($username);
	$password=stripcslashes($password);
	$username=mysqli_real_escape_string($dbc,$username);
	$password=mysqli_real_escape_string($dbc,$password);

	
	
	$result=mysqli_query($dbc,"select*from userinfo where username='$username' and password='$password'")
	or die("Failed to query database".mysqli_error($dbc));
	
	$row=mysqli_fetch_array($result);
	if($row['username']==$username&&$row['password']==$password)
	{
		if((strtolower($row['username'])=='admin')){
			//correct!
			
			//DO session stuff:
			echo "Login Success!! Welcome".$row['username'];
			$_SESSION["currentuser"] = $row['firstname'];
			$_SESSION["userid"]=$row['ID'];
			$_SESSION['username']=$_POST['username'];
			$_SESSION['loggedin']=time();
			header('Location:index.php');
			exit();
		}
		else
		{
			echo "Login Success!! Welcome".$row['username'];
			$_SESSION["currentuser"] = $row['firstname'];
			$_SESSION["userid"]=$row['ID'];
			$_SESSION['loggedin']=time();
			header('Location:home.php');
			
			exit();
		}
		
	}
	else
	{
		echo "Failed to login!";
	}

?>

