<?php 
#$showImage = $_SESSION['website_home']/data/shows/nn/images/xxxxxxx.xxx
$showImage = dirname($_SESSION['website_home'] . substr(__FILE__,strlen($_SESSION['root'])));
$showImage = $showImage . "/images/dixie.png";
?>
    <div id="Dixie" class='show'>
        <h1>RAISE THE ROOF!</h1>
        <h2>We're Building the LLT Pinehurst Room!</h2>
        <br />    
        <img style="float:right; width:210px;margin-left:10px;"
        <?php echo 'src="' . $showImage . '"';?>
             alt="The Dixie Swim Club Logo"
             title="The Dixie Swim Club Logo" />
        <br />   
        <h2>THE DIXIE SWIM CLUB</h2>
        <h3>
            Last Season's Hilarious Comedy Returns<br />
            A SPECIAL FUNDRAISER<br /><br />
            <span class="blurb_highlight">Not Part Of The Regular Season</span>
        </h3>
        <br />
        <h4>September 13-15, 2013</h4>
        <br />
        <h5>Directed by Frankie Bennett</h5>

        <p>
            After a great run at LLT this spring, we travel once again 
            <span style="font-weight:bold;font-style:italic;">to the North Carolina beaches</span> 
            as we bring back this deliciously funny southern comedy.  All of our 
            original cast returns for this special fundraiser for our new Pinehurst Room.  
        </p>
        <p>
            Imagine the sassy gals of <span class='showTitle'>Steel Magnolias, Designing Women</span> and 
            <span class='showTitle'>Golden Girls</span> all wrapped up in one hilarious comedy and you'd 
            have <span class='showTitle'>THE DIXIE SWIM CLUB!</span>  Five Southern ladies that were on
            their college swim team have remained life-long friends and meet every summer at a North
            Carolina beach cottage to get free from husbands, kids and jobs.  You'll see them age through
            their 40s, 50s, 60s and 70s as they dish about their loves, meddle in each others lives and
            laugh 'til they cry.
        </p>
        <p>
            <span class='showTitle'>THE DIXIE SWIM CLUB</span> is a deliciously funny gut-busting
            Southern-fried comedy.  You'll laugh out loud and roar with laughter until your face hurts!  
            <span style="font-weight:bold;font-style:italic;">
                Sit a spell and let the humor wash over you like an ice-cold Dr. Pepper on a hot summer day!
            </span> 
        </p>
        <p>
            Our million dollar Pinehurst Room Fundraiser Drive is approaching the 20% mark and we'll continue 
            to raise funds so we can hopefully kick off the construction in the next year!  Consider a donation 
            and have your name on the engraved tiles on the Wall of Honor in the new room.  For more 
            information, <a href="pinehurst.html">click here for our sketches, plans and donor forms</a>.
        </p>
        <p>
            <span class="blurb_highlight">This production is not part of the four punch season ticket.</span>
        </p>
        <p>
            Performances September 13-14 at 7:30PM and September 15 at 2PM
        </p>
        <p>
          <a class='call_to_action' 
             href="<?php echo "$relative_path" ?>pages/casts.php?years=<?php echo "$years_numbers";?>#dixie">
             Click here for our <em>The Dixie Swim Club</em> cast list.
          </a>
        </p>
        
    </div><!-- close of 'show' div -->
