<?php
function get_relative_path()
{ 
  if (strpos($_SERVER['REQUEST_URI'],"/pages/") === false){
   $path="";   
  }
  else{
   $path="../";   
  }  

# print $_SERVER['REQUEST_URI'] ."<br />\n";
# print strpos($_SERVER['REQUEST_URI'],'/pages/') ."<br />\n";
# print $path . "<br />\n";

 return $path;
}
?>
