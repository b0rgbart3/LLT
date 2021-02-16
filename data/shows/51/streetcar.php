<?php 
#$showImage = $_SESSION['website_home']/data/shows/nn/images/xxxxxxx.xxx
$showImage = dirname($_SESSION['website_home'] . substr(__FILE__,strlen($_SESSION['root'])));
$showImage = $showImage . "/images/streetcar.jpg";
?>
    <div id="street" class='show'>
        <p style="font-size:1.5em;text-align:center;">Tragic Characters</p>
        <img class="showpic"
        <?php echo 'src="' . $showImage . '"'; ?> 
             style="float:left;width:260px;margin-right:20px;"
             alt="Streetcar Named Desire"
             title="Streetcar Named Desire"/>

        <h2>A Streetcar<br />Named Desire</h2>
        <h4>February 23-26, 2012</h4>
        <br />
        <h5>Directed by Amanda Robertson</h5>

        <p>
            It's the Pulitzer Prize winning play written by Mississippi native Tennessee Williams, and 
            features <span class='chills'>Laurel's own most famous fictional character</span>, Blanche 
            DuBois.  Some say Blanche was based on a notorious real-life teacher from our area that was run 
            out of town because of her shady reputation.  She ended up living in New Orleans' steamy 
            French Quarter with her sister and brother-in-law, Stella and Stanley Kowalski.  Blanche is 
            a fading relic of the Old South, but a classic Southern belle who delivers that famous line 
            <i>"Whoever you are, I have always depended on the kindness of strangers."</i>
        </p>
        <p>
            <span class="showTitle">A Streetcar Named Desire</span> opened on Broadway in 1947, and 
            had a highly successful NYC revival in 1992 starring Jessica Lange and Alec Baldwin.  It's won eight 
            Tony Awards in its various Broadway productions, and negotiations are now underway for a Spring 2012 
            NYC revival with Blair Underwood set to play Stanley.
        </p>
        <p>
            The 1951 movie with Vivian Leigh and Marlon Brando was a huge hit as well, and won four Academy 
            Awards.  Locally, our own LLT production in 1978 was breathtakingly headlined by one of original 
            theatre founders, Page Harris. 
        </p>
        <p>
            Director Amanda Robertson will be looking for a 
            <span class='chills'>full cast of Southern characters</span>.  
            Come on down, ladies, if you're a Blanche or a Stella.....and men, she's gonna need a big ol'
            brute of a man to play Stanley!
        </p>
        <p>
            <span class='showTitle'>Streetcar</span> is PG15:  Some suggestive content; recommended for
            ages 15 and up.
        </p>
        <p>
          <a class='call_to_action' 
             href="<?php echo "$relative_path" ?>pages/casts.php?years=<?php echo "$years_numbers";?>#street">
             Click here for our <em>Streetcar Named Desire</em> cast list.
          </a>
        </p>
    </div><!-- close of 'show' div -->
