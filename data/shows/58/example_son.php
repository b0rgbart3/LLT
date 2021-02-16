<div style="font-family:courier, courier new, serif;">
<?php
  echo "What Are we disecting ?<br /><br />\n";
  echo '$showImage = dirname(substr(stream_resolve_include_path(__FILE__),strlen($_SESSION[\'root\']))) . 
       "/images/annie.jpg"' . "<br /><br />\n";


  echo "-- The Start --<br /><br />\n";


  echo '1. stream_resolve_include_path(__FILE__):  ' . "<b>" . stream_resolve_include_path(__FILE__) . "</b><br />\n";
 # $space_count=6 + strlen(stream_resolve_include_path(__FILE__));

 # for ($count=1;$count<$space_count;$count++){
 #   echo "&nbsp;";
 # }

 echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
 echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
 echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
 echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
 echo"<b>";
  
  for ($count=1;$count<=strlen($_SESSION['root']);$count++){
    if ($count % 10 == 0) { echo $count / 10 ; continue; }
    if ($count % 5 == 0) { echo "+" ; continue; }
    echo ".";
  }

  echo "</b><br /><br />\n";

  echo '2. $_SESSION[\'root\']:  ' . "<b>" . $_SESSION['root'] . "</b><br />\n";

  for ($count=3;$count<25;$count++){
    echo "&nbsp;";
  }
  
  for ($count=1;$count<=strlen($_SESSION['root']);$count++){
    if ($count % 10 == 0) { echo $count / 10 ; continue; }
    if ($count % 5 == 0) { echo "+" ; continue; }
    echo ".";
  }
  echo "<br \><br \>\n";
  
  echo '3. strlen($_SESSION[\'root\']):  ' . "<b>" . strlen($_SESSION['root']) . "</b><br /><br />\n";
  echo '4. substr(stream_resolve_include_path(__FILE__),strlen($_SESSION[\'root\'])):  ' . 
           "<b>" . substr(stream_resolve_include_path(__FILE__),strlen($_SESSION['root'])) . 
           "</b><br />\n";
  
  echo "RETURN THE PORTION OF THE STRING FROM (0-based) byte position " . 
        strlen($_SESSION['root']) . 
       " ( string length byte " . 
       (strlen($_SESSION['root']) +1) . 
       " to end of string<br /><br />\n";
  
  echo '5. dirname(substr(strlen(stream_resolve_include_path(__FILE__),$_SESSION[\'root\']))):  ' . 
           "<b>" . dirname(substr(stream_resolve_include_path(__FILE__),strlen($_SESSION['root']))) . 
           "</b><br /><br />\n";

  echo "WE NOW HAVE THE CORRECT DIRECTORY FOR THE BLURB's IMAGE(S)<br /><br />\n";
  
  echo "6. Add the file name to the info:  " .  "<b>" .
          dirname(substr(stream_resolve_include_path(__FILE__),strlen($_SESSION['root']))) . 
           "/images/annie.jpg</b><br /><br />\n";

$showImage = dirname(substr(stream_resolve_include_path(__FILE__),strlen($_SESSION['root']))) . "/images/annie.jpg";

echo "<img style='width:200px;' " . 
        " src=" . $showImage . ">";

?>
</div>






