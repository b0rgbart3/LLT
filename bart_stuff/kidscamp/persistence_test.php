<?php

 session_start();


function setVar()
{

    
    $_SESSION["dummy"] = "extreme";
}

function showVar()
{
  printf("Session Value == ". $_SESSION["dummy"]);
}

php?>

<html>
<body>

This is a test of session variable persistence.

    <br /><a href='persistence_test2.php'>Go to the next page.</a><br />
    
    
<?php setVar(); 

showVar();
php?>

    <br />
<form action='persistence_test2.php'><input type='submit' value='submit'>
    <input type='text' value='extroided' name='dummy'></form>

</body>
</html>