<?php 
#$showImage = $_SESSION['website_home']/data/shows/nn/images/xxxxxxx.xxx
$showImage = dirname($_SESSION['website_home'] . substr(__FILE__,strlen($_SESSION['root'])));
$showImage = $showImage . "/images/addamsfamily.png";
?>
    <div id="addams" class='show'>
        <a ></a>
        <img style="width:255px; float:right; margin-left:10px"
        <?php echo 'src="' . $showImage . '"'; ?> 
             alt="Addams Family"
             title="Addams Family"/>
             <br />
             <h2>THE ADDAMS FAMILY</h2>
             <h3>A Musical Comedy!</h3>
             <br />
             <h4>October 16-20, 2014</h4>
             <p class='reservation_line'>       
             <?php
               $temp=explode(".",basename(__FILE__));
               $the_show=$temp[0];  
    
               reservation_print_yes_no($the_show,$years_numbers,$date_array);
             ?>
             </p>  
             <br />
             <h5>
                 Directors - Wess Hughes &amp;<br />
                 Frankie Bennett
             </h5>
             <p>
                 LLT will kick off our 54th season with the recent Broadway hit
                 <span class='showTitle'>THE ADDAMS FAMILY!</span>  
                 It's sure to be a fun event when Morticia &amp; Gomez, their children Wednesday &amp; 
                 Pugsley, and Uncle Fester, Lurch and "Thing" all make an appearance on the Arabian 
                 stage this October - just in time to kick off the Halloween season!  
            </p>
            <p>
                The Addams are a ghoulishly gleeful group with a tantalizing taste for all things 
                magnificently macabre.  Every family has some skeletons in the closet, the Addams just
                happen to keep their pet monster in there too!
            </p>
            <p>
                With a huge cast of 50 - featuring Rick and Frankie Bennett as Gomez &amp; Morticia - and 
                some spectacular sets and costumes, this is sure to be a highlight of our season. 
                <br /> 
                <span class="blurb_highlight">
                    Come and meet the weird and wacky and kooky Addams brood - they'll leave the lights off for you!
                </span>
            </p>
       <p>
         <a class='call_to_action' 
            href="<?php echo "$relative_path" ?>pages/casts.php?years=<?php echo "$years_numbers";?>#addams">
            Click here for our <em>Addams Family</em> cast list.
          </a>
      </p>
    </div><!-- close of 'show' div -->
