<?php

function get_relative_path()
{
 $dir_parts=explode ("/",$_SERVER['REQUEST_URI']);

$path = ($dir_parts[1] == 'pages' ? '../' : '');

 return $path;
}
?>
