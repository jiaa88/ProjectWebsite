<?php
//Need the session:
session_start();

//Delete the session variable:


unset($_SESSION);

//Destroy the session data:

session_destroy();

//Define a page title and include the header:

define('TITLE','Logout');
echo "You are now logged out";

header('Location:main.php');



?>


<p>You are now logged out. </p>