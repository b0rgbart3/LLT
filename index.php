<?php 
session_start();

include_once "functions/set_session_vars.php";  
 
    // echo"******<br />";
    // echo "$path<br />";
    // echo"******<br />";
    // echo "$root<br />";
    // echo"******<br />";
    // echo "$home<br />";
    // echo"******<br />";
?>
<!DOCTYPE html>
<html lang="en">
<meta charset = "UTF-8">

<link type="text/css" rel="stylesheet" href="css/base_2020.css">
<link type="text/css" rel="stylesheet" href="css/homepage_2020.css">
<link type="text/css" rel="stylesheet" href="css/sidebar_2020.css">
<link type="text/css" rel="stylesheet" href="css/shows_2020.css"> 
<title>Laurel Little Theatre</title>
<link rel="stylesheet" href="//brick.a.ssl.fastly.net/Vollkorn:500,600,700">
<body>

<?php 
  $relative_path = ""; 
  
  ######### IMPORTANT NOT###E ############################################
  # $years_numbers is now set by a value set in the set_session_vars.php #
  ########################################################################
  
  $years_numbers=$_SESSION['default_season'];

  include_once "functions/dates.php";
  include_once "functions/is_time_now_less_than.php";
  include_once "functions/reservation.php";
  include_once "functions/decide_class.php";
  include_once "functions/find_image_file.php";
  include_once "functions/find_cast_list.php";
  include_once "functions/display_boxes.php";
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
