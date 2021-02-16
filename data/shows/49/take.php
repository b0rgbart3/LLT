<?php 
#$showImage = $_SESSION['website_home']/data/shows/nn/images/xxxxxxx.xxx
$showImage = dirname($_SESSION['website_home'] . substr(__FILE__,strlen($_SESSION['root'])));
$showImage = $showImage . "/images/takeit_big.gif";
?>
    <div id="take" class='show'>
        <p style="font-size:1.5em;text-align:center;">From the 1930's</p>
    
        <img class="showpic"
        <?php echo 'src="' . $showImage . '"'; ?> 
             style="width:200px; float:left; margin-right:30px"
             alt="You Can't Take it With You Logo"
             title="You Can't Take it With You Logo"/>  
                           
             <h2>YOU CAN'T TAKE IT WITH YOU</h2>
             <ul>
                 <li>Ran 837 performances on Broadway</li>
                <li>Won the 1937 Pulitzer Prize for Drama</li>
                <li>1938 movie won the Oscar for Best Film</li>
                <li>First Presented at LLT in 1963 and 1992</li>
            </ul>
            <br />
            <h4>April 22nd-25th, 2010</h4>
            <br />
            <h5>Directed by Cynthia Tittle Welborn</h5>
            <br />
            <p>
                This zany Kaufman &amp; Hart comedy was the very first American comedy to win the Pulitzer Prize for Drama.
                The film version starred James Stewart, Jean Arthur and Lionel Barrymore and was the highest-grossing
                picture of that year.  Long time LLT member Cynthia Tittle Welborn will direct the story of a free-spirited 
                family that has just one sane 'normal' daughter who brings her fiance and future in-laws to visit 
                for a mapcap evening of craziness.
           </p>
           <p>
             <a class='call_to_action' 
                href="<?php echo "$relative_path" ?>pages/casts.php?years=<?php echo "$years_numbers";?>#takeit">
                Click here for our <em>You Can't Take It With You</em> cast list.
             </a>
           </p>
           
    </div><!-- close of 'show' div -->
