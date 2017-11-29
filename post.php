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

	
	$error="";
	
	session_start();
	if(isset($_POST['submit']))
	{
		if(strlen($_POST['question'])<3)
		{
			print '<P class="error">Your question is too short. </p>';
			
		}
		
		else
		{
			$question=$_POST['question'];
			
			$createdon=date('Y-m-d H:i:s');
			
			

			
			$query="INSERT INTO posts(title,createdon,userid)VALUES
			('$question','$createdon','{$_SESSION['userid']}')";
			
			if (mysqli_query($con,$query))
			{
				$question=$_POST['question'];
				$display=$_POST['display'];
				if(isset($display))
				{
					var_dump($question);
				};
				
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

<script type="text/javascript">
function showpost() {
   document.getElementById('postit').style.display = "block";
}



</script>