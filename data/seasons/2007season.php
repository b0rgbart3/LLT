<div id='shows'>
<?php
  include_once $_SESSION['root'] . "/functions/pathfinder.php"; 
  $relative_path = get_relative_path();

  $season_year=substr(basename(__FILE__),0,4) - 1960;  # value will be 47!

  include_once $_SESSION['data_dir'] . "/shows/$season_year/peter.php";
  include_once $_SESSION['data_dir'] . "/shows/$season_year/harvey.php";
  include_once $_SESSION['data_dir'] . "/shows/$season_year/cat.php";
  include_once $_SESSION['data_dir'] . "/shows/$season_year/patsy.php";
  include_once $_SESSION['data_dir'] . "/shows/$season_year/jungle.php";
?>
</div> <!-- close of 'shows' div -->
