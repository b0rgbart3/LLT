<div id='shows'>
<?php
  include_once $_SESSION['root'] . "/functions/pathfinder.php"; 
  $relative_path = get_relative_path();
  
  $season_year=substr(basename(__FILE__),0,4) - 1960;  # value will be 53!

  include_once $_SESSION['data_dir'] . "/shows/$season_year/aida.php";
  include_once $_SESSION['data_dir'] . "/shows/$season_year/dixie.php";
  include_once $_SESSION['data_dir'] . "/shows/$season_year/dracula.php";
  include_once $_SESSION['data_dir'] . "/shows/$season_year/driving.php";
  include_once $_SESSION['data_dir'] . "/shows/$season_year/nine2five.php";
  include_once $_SESSION['data_dir'] . "/shows/$season_year/cinderella.php";
?>
</div> <!-- close of 'shows' div -->
    