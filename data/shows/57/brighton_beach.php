<?php 
#$showImage = $_SESSION['website_home']/data/shows/nn/images/xxxxxxx.xxx
$showImage = dirname($_SESSION['website_home'] . substr(__FILE__,strlen($_SESSION['root'])));
$showImage = $showImage . "/images/brighton.jpg";    
?>
 <div id="brighton" class='show group'>
    <h1>Neil Simon's</h1>
    <p class='spectacular'>SPECTACULARLY FUNNY!!!</p>

    <h2>BRIGHTON BEACH MEMOIRS</h2>
     
    <h4>
        November 2-3-4 at 730PM<br />
        November 5 at 2PM<br />
    </h4>
    
    <p class='reservation_line'>       
      <?php
        $temp=explode(".",basename(__FILE__));
        $the_show=$temp[0];  
  
        reservation_print_yes_no($the_show,$years_numbers,$date_array);
      ?>
    </p>    

    <h5>Directed by Rick Youngblood</h5>
     
    <?php echo "<img src=" . $showImage . " title=\"Brighton Beach Memoirs\" alt=\"Brighton Beach Memoirs\"/>"; ?>

    <p>
       America's favorite comedy writer based this on his own life as a 1930s Brooklyn teen.  Coming of age may not be 
       easy - <i>but it sure can be funny!</i>  The three things always on his mind?  Girls, Yankees baseball, and 
       becoming a comedy writer!
    </p>

    <p>
       This funny play is not only Simon's greatest, but also his most moving. As a critic said, "I laughed, then I 
       cried, then I laughed again because I cried."   
    </p>
    <a class='call_to_action'
       href="<?php echo "$relative_path" ?>pages/casts.php?years=<?php echo "$years_numbers";?>#brighton">
       Click here for our <em>Brighton Beach Memoirs</em> cast list.
    </a>
    <br /><br />
             
</div><!-- close of 'show' div -->