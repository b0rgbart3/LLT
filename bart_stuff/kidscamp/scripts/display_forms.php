<?php


function displayParentalInfoForm($missingData)
{
    
    printf("<h3>Parent's Info:</h3>");
    printf("<fieldset>");
    printf("<table width='600'>");
    printf("<tr>");
    
    printf("<td><label for='parentFirstname'>First Name:</label><br /> 
                  <input type='text' name='parentFirstname' size='28' value='".$_SESSION['parentFirstname']."'/><br /></td>");
    
    printf("<td colspan='2'><label for='parentLastname'>Last Name:</label><br />
              <input type='text' name='parentLastname' size='30' value='".$_SESSION['parentLastname']."' /><br /></td>
              </tr>");
    
    printf("<tr><td><label for='parentEmail'>E-mail address:</label><br />
            <input type='text' name='parentEmail' size='30' maxlengh='50' value='".$_SESSION['parentEmail']."'/>
            <br /></td>");
    
    printf("<td colspan='2'><label for='paentPhone'>Phone Number: (###) ###-####</label><br />
            <input type='text' name='parentPhone' size='20' value='".$_SESSION['parentPhone']."'/><br /></td></tr>");
    
    printf("<tr><td colspan='3'><label for='address'>Shipping address:</label> <br />
                  <input type='text' name='address' size='50' value='".$_SESSION['address']."' /><br /></td></tr>");
    
    printf("<tr><td><label for='city'>City:</label><br /> <input type='text' name='city' size='32' value='".$_SESSION['city']."' /><br /></td>");
    
    printf("<td width='70'><label for='state'>State:</label><br />
                  <input type='text' name='state' size='3' value='".$_SESSION['state']."' /><br /></td>");
    
    printf("<td><label for='zipcode'>Zip:</label><br /><input type='text' name='zipcode' size='18'  value='".$_SESSION['zipcode']."'/><br /></td>
              </tr>");
    printf("</table>");
    printf("</fieldset>");
    
        
}

function displayChildInfoForm()
{
     printf("<h3>Child's Info:</h3>");
      printf("<fieldset>");
      printf("<table width='600'><tr>");
      printf("<td><label for='childFirstname'>First Name:</label><br /> ");
      printf("<input type='text' name='childFirstname' size='28' value='".$_SESSION['childFirstname']."' /><br /></td>");
      printf("<td><label for='childLastname'>Last Name:</label><br />");
       printf("<input type='text' name='childLastname' size='30'  value='".$_SESSION['childLastname']."'/><br /></td>");
        printf("</tr>");
        printf("<tr><td><label for='childAge'>Age:</label><br />");
      printf("<input type='text' name='childAge' size='10'  value='".$_SESSION['childAge']."'/><br /></td>");
       printf("</tr></table>");
   printf("</fieldset>");
        
}

// The first registration page has a form who's submit button just says 'continue'.
function displayStandardSubmitButton()
{
    printf("<br /><table width='600'><tr><td width='250'></td><td align='right'> <input type='submit' value='Continue' class='button'/></td></tr></table><br />");
    
}

// After the data has been analyzed, the submit button changes to say 'register'.
function displayRegisterSubmitButtons()
{
    printf("<table width='500'><tr><td width='250'><input type='submit' value='ReEnter' class='noticeable'/></td>");
    printf("<td align='right'> <input type='submit' value='Register' class='submit'/></td></tr></table>");
}

function displayConfirmationButtons()
{
    $_SESSION['missingData'] = "userChange";
    //  echo "session's missing data = ".$_SESSION['missingData'];
    printf("<br /><table><tr><td>");
    printf("<a href='process_registration.php' class='largeButton'>I need to change something.</a></td>");
    printf("<td width='50'>&nbsp;</td><td align='right'><a href='finish_registration.php' class='largeButton'>This information is correct.</a></td></tr></table><br />");
      
}


function displayParentalInfo()
{
    printf("<p>".$_SESSION['parentFirstname'].", ".$_SESSION['parentLastname']."</p>");
    printf("<p>".$_SESSION['parentEmail']."</p>");
    
}


?>
