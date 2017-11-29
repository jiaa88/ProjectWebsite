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
}

	
	$error="";
	
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
			
			$userid=$_SESSION["userid"];

			
			$query="INSERT INTO posts(title,createdon,userid)VALUES
			('$question','$createdon','{$_SESSION['userid']}')";
			$result=mysqli_query($con,"select*from posts where userid='$userid'")
			or die("Failed to query database".mysqli_error($con));
			
			$row=mysqli_fetch_array($result);
			
			if (mysqli_query($con,$query))
			{
			
				$display=$_POST['question'];
				$_SESSION["display"] = $row['title'];
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


<html>
<head>

	<meta charset="utf-8">
	<title>Basic HTML File</title>
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	
	<link rel="stylesheet" href="css/bootstrap-theme.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<style type="text/css">
	<style>
	.panel {
    -webkit-border-radius: 0px;
	-moz-border-radius: 0px;
	border-radius: 00px;
	-webkit-box-shadow: none;
	-moz-box-shadow: none;
	box-shadow: none;
	margin-bottom: 50px;
	margin-top:50px;
	height: 
}

.panel.panel-default {
	border: 1px solid #d4d4d4;
	-webkit-box-shadow: 0 2px 1px -1px rgba(0, 0, 0, 0.1);
	-moz-box-shadow: 0 2px 1px -1px rgba(0, 0, 0, 0.1);
	box-shadow: 0 2px 1px -1px rgba(0, 0, 0, 0.1);
}
.qbox{
	 -webkit-border-radius: 0px;
	-moz-border-radius: 0px;
	border-radius: 0px;
	-webkit-box-shadow: none;
	-moz-box-shadow: none;
	box-shadow: none;
	margin-bottom: 30px;
	margin-top:10px;
}
.qbox.qbox-default{
	border: 1px solid #d4d4d4;
	-webkit-box-shadow: 0 2px 1px -1px rgba(0, 0, 0, 0.1);
	-moz-box-shadow: 0 2px 1px -1px rgba(0, 0, 0, 0.1);
	box-shadow: 0 2px 1px -1px rgba(0, 0, 0, 0.1);
}



.btn-icon {
	color: #484848;
}
a{
	color:#FFFFF0
}
a.btn.btn-post{
	background-color:#40E0D0;
	color: #FFFFF0;
}



  /* Set black background color, white text and some padding */
    footer {
      background-color: #555;
      color: white;
      padding: 15px;
    }
@import url(https://fonts.googleapis.com/css?family=Open+Sans);

body{
  background: #f2f2f2;
  font-family: 'Open Sans', sans-serif;
}

.search {
  width: 100%;
  position: relative
}

.searchTerm {
  float: left;
  width: 100%;
  border: 3px solid #00B4CC;
  padding: 5px;
  height: 30px;
  border-radius: 5px;
  outline: none;
  color: #9DBFAF;
}

.searchTerm:focus{
  color: #00B4CC;
}

.searchButton {
  position: absolute;  
  right: -30px;
  width: 40px;
  height: 30px;
  border: 1px solid #00B4CC;
  background: #00B4CC;
  text-align: center;
  color: #fff;
  border-radius: 5px;
  cursor: pointer;
  font-size: 20px;
}

/*Resize the wrap to see the search bar change!*/
.wrap{
  width: 30%;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
}
	

</style>
</head>
<body>
<nav class="navbar sticky top navbar-light" style="background-color: #00CED1";>
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>  
		
      </button>
      <a class="navbar-brand" href="#">Ask Me.com</a>
	  <div class="wrap">
   <div class="search">
      <input type="text" class="searchTerm" placeholder="What are you looking for?">
      <button type="submit" class="searchButton">
        <i class="fa fa-search"></i>
     </button>
   </div>
</div>
	  
    </div>
			
		 <div class="nav navbar-nav navbar-right" id="myNavbar">
      <ul class="nav navbar-nav">
	   <li class="active"><a href="home.php"><span class="glyphicon glyphicon-home"></span></a></li>
		<li><a href="#">Profile</a></li>
        <li><a href="#"><span class="glyphicon glyphicon-bell"></span></a></li>
		</ul>
		
		

    </div>

 </div>
</nav>
<div class="container">
    <div class="span3 well" style="background-color:#FFF5EE">
        <center>
        <a href="#aboutModal" data-toggle="modal" data-target="#myModal"><img src="user.png" name="aboutme" width="140" height="140" class="img-circle"></a>
        <h3><?php echo "" . $_SESSION["currentuser"] . "<br>";?></h3>
		<a href="editprofile.php" class="btn btn-primary">Edit Profile</a>
		
        
		</center>
    </div>
	
</div>




<div class="container text-left">    
  <div class="row">
    <div class="col-sm-3 well">
      <div class="well" style="background-color:	#40E0D0">
	 
        <p><a href="profile.php"><?php echo "" . $_SESSION["currentuser"] . "<br>";?></a></p>
        <img src="user.png" class="img-circle" height="65" width="65" alt="Avatar">Status about</img>
	  </div>
		
      
       <div class="thumbnail" style="background-color:	#40E0D0">
	  	
			<p>Suggested Question:</p>
			<?php
			
			$sql = "SELECT * FROM posts WHERE userid = '18' ORDER BY createdon DESC";
			$query = mysqli_query($con,$sql);
			
			?>
			
			
			
		
			<?php while($row = mysqli_fetch_assoc($query)){?>
			
			<div class="well">
			
			
			
			<?php echo $row['title'];?>
			</div>
			
			
			
			<?php }?>
     
			
        
      </div>
      <div class="alert alert-success fade in">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
        <p><strong></strong></p>
       
      </div>
      <p><a href="#">Link</a></p>
      <p><a href="#">Link</a></p>
      <p><a href="#">Link</a></p>
    </div>
 <div class="col-sm-6">
    
      <div class="row">
        <div class="col-sm-12 " >
          <div class="panel panel-default text-left">
		   
                 
          	  <form action = "profile.php" form name="userpost" method = "post">
		  <div class="panel-body">
				 <img src="user.png" class="img-circle" height="50" width="50" alt="Avatar"><?php echo "" . $_SESSION["currentuser"] . "<br>";?><br></img>
				 
                <textarea rows="4" cols="50" class="form-control" placeholder="Ask a question?"></textarea>
          </div>
		  <div class="panel-footer">
                   <div class="btn-group">
                    <button type="button" class="btn btn-link btn-icon"><i class="glyphicon glyphicon-camera"></i></button>
                    
                    <button type="button" class="btn btn-link btn-icon"><i class="fa fa-bar-chart"></i></button>
					
                  </div>
          
                  
                  <div class="pull-right">
                    <a href="#" class="btn btn-post">Post</a>
                  </div>  
		  
        </div>
		</form>
      </div>
	 </div>
	 </div>
	 	 
	 <?php
			$user_id = $_SESSION["userid"];
			$sql = "SELECT * FROM posts WHERE userid = '$user_id' ORDER BY createdon DESC";
			$query = mysqli_query($con,$sql);
			
			
			
			?>

	  <div class="row">
        <div class="col-sm-13 " >
	
	
	
          <div class="panel panel-default text-left">
		   
             	<div id="postit" >    
          
		  <div class="panel-body">
		  
			<img src="user.png" class="img-circle" height="50" width="50" alt="Avatar"><?php echo "" . $_SESSION["currentuser"] . "<br>";?><br></img>
				<?php echo $row['title'];?>
			<?php
			$user_id = $_SESSION["userid"];
			$sql = "SELECT * FROM posts WHERE userid = '$user_id' ORDER BY createdon DESC";
			$query = mysqli_query($con,$sql);
			
			
			
			?>

			<?php while($row = mysqli_fetch_assoc($query)){?>
			<div class="thumbnail" style="background-color:#FFF0F5">
			
			<?php echo "" . $_SESSION["currentuser"] . "<br>";?>
			: 
			<?php echo $row['title'];?>
			
			<h6><i>
			<?php echo"posted on ". $row['createdon']; ?>
			</i></h6>
			<button type="button" class="btn btn-link">Answer</button>
			</tr>
			</div>
			<?php }?>
     
			
			
			
			
          </div>
		  <div class="panel-footer">

                    
		  
        </div>
      </div>
	  
	  </div>
	  
	 </div>
	 </div>
	
</div>
   <div class="col-sm-2 thumbnail" style="background-color:	#40E0D0">
      <div class="thumbnail">
        <div class="form-group">
		<form action="updatestatus.php" method="post">
  <label for="comment" name="status">What are you up to:</label>
  <textarea class="form-control" rows="5" id="comment"></textarea>
  
        <p><strong></strong></p>
        <p></p>
        <button class="btn btn-primary">Update</button>
		</form>
</div>
      
      </div>      
	  <?php
			
			$sql = "SELECT firstname FROM userinfo";
			$query = mysqli_query($con,$sql);
			
			
			
			?>
			<?php while($row = mysqli_fetch_assoc($query)){?>
      <div class="well">
        <?php echo $row['firstname'];?>
		<button type="button" class="btn btn-link" name="submit">View Profile</button>
      </div>
	   <?php }?>
      
    </div>
  </div>
</div>

<footer class="container-fluid text-center">
  <p>Footer Text</p>
</footer>
</div>
</div>
      
	<script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>
