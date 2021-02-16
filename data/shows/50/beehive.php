<?php 
#$showImage = $_SESSION['website_home']/data/shows/nn/images/xxxxxxx.xxx
$showImage = dirname($_SESSION['website_home'] . substr(__FILE__,strlen($_SESSION['root'])));
$showImage = $showImage . "/images/beehive.jpg";
?>
    <div id="behive" class='show'>
        <p style="font-size:1.5em;text-align:center;">From The 1960's</p>

        <img class="showpic"
        <?php echo 'src="' . $showImage . '"'; ?> 
             style="float:left;width:275px;margin-right:20px;"
             alt="Beehive Logo"
             title="Beehive Logo"/>
             
        <h2>BEEHIVE!<br />THE 60's MUSICAL!</h2>
        <h4>
            October 28-30 at 8pm<br />
            October 31 at 2pm<br />
            November 6 at 8pm<br />
            November 7 at 2pm
        </h4>
        <br />
        <h5>Directed by Wess Hughes</h5>
           
        <p>
            Do you remember when hair was hard and life was easy???  Big hair is back and so is the 
            infectious 'shoo-be-do-wop-wop' sound of the 1960's.  Take 35 wailing women and add 1 hot band, 
            99 big wigs, 60 costumes, 25 cans of hairspray and more than 40 of the greatest '60's hits, 
            and you get <span class='showTitle'>"BEEHIVE!  THE 60's MUSICAL!</span>
        </p>
        <p>
            A hit Off-Broadway musical revue of the great tunes of that decade, 
            <span class='showTitle'>BEEHIVE!</span> is a high energy parade of pop songs by The Supremes, 
            Petula Clark, Dusty Springfield, Aretha Franklin, Connie Francis, The Chiffons, Janis Joplin 
            and many, many others.  It has all the fringe, the sequins and the towering hair-dos that 
            marked that decade, and if you see a haze in the air around the Arabian Theatre this fall,
            it won't be smog.  It'll just be...Aquanet.
        </p>
        <p>
            Director Wess Hughes and Music Director Michelle Howells have an unbelievable cast that will
            knock your go-go boots off!  Start practicing now so you can sing along to "The Name Game"...
            <span style="font-style:italic;">
                Shirley, Shirley, bo birley, banana fanna fo firley, fee fi mo mirley...Shirley!
            </span>
        </p>
        <p>
          <a class='call_to_action' 
             href="<?php echo "$relative_path" ?>pages/casts.php?years=<?php echo "$years_numbers";?>#behive">
             Click here for our <em>Beehive!</em> cast list.
          </a>
        </p>
        
    </div><!-- close of 'show' div -->
