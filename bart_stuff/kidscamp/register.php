<?php
// We are just starting out with entering data...
session_start();

$_SESSION['missingData'] = '';

// This includes the code that will display the forms on the screen
include_once "scripts/display_forms.php";



?>

<html>
 <head>
  <link href="formstyle.css" rel="stylesheet" type="text/css" />
 </head>

 <body>
     
<div id="content">
  <h1>Register for Laurel Little Theatre's<br /> Summer Kid's Camp</h1>


    <p></p>
    <p>Please enter your registration information below:</p>
    <form action="process_registration.php" method="POST">
        
	 <?php 
        displayParentalInfoForm(NULL);      
        displayChildInfoForm();      
        displayStandardSubmitButton();
     ?>
      
    </form>
  </div>

  <div id="footer"></div>
 </body>
</html>
