<div id='shows'>
<?php
  include_once $_SESSION['root'] . "/functions/pathfinder.php"; 
  $relative_path = get_relative_path();

  $season_year=substr(basename(__FILE__),0,4) - 1960;  # value will be 57!

  include_once $_SESSION['data_dir'] . "/shows/$season_year/joseph.php";
  include_once $_SESSION['data_dir'] . "/shows/$season_year/brighton_beach.php";
  include_once $_SESSION['data_dir'] . "/shows/$season_year/noises_off.php";
  include_once $_SESSION['data_dir'] . "/shows/$season_year/gold_rush.php"; 
  include_once $_SESSION['data_dir'] . "/shows/$season_year/shrek.php";
?>
</div> <!-- close of 'shows' div -->