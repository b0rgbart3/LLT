<?php 
#$showImage = $_SESSION['website_home']/data/shows/nn/images/xxxxxxx.xxx
$showImage = dirname($_SESSION['website_home'] . substr(__FILE__,strlen($_SESSION['root'])));
$showImage = $showImage . "/images/glass.png";
?>
    <div id="glass" class='show'>
        <img style="width:255px; float:right; margin-left:10px"
        <?php echo 'src="' . $showImage . '"'; ?> 
             alt="Glass Menagerie Logo"
             title="Glass Menagerie Logo"/>
        <br />   
        <h2>THE GLASS MENAGERIE</h2>
        <h3>A Southern Memory Play</h3>
        <p class='reservation_line'>       
          <?php
            $temp=explode(".",basename(__FILE__));
            $the_show=$temp[0];  
    
            reservation_print_yes_no($the_show,$years_numbers,$date_array);
          ?>
        </p>
        <br />
        <h4>FEBRUARY 26 - MARCH 1, 2015</h4>
        <br />
        <h5>Directed by Sam Buchanan</h5>
        <p>
            <span class='showTitle'>THE GLASS MENAGERIE</span> by Mississippi native Tennessee Williams, is a 
            drama set in the deep South of the early 1900's.  It was his first big successful play and 
            he went on to become one of America's most highly regarded playwrights.
        </p>
        <p>
            The characters and story mimic William's own family more closely than any of his other works.  
            It's an account of a time in the author's young life when he was growing up and yearning to 
            leave the family home and go off to become a writer.  His mother, a fading Southern belle well 
            past her prime, is obsessed with finding a suitor - a "gentleman caller" - for his shy and 
            quiet sister.
        </p>
        <p>
            A Broadway production of the show earlier this year received a Tony Award nomination for 
            Best Revival of a Play' and it was selected as the 'Best Of The Year' by the New York 
            Times, New York Magazine and USA Today.
            <br />
            <span class="blurb_highlight">
                A moving and memorable play full of longing and dreams - Voila - it's magic!
            </span>
        </p>
        <p>
          <a class='call_to_action' 
             href="<?php echo "$relative_path" ?>pages/casts.php?years=<?php echo "$years_numbers";?>#glass">
             Click here for our <em>The Glass Menagerie</em> cast list.
          </a>
        </p>
        
     </div><!-- close of 'show' div -->
