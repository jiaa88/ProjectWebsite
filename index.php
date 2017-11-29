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
			
				
			}
			else{
				$error="there is an error";
				
			}
		}
	}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Area | Dashboard</title>
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <script src="http://cdn.ckeditor.com/4.6.1/standard/ckeditor.js"></script>
	<style type="text/css">
	
  .modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    padding-top: 100px; /* Location of the box */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
    background-color: rgba(214, 234, 248,0.1);
    margin: auto;
    padding: 45px;
    border: 1px solid #888;
    width: 35%;
}

/* The Close Button */
.close {
    color: #aaaaaa;
    float: center;
    font-size: 28px;
    font-weight: bold;
	
}

.close:hover,
.close:focus {
    color: #000;
    text-decoration: none;
    cursor: pointer;
}
a.btn.btn-post{
	background-color:#40E0D0;
	color: #FFFFF0;
}

	</style>
	</head>
	
  <body>

    <nav class="navbar navbar-default">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Admin Control Panel</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="index.php">Dashboard</a></li>
            <li><a href="pages.php">Answers</a></li>
            <li><a href="posts.php">Posts</a></li>
            <li><a href="users.php">Users</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#"></a></li>
            <li><a href="logout.php">Logout</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <header id="header">
      <div class="container">
        <div class="row">
          <div class="col-md-10">
            <h1><span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Dashboard <small>Manage Your Site</small></h1>
          </div>
          <div class="col-md-2">
            <div class="dropdown create">
              <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                Create Content
                <span class="caret"></span>
              </button>
              <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                <li><a type="button" data-toggle="modal" data-target="#addPage">Add Page</a></li>
				
					<!-- The Modal -->
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">&times;</span>
	<div id="error"><?php echo $error; ?></div>
	       <div class="panel panel-default text-left">
		   
                 	  <form action = "index.php" form name="userpost" method = "post">
          
		  <div class="panel-body">
				
                <textarea rows="4" cols="50" class="form-control" placeholder="Ask a question?" name="question"></textarea>
          </div>
		  <div class="panel-footer">
	
                   <?php echo "" . $_SESSION["userid"] . "<br>";?>
          
                  
                  <div class="pull-right">
					<input type="submit" name="submit" onclick="showpost()" value="Post"></button>
                
				
                  </div>  
		  </form>
        </div>
      </div>
  </div>

</div>
				
				

                <li><a href="#" id="lnk">Add Post</a></li>
								<script type = "text/javascript">
				

var modal = document.getElementById('myModal');

// Get the button that opens the modal
var btn = document.getElementById("lnk");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
    modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>
                <li><a href="#">Add User</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </header>

    <section id="breadcrumb">
      <div class="container">
        <ol class="breadcrumb">
          <li class="active">Dashboard</li>
        </ol>
      </div>
    </section>

    <section id="main">
      <div class="container">
        <div class="row">
          <div class="col-md-3">
            <div class="list-group">
              <a href="index.php" class="list-group-item active main-color-bg">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Dashboard
              </a>
              <a href="pages.php" class="list-group-item"><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> Answers <span class="badge"></span></a>
              <a href="posts.php" class="list-group-item"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Posts <span class="badge"></span></a>
              <a href="users.php" class="list-group-item"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Users <span class="badge"></span></a>
            </div>

            <div class="well">
             
            </div>
          </div>
          <div class="col-md-9">
            <!-- Website Overview -->
            <div class="panel panel-default">
              <div class="panel-heading main-color-bg">
                <h3 class="panel-title">Website Overview</h3>
              </div>
              <div class="panel-body">
                <div class="col-md-3">
                  <div class="well dash-box">
				  <?php
				  $sql = "SELECT * FROM userinfo";
				  
				  $query = mysqli_query($con,$sql);
				  $numberofusers=mysqli_num_rows($query);
			?>
                    <h2><span class="glyphicon glyphicon-user" aria-hidden="true"></span><?php echo $numberofusers;?></h2>
                    <h4>Users</h4>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="well dash-box">
                    <h2><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> </h2>
                    <h4>Answers</h4>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="well dash-box">
				  <?php
				  $sql = "SELECT * FROM posts";
				  
				  $query = mysqli_query($con,$sql);
				  $numberofposts=mysqli_num_rows($query);
			?>
                    <h2><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span><?php echo $numberofposts;?></h2>
                    <h4>Posts</h4>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="well dash-box">
                    <h2><span class="glyphicon glyphicon-stats" aria-hidden="true"></span></h2>
                    <h4>Visitors</h4>
                  </div>
                </div>
              </div>
              </div>

              <!-- Latest Users -->
              <div class="panel panel-default">
                <div class="panel-heading">
                  <h3 class="panel-title">Latest Users</h3>
                </div>
                <div class="panel-body">
                  <table class="table table-striped table-hover">
                      <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Joined</th>
                      </tr>
                      <tr>
                        <td>Jill Smith</td>
                        <td>jillsmith@gmail.com</td>
                        <td>Dec 12, 2016</td>
                      </tr>
                      <tr>
                        <td>Eve Jackson</td>
                        <td>ejackson@yahoo.com</td>
                        <td>Dec 13, 2016</td>
                      </tr>
                      <tr>
                        <td>John Doe</td>
                        <td>jdoe@gmail.com</td>
                        <td>Dec 13, 2016</td>
                      </tr>
                      <tr>
                        <td>Stephanie Landon</td>
                        <td>landon@yahoo.com</td>
                        <td>Dec 14, 2016</td>
                      </tr>
                      <tr>
                        <td>Mike Johnson</td>
                        <td>mjohnson@gmail.com</td>
                        <td>Dec 15, 2016</td>
                      </tr>
                    </table>
                </div>
              </div>
          </div>
        </div>
      </div>
    </section>

    <footer id="footer">
      <p></p>
    </footer>

    <!-- Modals -->

    <!-- Add Page -->
    <div class="modal fade" id="addPage" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <form>
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Add Page</h4>
      </div>
      <div class="modal-body">
        <div class="form-group">
          <label>Page Title</label>
          <input type="text" class="form-control" placeholder="Page Title">
        </div>
        <div class="form-group">
          <label>Page Body</label>
          <textarea name="editor1" class="form-control" placeholder="Page Body"></textarea>
        </div>
        <div class="checkbox">
          <label>
            <input type="checkbox"> Published
          </label>
        </div>
        <div class="form-group">
          <label>Meta Tags</label>
          <input type="text" class="form-control" placeholder="Add Some Tags...">
        </div>
        <div class="form-group">
          <label>Meta Description</label>
          <input type="text" class="form-control" placeholder="Add Meta Description...">
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
    </form>
    </div>
  </div>
</div>

  <script>
     CKEDITOR.replace( 'editor1' );
 </script>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
