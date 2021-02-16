<?php 
#$showImage = $_SESSION['website_home']/data/shows/nn/images/xxxxxxx.xxx
$showImage = dirname($_SESSION['website_home'] . substr(__FILE__,strlen($_SESSION['root'])));
$showImage = $showImage . "/images/joseph.jpg";
?>
<div id="joseph" class='show'>
    
    <h1>Tim Rice &amp; Andrew Lloyd Webber's</h1>
    <p class='spectacular'>SPECTACULAR MUSICAL!!!</p>

    <h2>JOSEPH AND THE AMAZING<br />TECHNICOLOR DREAMCOAT</h2>
     
    <h4>
        August 3-4-5 at 730PM<br />
        August 6 at 2PM<br />
        August 11 at 730PM<br />
        August 12 at 2PM &amp; 730PM<br />
        August 13 at 2PM
    </h4>

    <p class='reservation_line'>       
       <?php
         $temp=explode(".",basename(__FILE__));
         $the_show=$temp[0];  
  
         reservation_print_yes_no($the_show,$years_numbers,$date_array);
       ?>
    </p>    
     
    <h5>
        Directed by Wess Hughes<br />
        Assistant Director - Laura Cooley
    </h5>
     
        <?php echo "<img src=" . $showImage . 
                       " title=\"Joseph and the Amazing Technicolor Dreamcoat\"" . 
                       " alt=\"Joseph and the Amazing Technicolor Dreamcoat\"/>"; 
        ?>
    <p>
        We'll open our 57th season in August with a return of one of our biggest hits ever!  We first presented 
        <span class='showTitle'>JOSEPH AND THE AMAZING TECHNICOLOR DREAMCOAT</span> back in 1995 and then revived it in 2009 
        with both productions selling out to full houses.
    </p>

    <p>
        Telling the famous story of Joseph and his "coat of many colors" from the Bible's Book of Genesis, it's full of 
        great life-lesson stories that come to vibrant life in this delightful and totally 
        <span style="color: #ffc40c;">colorful</span> 
        and spectacular musical.
    </p>

    <p>
        Long-time LLT alumni Wess Hughes is back once again to direct, and Jonathan McKenzie will also be returning for his 
        third run in the title role of 'Joseph' along with a HUGE cast and crew of over 100 folks that 
        are already in rehearsals.
    </p>
    <p>
        <a class='call_to_action' 
           href="<?php echo "$relative_path" ?>pages/casts.php?years=<?php echo "$years_numbers";?>#joseph">
           Click here for our <em>Joseph and the Amazing Technicolor Dreamcoat</em> cast list.
       </a>
    </p>
    <p>
        Featuring a variety of musical styles from country to calypso, French cabaret to Elvis rock-n-roll and 1920s 
        Charleston to 1960s go-go, this show will totally entertain all ages.
    </p>

    <p>
        50th anniversary stage productions are planned for both NYC and London next year, as well as a new animated motion 
        picture that will feature additional songs by Elton John. 
    </p>

    <p>
        Shane Cockrell is the musical director, and Coco Caldwell is the choreographer.  
        Running for two weekends, it's sure to fill the Arabian!
    </p>
</div>