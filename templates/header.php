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
      <a class="navbar-brand" href="#">LOGO</a>
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
	   <li class="active"><a href="#"><span class="glyphicon glyphicon-home"></span></a></li>
		<li><a href="#">Profile</a></li>
        <li><a href="#"><span class="glyphicon glyphicon-bell"></span></a></li>
		</ul>
		
		

    </div>

 </div>
</nav>

</head>
<body>
<script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>

</html>