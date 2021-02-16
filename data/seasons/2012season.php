<div id='shows'>
<?php
  include_once $_SESSION['root'] . "/functions/pathfinder.php"; 
  $relative_path = get_relative_path();

  $season_year=substr(basename(__FILE__),0,4) - 1960;  # value will be 52!

  include_once $_SESSION['data_dir'] . "/shows/$season_year/annie.php";
  include_once $_SESSION['data_dir'] . "/shows/$season_year/patsy.php";
  include_once $_SESSION['data_dir'] . "/shows/$season_year/proof.php";
  include_once $_SESSION['data_dir'] . "/shows/$season_year/dixie.php";
  include_once $_SESSION['data_dir'] . "/shows/$season_year/seventeen.php";
  include_once $_SESSION['data_dir'] . "/shows/$season_year/mermaid.php";
?>
</div> <!-- close of 'shows' div -->
