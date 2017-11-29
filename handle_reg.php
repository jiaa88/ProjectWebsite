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
		$birthday .= $_POST['month'].'-';
	}
	else{
		
		$okay=FALSE;
	}
	
	//validate the day:
	if(is_numeric($_POST['day'])){
		$birthday .= $_POST['day'].'-';
	}
	else{
		
		$okay = FALSE;
	}
	
	if(is_numeric($_POST['year'])){
		$birthday .= $_POST['year'].'';
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
