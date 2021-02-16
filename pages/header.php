<!DOCTYPE html>
<!---This single file contains the logo and top-navigation items for ALL the subpages,
so making a change here will affect ALL the subpages! -->

<html lang="en">
<meta charset = "UTF-8">

  <link type="text/css" rel="stylesheet" href="../css/base_2020.css">
  <link type="text/css" rel="stylesheet" href="../css/sidebar_2020.css"> 
  <link type="text/css" rel="stylesheet" href="../css/shows_2020.css"> 
  <link type="text/css" rel="stylesheet" href="../css/header_2020.css">   
  <?php 
    if (basename($_SERVER['SCRIPT_FILENAME']) == "past.php"){
        print "<!-- Some stuff in base_xxxx.css are getting overridden -->\n";
     print "  <link type=\"text/css\" rel=\"stylesheet\" href=\"../css/past_2020.css\">\n";  
    }
  ?>
  <link rel="stylesheet" href="//brick.a.ssl.fastly.net/Vollkorn:500,600,700">

  <title>Laurel Little Theatre</title>
    <script src='https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js'></script> 

<body>
<div class='secondLevel-nav-container group'>

    <a href='../index.php'><div class='logo'></div></a>

    <div class='secondLevel-nav'>
      <p class="locationLine">In the Historic 1927 Downtown Arabian Theatre -- 5th Avenue -- Laurel, Mississippi</p> 
      <ul class='navlist'>
        <li><a href="../index.php">Home</a></li>
        <li><a href="tickets.php">Ticket Info</a></li>
        <li><a href="become_a_patron.php">Become a Patron</a></li>
        <li><a href="location.php">Our Location</a></li>
        <li><a href="patrons.php" >Our Gold Patrons</a></li>
    </ul>
    <ul class='navlist'>
        <?php
        echo<<<HDR
        <li><a href="casts.php" >{$_SESSION['how_many_years']} Years of Cast Lists</a></li>
        <li><a href="seasons.php">{$_SESSION['how_many_years']} Years of Seasons</a></li>
        <li><a href="boards.php" >{$_SESSION['how_many_years']} Years of Board of Directors</a></li>
        <li><a href="../photos/index.html">{$_SESSION['how_many_years']} Years of Photos</a></li>
        <li><a href="auditions.php" >Auditions</a></li>
        <li><a href="past.php">{$_SESSION['how_many_years']} Years of Shows</a></li>

HDR;
?>
        <li><a href="stories.php">LLT/Arabian Theatre History and Stories</a></li>
      </ul>
    </div>

</div> <!-- end container -->
