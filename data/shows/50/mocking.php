<?php 
#$showImage = $_SESSION['website_home']/data/shows/nn/images/xxxxxxx.xxx
$showImage = dirname($_SESSION['website_home'] . substr(__FILE__,strlen($_SESSION['root'])));
$showImage = $showImage . "/images/mockingbird.jpg";
?>
    <div id="bird" class='show'>
        <p style="font-size:1.5em;text-align:center;">From the 1960's</p>

        <img class="showpic"
        <?php echo 'src="' . $showImage . '"'; ?> 
             style="float:left;width:170px;margin-right:20px;"
             alt="To Kill a Mockingbird Logo"
             title="To Kill a Mockingbird Logo"/>
             
        <h2>TO KILL A MOCKINGBIRD</h2>
        <h4>January 13-16, 2011</h4>
        <br />
        <h5>Directed by Jennifer Coghlan &amp; Adam Trest</h5>

        <p>
            And what else premiered 50 years ago-the same time LLT was getting started?  Alabama 
            author Harper Lee wrote her poignant drama <span class='showTitle'>TO KILL A MOCKINGBIRD</span>
            back in 1960, and the best selling novel went on to become a Pulitzer Prize winner and 
            a classic of modern American literature.
        </p>
        <p>
            The 1962 movie was a huge box office and critical success and was nominated for 8 Academy 
            Awards.  It won 3 Oscars including a Best Actor statue for Gregory Peck's portrayal of 
            attorney Atticus Finch-a character that Harper Lee had based on her own dad and the true
            story of an event of racial inequality that he had experienced in their Southern hometown
            when Harper was still a young child.  The drama is renowned for its warmth and humor and is
            a truly memorable tear-jerker of a production.
        </p>
        <p>
          <a class='call_to_action' 
             href="<?php echo "$relative_path" ?>pages/casts.php?years=<?php echo "$years_numbers";?>#mockingbird">
             Click here for our <em>To Kill a Mockingbird</em> cast list.
          </a>
        </p>
        
    </div><!-- close of 'show' div -->
