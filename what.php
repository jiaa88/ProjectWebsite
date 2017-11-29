<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<meta http-equiv="content-type" content="text/html;charset=uft-8"/>
	<title></title>
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	
	<link rel="stylesheet" href="css/bootstrap-theme.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300">
	<style type="text/css">
	
	

label {
  float: left;
  clear: none;
  display: block;
  padding: 2px 1em 0 0;
}

input[type=radio],
input.radio {
  float: left;
  clear: none;
  margin: 2px 0 0 2px;
}


.login-page {
  width: 360px;
  padding: 8% 0 0;
  margin: auto;
}
.form {

  position: relative;
  z-index: 1;
  background: #FFFFFF;
  max-width: 360px;
  margin: 0 auto 100px;
  padding: 45px;
  text-align: auto;
  box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
}
.form input {
  font-family: "Roboto", sans-serif;
  outline: 0;
  background: ;
  width: 100%;
  border: 1px solid #00FFFF ;
  border-radius: 4px;
  margin: 0 0 15px;
  padding: 15px;
  box-sizing: border-box;
  font-size: 14px;
  
}

.form button {
  font-family: "Roboto", sans-serif;
  text-transform: uppercase;
  outline: 0;
  background: #1E90FF;
  width: 100%;
  border: 0;
  padding: 15px;
  color: #FFFFFF;
  font-size: 14px;
  -webkit-transition: all 0.3 ease;
  transition: all 0.3 ease;
  cursor: pointer;
}
.form input[type="radio"]{
    vertical-align: baseline;
	width:20%;
}
.form select{
	
   height: 29px;
   overflow: hidden;
   
}
.form button:hover,.form button:active,.form button:focus {
  background: rgba(30, 144, 255,0.4);
}
.form .message {
  margin: 15px 0 0;
  color: #b3b3b3;
  font-size: 12px;
}
.form .message a {
  color: #1E90FF;
  text-decoration: none;
}
.form .register-form {
  display: none;
}
.form input[type="radio"]{
    vertical-align: baseline;
}

.container {
  position: relative;
  z-index: 1;
  max-width: 300px;
  margin: 0 auto;
}
.container:before, .container:after {
  content: "";
  display: block;
  clear: both;
}
.container .info {
  margin: 50px auto;
  text-align: center;
}
.container .info h1 {
  margin: 0 0 15px;
  padding: 0;
  font-size: 36px;
  font-weight: 300;
  color: #1a1a1a;
}
.container .info span {
  color: #4d4d4d;
  font-size: 12px;
}
.container .info span a {
  color: #000000;
  text-decoration: none;
}
.container .info span .fa {
  color: #EF3B3A;
}
body {
 // background: 	#FFF8DC; /* fallback for old browsers */ 
	background-image:url("socialmedia.jpg");

	
	 background-size:100%;
    background-repeat: no-repeat;
	background-opacity:0.1;
	
   
 
  font-family: "Roboto", sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;      
}


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




	</style>
</head>


<body>
<div class="login-page">
  <div class="form">
    
   
	<h2>User Login</h2>
      <input type="text" placeholder="username"/>
      <input type="password" placeholder="password"/>
	
   
      <button>login</button>
      <p class="message" align="center">Not registered? <a href="#" id="lnk">Create an account</a></p>
    
  </div>
</div>
	
	
	<!-- The Modal -->
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">&times;</span>
    <div class="form"> 
	<form action = "what.php" form name="reg" onsubmit="return !!(validateForm()&validate()&validatePassword);" method = "post">
	   <h2>Sign up</h2>
      <input type="text" placeholder="first name" name="firstname"
	  required pattern="[A-Za-z ]+" title="Please enter your first name correctly">  
	  
	  <input type="text" placeholder="last name" name="lastname" required pattern="[A-Za-z .*[^ ].*]+" title="Please enter your last name correctly">
	  <input type="text" placeholder="username" name="username" required pattern="[A-Za-z0-9_]+"  title="Username should not include symbol *&^%$#@!?/\<">
	   <input type="text" placeholder="xxx@example.com" name="email" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" 
	  title="Please enter a valid email example: xxxx@xxx.com">
      <input type="password" placeholder="password" id="password" name="password" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
	  title="Password must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters">
	
	  <input type="password" placeholder="confirm password" id="confirm" name="confirm" required />
	  <p>Gender:</p>
   <input type="radio" class="radio" name="gender" value="male" id="male" required />
    <label for="male">Male</label>
    <input type="radio" class="radio" name="gender" value="female" id="female" required />
    <label for="female">Female</label>
	
	<p><br><br>Date of Birth: <br>
	<select id="day" name = "day">
		<option value = " ">Day</option>
