<div id='shows'>
<?php
  include_once $_SESSION['root'] . "/functions/pathfinder.php"; 
  $relative_path = get_relative_path();

  $season_year=substr(basename(__FILE__),0,4) - 1960;  # value will be 51!

  include_once $_SESSION['data_dir'] . "/shows/$season_year/wizard.php";
  include_once $_SESSION['data_dir'] . "/shows/$season_year/tunaxmas.php";
  include_once $_SESSION['data_dir'] . "/shows/$season_year/streetcar.php";
  include_once $_SESSION['data_dir'] . "/shows/$season_year/visions.php";
  include_once $_SESSION['data_dir'] . "/shows/$season_year/alice.php";
?>
</div> <!-- close of 'shows' div -->
