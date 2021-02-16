<?php

session_start();

function showVarNow()
{
  printf("Session Value == ". $_SESSION["dummy"]);
}

php?>

<html>
<body>

This is a test of session variable persistence.

    <br />
<?php 

showVarNow();
php?>


</body>
</html>