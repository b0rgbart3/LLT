<div id='shows'>
<?php
  include_once $_SESSION['root'] . "/functions/pathfinder.php"; 
  $relative_path = get_relative_path();

  $season_year=substr(basename(__FILE__),0,4) - 1960;  # value will be 55!

  include_once $_SESSION['data_dir'] . "/shows/$season_year/jekyll.php";
  include_once $_SESSION['data_dir'] . "/shows/$season_year/arsenic.php";
  include_once $_SESSION['data_dir'] . "/shows/$season_year/departed.php";
  include_once $_SESSION['data_dir'] . "/shows/$season_year/peter.php";
?>
</div> <!-- close of 'shows' div -->
