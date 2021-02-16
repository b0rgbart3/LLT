<div id='shows'>
<?php
  include_once $_SESSION['root'] . "/functions/pathfinder.php"; 
  $relative_path = get_relative_path();

  $season_year=substr(basename(__FILE__),0,4) - 1960;  # value will be 46!
  
  include_once $_SESSION['data_dir'] . "/shows/$season_year/forty.php";
  include_once $_SESSION['data_dir'] . "/shows/$season_year/trip.php";
  include_once $_SESSION['data_dir'] . "/shows/$season_year/honk.php";
  include_once $_SESSION['data_dir'] . "/shows/$season_year/sweet.php";
  include_once $_SESSION['data_dir'] . "/shows/$season_year/secret.php";
?>
</div> <!-- close of 'shows' div -->
