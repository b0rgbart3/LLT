<?php
// Apparently in order for the Session vars to persist, each php page has to call this.
session_start();
// This includes the code that will display the forms on the screen

require_once "scripts/db_config.php";


function getConnectionToTheDataBaseServer()
{
    $connection =  new mysqli(DATABASE_HOST, DATABASE_USERNAME, DATABASE_PASSWORD)
        or die("<p>Error connecting to the database: ". mysql_error() ."</p>");
    return ($connection);
}


// Sniff out the Database, and/or create it if necessary (if this is the first run through)
function dbSetup($connection)
{
    $error = NULL;
    // Create database unless it already exists
    $sql = "CREATE DATABASE IF NOT EXISTS ". DATABASE_NAME;
    if ($connection->query($sql) != TRUE) {
     $error = $connection->error;
    }
    else
    {
      // Select the database 
      $sql = "USE ". DATABASE_NAME;
      if ($connection->query($sql) != TRUE) {
       $error = $connection->error;
      }
      else
      {
         // echo "Creating parents.";
        // Create Parents Table unless it already exists
        $sql = "CREATE TABLE IF NOT EXISTS PARENTS (
        id int AUTO_INCREMENT PRIMARY KEY, 
        firstname varchar(20), 
        lastname varchar(30), 
        email varchar(50), 
        phone varchar(10), 
        address varchar(30), 
        city varchar(20), 
        state varchar(2), 
        zipcode varchar(15),
        childcount int);";
        $connection->query($sql);
        
        //  echo "Creating children.";
        // Create Children Table unless it already exists
        $sql = "CREATE TABLE IF NOT EXISTS CHILDREN (
                id int AUTO_INCREMENT PRIMARY KEY,
                parent_id int,
                firstname varchar(20),
                lastname varchar(20),
                age int);";
        $connection->query($sql);
            
        
      }
    }
  return ($error);      
}


function dbEntry()
{
    // Connect to the MySql Server
    $connection = getConnectionToTheDataBaseServer();
    
    // Sniff out the Database, and/or create it if necessary (if this is the first run through)
    $error = dbSetup($connection);  

    if (!$error)
    {
        // Enter the Parental Info into the PARENTS TABLE
        
        
        $sql_command = sprintf("INSERT INTO PARENTS (firstname, lastname, email, phone, address, ".
                               "city, state, zipcode, childcount) ".
                               "VALUES ('%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%d');",
                               mysql_real_escape_string($_SESSION['parentFirstname']),
                               mysql_real_escape_string($_SESSION['parentLastname']),
                               mysql_real_escape_string($_SESSION['parentEmail']),
                               mysql_real_escape_string($_SESSION['parentPhone']),
                               mysql_real_escape_string($_SESSION['address']),
                               mysql_real_escape_string($_SESSION['city']),
                               mysql_real_escape_string($_SESSION['state']),
                               mysql_real_escape_string($_SESSION['zipcode']),
                              1);
        
        $connection->query($sql_command);
        
        $newID = mysqli_insert_id($connection);
        
        $sql_command = sprintf("INSERT INTO CHILDREN (parent_id, firstname, lastname, age) ".
                               "VALUES ('%d', '%s', '%s', '%d');",
                               mysql_real_escape_string($newID),
                               mysql_real_escape_string($_SESSION['childFirstname']),
                               mysql_real_escape_string($_SESSION['childLastname']),
                               mysql_real_escape_string($_SESSION['age']));
        
        $connection->query($sql_command);
        
            
    }
    $connection->close();
    
   
}

?>


<html>
 <head>
     <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Arbutus Slab">
  <link href="formstyle.css" rel="stylesheet" type="text/css" />
 </head>

 <body>
     
<div id="content">
    
  <h1>Register for Laurel Little Theatre's<br /> Summer Kid's Camp</h1>

    <?php dbEntry();?>
    
    <h3>Thank you for entering your information.</h3>
    
    <p class='green'>Amount due: $100.00</p>
    <p>The next step to complete your child's registration, is to send in your payment.<br />
    Click on the Paypal Buy Now button below, or send a check through the mail.</p>

 <!-- This is the Paypal - generated Paypal "BuyNow" link / form -->
    
<form action='https://www.paypal.com/cgi-bin/webscr' method='post' target='_top'><br />
<input type='hidden' name='cmd' value='_xclick'>
<input type='hidden' name='business' value='wesshughes@aol.com'>
<input type='hidden' name='lc' value='US'>
<input type='hidden' name='item_name' value='Laurel Kids Camp'>
<input type='hidden' name='amount' value='100.00'>
<input type='hidden' name='currency_code' value='USD'>
<input type='hidden' name='button_subtype' value='services'>
<input type='hidden' name='no_note' value='0'>
<input type='hidden' name='bn' value='PP-BuyNowBF:btn_buynowCC_LG.gif:NonHostedGuest'>
<input type='image' src='https://www.paypalobjects.com/en_US/i/btn/btn_buynowCC_LG.gif' border='0' name='submit' alt='PayPal - The safer, easier way to pay online!'>
<img alt='' border='0' src='https://www.paypalobjects.com/en_US/i/scr/pixel.gif' width='1' height='1'><br /><p></p><br />
</form>
<p>Or, you can send a check to the following address:
<p>Wess Hughes<br />-Need actual address here--<br />Laurel, MI <br /></p>

    
  </div>


 </body>
</html>