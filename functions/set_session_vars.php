<?php 
session_destroy();
session_start();
#--------------------------------------------------------------------
/*  
    Site Title:  LaurelLittleTheatre.com
    Author: Bart Dority
*/

###################################
# set $_SESSION['default_season'] #
###################################
if (! isset($_SESSION['default_season'])){
  $_SESSION['default_season']="2020";     #!!#
}

###################################
# set $_SESSION['how_many_years'] #
###################################
if (! isset($_SESSION['how_many_years'])){
  $_SESSION['how_many_years']=$_SESSION['default_season'] - 1960;
}

##############################
# set $_SESSION['llt_email'] #
##############################
if (! isset($_SESSION['llt_email'])){
# $_SESSION['llt_email']="info@LaurelLittleTheatre.com";
  $_SESSION['llt_email']="LLTLaurelMS@aol.com";
}

##############################
# set $_SESSION['llt_phone'] #
##############################
if (! isset($_SESSION['llt_phone'])){
  $_SESSION['llt_phone']="601.428.0140";
}

################################
# set $_SESSION['llt_address'] #
################################
if (! isset($_SESSION['llt_address'])){
  $_SESSION['llt_address']="P. O. Box 2131 Laurel, MS 39442";
}

###################################
# set $_SESSION['timezone'] #
###################################
if (! isset($_SESSION['timezone'])){
  $_SESSION['timezone']="America/Chicago";     
}

#################################
# set $_SESSION['camp_percent'] #
#################################
if (! isset($_SESSION['camp_percent'])){
  $_SESSION['camp_percent']="0";
}

################################################################
# These setting build on each other... do not change the order #
################################################################

###############################################################
# set $_SESSION['root']  THIS IS A UNIX FILE SYSTEM REFERENCE #
###############################################################

# By climbing 2 directories up from the location if this file, 
# ( set_session_vars.php ), we find the top-level directory for the desired
# website.  This allows the site to operate properly no matter where the site is
# stored.  This even allows for test setup's 
#
# Regardless if it is one of Bart's test or development Servers.  The name of the directory
# does not matter

if (! isset($_SESSION['root'])){
  $root = dirname(dirname(stream_resolve_include_path(__FILE__)));
  $_SESSION['root'] = $root;
}

########################################################################
# set $_SESSION['website_home'] THIS IS A WEBSERVER RELATIVE REFERENCE #
# set $_SESSION['image_root'].                                         #
########################################################################

if (! isset($_SESSION['website_home'])){
  // Make website_home work for live site as well as development and testing sites 
  
  $path = $_SERVER['DOCUMENT_ROOT'];
  
  if ($_SESSION['root'] == $path )
    $home = "";            # we work off DOCUMENT_ROOT/images
  else {
      # we have to chop off the DOCUMENT_ROOT directories from the full path. Keep all subdirectories 
      # that get us to top dir of Laurellittletheatre website ( in test environment )
      
      $home = str_replace($path,'', $_SESSION['root']); # we work off of DOCUMENT_ROOT/clients/llt
  }
 
  $_SESSION['website_home'] = $home;

  /*
  Store the path to the images folder because the code for the show blurbs gets called both 
  from the homepage and from the pages/seasons.php sub-page.  This way the images 
  will always have the right path.
  */

  $_SESSION['image_root'] = $_SESSION['website_home'] . '/images'; 
}

#############################
# set $_SESSION['data_dir'] #
#############################

# $_SESSION['data_dir'] is based off of $_SESSION['root']. So $_SESSION['root']
# must be set first

if (! isset($_SESSION['data_dir'])){
 $_SESSION['data_dir'] = $_SESSION['root'] . "/data";
}

#############################
# set $_SESSION['base_url'] #
#############################

# $_SESSION['base_url'] is based off of $_SESSION['image_root']. So $_SESSION['image_root']
# must be set first

#print $_SESSION['image_root'] . "<br />\n";
#print dirname($_SESSION['image_root']) . "%%%<br />\n";

if (! isset($_SESSION['base_url'])){
    $_SESSION['base_url']="http://" . $_SERVER["HTTP_HOST"] . dirname($_SESSION['image_root']);
}
