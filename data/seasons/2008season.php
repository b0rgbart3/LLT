<div id='shows'>
<?php
  include_once $_SESSION['root'] . "/functions/pathfinder.php"; 
  $relative_path = get_relative_path();

  $season_year=substr(basename(__FILE__),0,4) - 1960;  # value will be 48!

  include_once $_SESSION['data_dir'] . "/shows/$season_year/joseph.php";
  include_once $_SESSION['data_dir'] . "/shows/$season_year/thewomen.php";
  include_once $_SESSION['data_dir'] . "/shows/$season_year/high.php";
?>
</div> <!-- close of 'shows' div -->
