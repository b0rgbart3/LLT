<?php 
include_once $_SESSION['root'] . "/functions/find_image_file.php";
include_once $_SESSION['root'] . "/functions/find_cast_list.php";
include_once $_SESSION['root'] . "/functions/pathfinder.php";
$relative_path = get_relative_path();

$season_year=substr(basename(__FILE__),0,4) - 1960;

####################################################
# This set of includes has to be hard coded so the #
# seasons page will function without relying on a  #
# data file.  The date file is only useful for the #
# current season.  When any season become part of  #
# history and is no-longer current season, using   #
# an existing date file for a list of names would  #
# be flawed                                        #
####################################################


include_once $_SESSION['data_dir'] . "/shows/$season_year/hello_dolly.php";
include_once $_SESSION['data_dir'] . "/shows/$season_year/broadway_bound.php";
?>
