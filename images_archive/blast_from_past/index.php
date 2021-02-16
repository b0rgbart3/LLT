<?php
  $files1=array();
  $track_back="";

  do{
   $pwd=getcwd();
   $files1 = scandir($pwd);

   if (! in_array("pages",$files1)){
       chdir('..');
       $track_back="../" . $track_back;
   }         
  }while(in_array("pages",$files1) === false);
  
#  var_dump($track_back);
#  print dirname($_SERVER['SCRIPT_FILENAME']) . "/" . $track_back . "pages/set_session_vars.php";
#  print "<br /><br />\n";

   include_once (dirname($_SERVER['SCRIPT_FILENAME']) . "/" . $track_back . "pages/set_session_vars.php");
   header("Location: " . $_SESSION['base_url']);
?>