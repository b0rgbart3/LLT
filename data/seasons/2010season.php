<div id='shows'>
<?php
  include_once $_SESSION['root'] . "/functions/pathfinder.php"; 
  $relative_path = get_relative_path();

  $season_year=substr(basename(__FILE__),0,4) - 1960;  # value will be 50!

  include_once $_SESSION['data_dir'] . "/shows/$season_year/beehive.php";
  include_once $_SESSION['data_dir'] . "/shows/$season_year/mocking.php";
  include_once $_SESSION['data_dir'] . "/shows/$season_year/daddy.php";
  include_once $_SESSION['data_dir'] . "/shows/$season_year/hairspray.php";
  include_once $_SESSION['data_dir'] . "/shows/$season_year/seussical.php";
?>
</div> <!-- close of 'shows' div -->