<?php
	//print out 31 days:
	for($d =1; $d<=31; $d++){
		print "<option value=\"$d\">$d</option>\n";
	}

?>
</select>
		<select id="month" name = "month">
		<option value = " ">Month</option>
		<option value = "1">January</option>
		<option value = "2">February</option>
		<option value = "3">March</option>
		<option value = "4">April</option>
		<option value = "5">May</option>
		<option value = "6">June</option>
		<option value = "7">July</option>
		<option value = "8">August</option>
		<option value = "9">September</option>
		<option value = "10">October</option>
		<option value = "11">November</option>
		<option value = "12">December</option>
</select>
		
		<select id="year" name="year">
		<option value = " ">Year</option>
		<?php
		//print out 1905 yr to 2017:
		for($y =1905; $y<=2017; $y++){
		print "<option value=\"$y\">$y</option>\n";
		}
		?>
		
		</select><br></br>
		
		
	

	  
      <button type="submit">Create Account</button>
      <p class="message" align="center">Already registered? <a href="what.php">Sign In</a></p>
 
    </div>

  </div>

</div>



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

function myTrim(x) {
    return x.replace(/^\s+|\s+$/gm,'');   //trim out the white space
	}
function validateForm() {
    var fn = myTrim(document.forms["reg"]["firstname"].value);
	var ln = myTrim(document.forms["reg"]["lastname"].value);
	
	if(fn==""&&ln=="")
	{
		alert("You have forgotten your first name and last name =)");
	}
	else if(fn==""||ln=="")
	{
		alert("You have forgotten either your first name or last name =)");
	}
	
}	
	


var password = document.getElementById("password")
  , confirm_password = document.getElementById("confirm");

function validatePassword(){
  if(password.value != confirm_password.value) {
    confirm_password.setCustomValidity("Passwords are not matching");
  } else {
    confirm_password.setCustomValidity('');
  }
}

password.onchange = validatePassword;
confirm_password.onkeyup = validatePassword;


function validate()
{

 var day = document.getElementById("day");
 var month = document.getElementById("month");
 var year= document.getElementById("year");
 
 
    if (day.value == " "&&month.value==" "&&year.value==" ")
   {
    alert("Please enter the date of your birthday in day/month/year format");
	return false;
   }
   else if(day.value == " "||month.value==" "||year.value==" "){
	alert("You missed out of either day or month or year of your birthday !");
	return false;
   }
   return true;
}


	
</script>




<?php
	//Script 6.2 - handle_reg.php
	/* This script receives eight values from
	register.html:email,password,confirm,month,day
	year,color,submit */
	
	//Address error management, if you want.
	ini_set('display_errors',1);//Let me learn from my mistakes!
	error_reporting(E_ALL | E_STRICT);
	
	//Flag variable to track success:
	$okay = TRUE;
	
	//Address error management, if you want.
	//Validate the email address:
	if(empty($_POST['email'])) {
		
		$okay = FALSE;
	}
	//Validate the password:
	if(empty($_POST['password'])) {
	
		$okay = FALSE;
	}
	
	//Check the two passwords for equality:
	if($_POST['password']!=$_POST['confirm']){
		
		$okay= FALSE;
	}
	
	//Validate the birthday:
	$birthday ='';
	
	//validate the month;
	if(is_numeric($_POST['month']))
	{
		$birthday = $_POST['month'].'-';
	}
	else{
		
		$okay=FALSE;
	}
	
	//validate the day:
	if(is_numeric($_POST['day'])){
		$birthday = $_POST['day'].'-';
	}
	else{
		
		$okay = FALSE;
	}
	
	if(is_numeric($_POST['year'])){
		$birthday = $_POST['year'].'-';
	}
	else{
		
		$okay = FALSE;
	}
	
	
	//If there were no errors, print a success message:
	if($okay) {
		print '<p>You have been successfully registered (but not really). </p>';
		print "<p>You entered your birthday as $birthday.</p>";
	}
?>





<script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>