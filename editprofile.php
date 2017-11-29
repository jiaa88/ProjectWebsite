<?php
// Start the session
session_start();
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
		<li><a href="profile.php">Profile</a></li>
        <li><a href="#"><span class="glyphicon glyphicon-bell"></span></a></li>
		</ul>
		
		

    </div>

 </div>
</nav>

<div class="container">
    <h1>Edit Profile</h1>
  	<hr>
	<div class="row">
      <!-- left column -->
      <div class="col-md-3">
        <div class="text-center">
          <img src="user.png" class="img-circle" height="140" width="140" alt="Avatar">
          <h6>Upload a different photo...</h6>
		  <form action="upload.php" method="POST" enctype='multipart/form-data'>
           <input type="file" name="file" class="form-control">
			<button type="submit" name="submit">UPLOAD</button>
		</div>
      </div>
      
      <!-- edit form column -->
      <div class="col-md-9 personal-info">
        <div class="alert alert-info alert-dismissable">
          <a class="panel-close close" data-dismiss="alert">×</a> 
          <i class="fa fa-coffee"></i>
         
        </div>
        <h3>Personal info</h3>
        
        <form class="form-horizontal" role="form">
          <div class="form-group">
            <label class="col-lg-3 control-label">First name:</label>
            <div class="col-lg-8">
              <input class="form-control" type="text" name="firstname" required pattern="[A-Za-z ]+" title="Please enter a valid first name!">
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Last name:</label>
            <div class="col-lg-8">
              <input class="form-control" type="text" name="lastname"  required pattern="[A-Za-z ]+" title="Please enter a valid last name!">
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Username:</label>
            <div class="col-lg-8">
              <input class="form-control" type="text" name="username" required pattern="[A-Za-z0-9_]+"  title="Username should not include symbol *&^%$#@!?/\<">
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Email:</label>
            <div class="col-lg-8">
              <input class="form-control" type="text">
            </div>
          </div>
         
          <div class="form-group">
            <label class="col-md-3 control-label">Current Password:</label>
            <div class="col-md-8">
              <input class="form-control" type="text" name="password">
            </div>
          </div>
          <div class="form-group">
            <label class="col-md-3 control-label">New Password:</label>
            <div class="col-md-8">
              <input class="form-control" type="password" name="newpassword" >
            </div>
          </div>
          <div class="form-group">
            <label class="col-md-3 control-label">Confirm password:</label>
            <div class="col-md-8">
              <input class="form-control" type="password" name="confirmpassword" >
            </div>
          </div>
          <div class="form-group">
            <label class="col-md-3 control-label"></label>
            <div class="col-md-8">
              <input type="button" class="btn btn-primary" value="Save Changes">
              <span></span>
              <input type="reset" class="btn btn-default" value="Cancel">
            </div>
          </div>
        </form>
      </div>
  </div>
</div>
<hr>



<body>
</html>