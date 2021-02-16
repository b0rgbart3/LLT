<?php 
#$showImage = $_SESSION['website_home']/data/shows/nn/images/xxxxxxx.xxx
$showImage = dirname($_SESSION['website_home'] . substr(__FILE__,strlen($_SESSION['root'])));
$showImage = $showImage . "/images/thewomen.jpg";
?>
    <div id="women" class='show'>
        <img style="width:232px; float:right; margin-left:10px"
        <?php echo 'src="' . $showImage . '"'; ?> 
             alt="The Women Logo"
             title="The Women Logo"/>    
      
     <h2>THE WOMEN</h2>
     <h4>May 21-24, 2009</h4>
     <br />
     <h5>Directed by Cynthia Welborn</h5>
     <p>
         The classic comedy <span class="showtitle">The Women</span> was written by Clare Booth Luce and 
         opened on Broadway in 1936. It was later made into a hit film in 1939 starring Joan Fontaine,
         Rosalind Russell, Norma Shearer and Joan Crawford.  Several successful revivals have graced 
         the Broadway stages over the decades since then and a remake of the movie came out this year
         with award winning actresses Meg Ryan, Annette Bening, Candice Bergen, Debra Messing and Jada 
         Pinkett Smith.  
    </p>
    <p>
        LLT first presented a production with a local all-star cast back in 1963 and we're excited to be
        bringing it back one more time.  The play is a wisecracking social satire about the lives of
        socialite friends featuring an entirely female cast of over 30 women.  Come hear what all the 
        gossip is about and watch the hilarity ensue with <span class="showtitle">The Women!</span>
    </p>
    <p>
      <a class='call_to_action' 
         href="<?php echo "$relative_path" ?>pages/casts.php?years=<?php echo "$years_numbers";?>#women">
         Click here for our <em>The Women</em> cast list.
      </a>
    </p>
    
</div><!-- close of 'show' div -->
