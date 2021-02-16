<?php 
include_once $_SESSION['root'] . "/functions/pathfinder.php"; 
$relative_path = get_relative_path();

$season_year=substr(basename(__FILE__),0,4) - 1960;  # value will be 58!

include_once $_SESSION['data_dir'] . "/shows/$season_year/rexs_exes.php";
include_once $_SESSION['data_dir'] . "/shows/$season_year/christmas_story.php";
include_once $_SESSION['data_dir'] . "/shows/$season_year/biloxi_blues.php";
include_once $_SESSION['data_dir'] . "/shows/$season_year/annie_jr.php";
?>
