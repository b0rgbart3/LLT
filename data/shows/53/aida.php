<?php 
#$showImage = $_SESSION['website_home']/data/shows/nn/images/xxxxxxx.xxx
$showImage = dirname($_SESSION['website_home'] . substr(__FILE__,strlen($_SESSION['root'])));
$showImage = $showImage . "/images/aida.png";
?>
    <div id="Aida" class='show'>
        <img style="float:right;width:200px;margin-left:10px"
        <?php echo 'src="' . $showImage . '"';?>
             alt="Aida Logo"
             title="Aida Logo"/>
         <br />
         <h2>DISNEY'S AIDA</h2>
         <h3>THE ELTON JOHN MUSICAL</h3>
         <p>
             4 Tony Awards including Best Musical Score<br />
             5 National Theatre Awards including Best Musical<br />
             Grammy Award for Best Musical Cast Recording
        </p>
        <h4>August 1-4, 2013</h4>
        <br />
        <h5>Directed by Lacy Cockrell</h5>
        <p>
            Our first stop traveling around the world is
            <span style="font-weight:bold;font-style:italic;">to the pyramids of Egypt</span>
            where the story of the love of a boy and a girl from opposing tribes was first told in 
            Verdi's famous opera that made Laurel's own Leontyne Price famous when she played the
            Princess Aida.  She recently wrote a children's book of the story and Sir Elton John used 
            that book as the basis of his pop musical that features his hit song "Written In The Stars"
            that became a chart topper for Leanne Rimes. 
        </p>
        <p>
            His fun score mixes all kinds of music from pop, reggae and gospel with influences from
            Motown to Middle Eastern.  Rumors have long swirled about a proposed movie version with 
            Beyonce and Christina Aguilera playing the lead roles.  LLT has secured the rights to open
            our season with the hit show this summer.
        </p>
        <p>
            <span style="font-weight:bold;font-style:italic;">
                Join us for exciting music with knock out voices, lots of humor and a tear-jerker
                of an ending!
            </span>
        </p>
        <p>
            Performances August 1-2-3 at 7:30PM and August 4 at 2PM
        </p>
        <p>
          <a class='call_to_action' 
             href="<?php echo "$relative_path" ?>pages/casts.php?years=<?php echo "$years_numbers";?>#aida">
             Click here for our <em>Aida</em> cast list.
          </a>
        </p>
        
    </div><!-- close of 'show' div -->
