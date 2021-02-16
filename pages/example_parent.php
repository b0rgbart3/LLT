<?php session_start();
  include_once "../functions/set_session_vars.php"; 

/*
    ini_set('display_errors',1);
    error_reporting(E_ALL|E_STRICT);
 */
?>
<meta charset = "UTF-8">
<html lang="en">

<head>
</head>

<body>
<?php
  include($_SESSION['data_dir'] . "/shows/58/example_son.php");
 ?>
</body>
</html>
