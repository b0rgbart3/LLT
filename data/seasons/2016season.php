<div id='shows'>
<?php
  include_once $_SESSION['root'] . "/functions/pathfinder.php"; 
  $relative_path = get_relative_path();

  $season_year=substr(basename(__FILE__),0,4) - 1960;  # value will be 56!

  include_once $_SESSION['data_dir'] . "/shows/$season_year/beauty.php";
  include_once $_SESSION['data_dir'] . "/shows/$season_year/running_mates.php";
  include_once $_SESSION['data_dir'] . "/shows/$season_year/crucible.php";
  include_once $_SESSION['data_dir'] . "/shows/$season_year/lionking.php";
?>
</div> <!-- close of 'shows' div -->