<?php session_start();

include_once "functions/set_session_vars.php";  
 
    // echo"******<br />";
    // echo "$path<br />";
    // echo"******<br />";
    // echo "$root<br />";
    // echo"******<br />";
    // echo "$home<br />";
    // echo"******<br />";
?>

<meta charset = "UTF-8">
<meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate" />
<meta http-equiv="Pragma" content="no-cache" />
<meta http-equiv="Expires" content="0" />

<html lang="en">
<head>
    <link type="text/css" rel="stylesheet" href="css/base_2019.css">
    <link type="text/css" rel="stylesheet" href="css/homepage_2019.css">
    <link type="text/css" rel="stylesheet" href="css/sidebar_2019.css">
    <link type="text/css" rel="stylesheet" href="css/shows_2019.css"> 
	<title>Laurel Little Theatre</title>
    <link rel="stylesheet" href="//brick.a.ssl.fastly.net/Vollkorn:500,600,700">
</head>
<body>

<?php 
  $relative_path = ""; 
  
  ######### IMPORTANT NOTE ############################################
  # $years_numbers set here for looking in data/dates/dates.data file #
  # this value must be adjusted to match the year column in the data  #
  # file each time a new season is set up.                            #
  #####################################################################
  
   $years_numbers=$_SESSION['default_season'];

  include_once "functions/dates.php";
  include_once "functions/is_time_now_less_than.php";
  include_once "functions/reservation.php";
  include_once "functions/decide_class.php";
?>

<!-- The carousel is outside/above the page div so that it can have it's own dimensions,
     and it won't confuse the column-widths of the main part of the page.  -->

<?php include_once "homepage/carousel.php"; ?>

<div class='page group'>
  <?php
     include_once "homepage/left_column.php";
     include_once "homepage/right_column.php"; 
   ?>     

</div>
<?php 
include_once $_SESSION['root'] . '/homepage/contact.php';
?>
      
<?php 
 include_once 'stat_counter.php';
?>

</body>
</html>
