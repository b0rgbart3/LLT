<?php
// Apparently in order for the Session vars to persist, each php page has to call this.
session_start();
// This includes the code that will display the forms on the screen
include_once "scripts/display_forms.php";



function confirmation()
{
    printf("<h2>Thank you for entering your information.</h2>");
    printf("<p>This is the information we have gotten so far.<br />");
    printf("Please review it and confirm that it is all correct before we proceed.<br />Thank you.<br /></p>");
    printf("<p class='confirm'><strong>".$_SESSION['childFirstname'].", ".$_SESSION['childLastname'].", age: ".$_SESSION['childAge']."</strong><br />");
    printf("<br />Who's parent is: ".$_SESSION['parentFirstname'].", ".$_SESSION['parentLastname']."<br />");    
    printf($_SESSION['parentEmail']." at ".$_SESSION['parentPhone']."<br />");
    printf($_SESSION['address'].", ".$_SESSION['city'].", ".$_SESSION['state']." ".$_SESSION['zipcode']."<br /></p>");
   
      
    displayConfirmationButtons();
}
               
           
               
function captureData()
{
    
    if ($_SESSION['missingData'] == "userChange")
    {
        //$missingData = "";
        //echo "User changd.";
        printf("<form action='process_registration.php' method='POST'>");
        displayParentalInfoForm($missingData);
        displayChildInfoForm($missingData);
        displayStandardSubmitButton();
        printf("</form>"); 
        $_SESSION['missingData'] = '';
    }
    else
    {
        if ($_SESSION['missingData'] == "none")
        {
            echo ("There was no missing data.");
        }
        else
        {
    $missingData = "";
    $_SESSION['missingData'] = '';
    $_SESSION['parentFirstname'] = $_REQUEST['parentFirstname'];
    $_SESSION['parentLastname'] = $_REQUEST['parentLastname']; 
    $_SESSION['parentEmail'] = $_REQUEST['parentEmail'];
    $_SESSION['parentPhone'] = $_REQUEST['parentPhone'];
    $_SESSION['address'] = $_REQUEST['address'];
    $_SESSION['city'] = $_REQUEST['city'];
    $_SESSION['state'] = $_REQUEST['state'];
    $_SESSION['zipcode'] = $_REQUEST['zipcode'];
    $_SESSION['childFirstname'] = $_REQUEST['childFirstname'];
    $_SESSION['childLastname'] = $_REQUEST['childLastname'];
    $_SESSION['childAge'] = $_REQUEST['childAge'];
     
    // First, check for empty fields
    if (!$_SESSION['childAge'])
    {
        $missingData = "child's age";
    }        
    if (!$_SESSION['childLastname'])
    {
        $missingData = "child's last name";
    }  
    if (!$_SESSION['childFirstname'])
    {
        $missingData = "child's first name";
    }      
    if (!$_SESSION['zipcode'])
    {
        $missingData = "zipcode";
    }    
    if (!$_SESSION['state'])
    {
        $missingData = "state";
    }    
    if (!$_SESSION['city'])
    {
        $missingData = "city";
    }        
    if (!$_SESSION['address'])
    {
        $missingData = "street address";
    }
    if (!$_SESSION['parentPhone'])
    {
        $missingData = "parent's phone number";
    }
    if (!$_SESSION['parentEmail'])
    {
        $missingData = "parent's email address ";
    }
    
    if (!$_SESSION['parentLastname'])
    {
        $missingData = "parent's last name";
    } 
    
    if (!$_SESSION['parentFirstname'])
    {
        $missingData = "parent's first name";
    } 
    
    
    // Check for valid information.
    
    // Validate the email address.....
    $email = $_SESSION['parentEmail'];
    $position = strpos($email, "@");
    //echo "Email == ".$email;
    if (!$position)
    {$missingData = "valid email address";}
    else
    {
        $position = strpos($email, ".");
        if (!$position)
        {
            $missingData = "valid email address";
        }
    }
    
    // Validate the phone #...........
    $phone = $_SESSION['parentPhone'];
    
    //eliminate every char except 0-9
    $justNums = preg_replace("/[^0-9]/", '', $phone);

    //eliminate leading 1 if its there
    if (strlen($justNums) == 11) $justNums = preg_replace("/^1/", '',$justNums);

    //if we have 10 digits left, it's probably valid.
    if (strlen($justNums) == 10) $isPhoneNum = true;
    
    if (!$isPhoneNum)
        $missingData = "valid phone number";
    else
        $phone = $justNums;
    
    
    // If there is no missing data, then we can proceed
        if (!$missingData)
        {
            $_SESSION['missingData'] = "none";
            
            confirmation();
            
                 
        }
            else
            {
        // otherwise, we have to re-display the input form
        
                printf("<p class='warning'>We're sorry, we need more information.</p>");
                printf("<p class='warning'>We need a ".$missingData.".</p><br />");
                printf("<form action='process_registration.php' method='POST'>");
                displayParentalInfoForm($missingData);
                displayChildInfoForm($missingData);
                displayStandardSubmitButton();
                printf("</form>");    
            }
        }
    }
}

?>

<html>
 <head>
  <link href="formstyle.css" rel="stylesheet" type="text/css" />
 </head>

 <body>
     
<div id="content">
    
  <h1>Register for Laurel Little Theatre's<br /> Summer Kid's Camp</h1>

    <?php captureData();?>
    
    

 
  </div>


 </body>
</html>
