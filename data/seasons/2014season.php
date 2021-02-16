<div id='shows'>
<?php
  include_once $_SESSION['root'] . "/functions/pathfinder.php"; 
  $relative_path = get_relative_path();

  $season_year=substr(basename(__FILE__),0,4) - 1960;  # value will be 54!

  include_once $_SESSION['data_dir'] . "/shows/$season_year/addams.php";
  include_once $_SESSION['data_dir'] . "/shows/$season_year/women.php";
  include_once $_SESSION['data_dir'] . "/shows/$season_year/glass.php";
  include_once $_SESSION['data_dir'] . "/shows/$season_year/tuna.php";
  include_once $_SESSION['data_dir'] . "/shows/$season_year/aladdin.php";
?>
</div> <!-- close of 'shows' div -->
