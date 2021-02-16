<?php session_start();
/*  
    Site Title:  LaurelLittleTheatre.com
*/

    $root = $_SERVER['DOCUMENT_ROOT'];
    $path = dirname($_SERVER['SCRIPT_FILENAME']);

    // take the root out of the path so we can get the relative path to the homepage
    // that way this code will work weather we are on the live server, or on a local install,
    // or in a sub-folder of the live server (which is used as the testing server).

    $home = str_replace($root,'', $path);
    $fred = basename($path);
    
/*
   Store the path to the images folder because the code for the show blurbs gets called both 
   from the homepage and from the pages/seasons.php sub-page.  This way the images 
   will always have the right path.
*/

    $image_root = $home . '/images';
    $_SESSION['image_root'] = $image_root;

#    print "root: $root\n<br />\n";
#    print "path: $path\n<br />\n";
#    print "fred: $fred\n<br />\n";
#    print "home: $home\n<br />\n";
#    print "image_root: $image_root\n<br />\n";
#    print "\$_SESSION['image_root']: ";
#    print ($_SESSION['image_root']);
#    print "\n<br />\n";

print "URL:";
print $_SERVER['SCRIPT_URL'];
print "URI:";
print $_SERVER['SCRIPT_URI'];
?>
