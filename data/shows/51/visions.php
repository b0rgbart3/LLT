<?php 
#$showImage = $_SESSION['website_home']/data/shows/nn/images/xxxxxxx.xxx
$showImage = dirname($_SESSION['website_home'] . substr(__FILE__,strlen($_SESSION['root'])));
$showImage = $showImage . "/images/frankieb.jpg";
?>
    <div id="vision" class='show'>
        <p style="font-size:1.5em;text-align:center;">Musical Characters</p>
        <img class="showpic"
        <?php echo 'src="' . $showImage . '"'; ?> 
             style="float:left;width:260px;margin-right:20px;"
             alt="Visions of Broadway Logo"
             title="Visions of Broadway Logo"/>
    
        <h2>Visions of Broadway<br />A Frankie B. Revue</h2>
        <h4>April 19-22, 2012</h4>
        <br />
        <h5>Directed by Frankie Bennett </h5>

        <p>
            It's a season ending musical revue! Broadway is brimming with great musicals that sometimes bypass local 
            community theatres. Next spring, <span class='showTitle'>Visions of Broadway-A Frankie B. Revue</span>
            will bring to life the songs from those shows right on our very own LLT stage. Gracing the Arabian
            audiences will be <span class="chills">musical characters</span> from classics that have been
            recently revived on Broadway such as <span class='showTitle'>Guys &amp; Dolls</span> and 
            <span class='showTitle'>West Side Story</span>; show tunes from current Broadway hits that have 
            never been produced on the LLT stage (but might one day!) such as 
            <span class='showTitle'>Mary Poppins</span>, <span class='showTitle'>Catch Me If You Can</span>,
            and <span class='showTitle'>Follies</span>; and even great musical numbers from shows that possibly 
            will never come to the local stage in their entirety due to limitations of budget, size or
            content such as <span class='showTitle'>Young Frankenstein</span> and
            <span class='showTitle'>Priscilla Queen of the Desert</span>. Director Frankie Bennett has
            put together her own <span class='showTitle'>Visions of Broadway</span> with a revue that
            is certain to be star-studded with many of your favorite LLT performers. 	
        </p>
        <p>
          <a class='call_to_action' 
             href="<?php echo "$relative_path" ?>pages/casts.php?years=<?php echo "$years_numbers";?>#revue">
             Click here for our <em>Visions of Broadway</em> cast list.
          </a>
        </p>
        
    </div><!-- close of 'show' div -->
