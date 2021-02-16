<?php 
#$showImage = $_SESSION['website_home']/data/shows/nn/images/xxxxxxx.xxx
$showImage = dirname($_SESSION['website_home'] . substr(__FILE__,strlen($_SESSION['root'])));
$showImage = $showImage . "/images/GoneWithTheWind.jpg";
?>
 <div id="gone_with" class='show group'>
    <p class='spectacular'>
      <h2>GONE WITH THE WIND</h2>
     
      <h4> 
        July 7th &amp; 8th at 2PM Each Day
        <br /><br />

        <span style='font-weight:900; font-style:italic; font-size:18px;'>
            JOIN IN FOR OUR MOVIE SCREENING!
            <br /><br />
        </span>
        
        <span style='font-size:15px'>The 1939 Classic Favorite</span>
        <br /><br />
      
        <span style="font-size:18px;">WINNER!</span>
      
        <br />
        
        10 Academy Awards Including Best Picture<br />
        All-Time Top Ten of the American Film Institute's Best Movies Ever!
      </h4>
      
      <br /><br />
    <?php echo "<img src=" . $showImage . " title=\"Gone With The Wind\" alt=\"Gone With The Wind\"/>"; ?>

    <p>
      When it premiered all across the country in 1939, <em>GONE WITH THE WIND</em> was projected
      at our very own Arabian Theatre for many weeks.  Re-releases in 1947, 1954, 1961, 1967 and
      a final run in 1971 (just a few years before the Arabian closed as a movie house and LLT
      bought the property) also made appearances at our theatre.  To the best of our knowledge,
      it was the most successful film to ever play at the Arabian, with the most total screenings
      over the 50 years it was an operating movie palace.        
    </p>
    <p>
      LLT will be showing <em>GONE WITH THE WIND</em> at 2pm on Saturday, July 7th and again
      at 2pm on Sunday, July 8th.<br /><br />
      <em>
        Admission is $5.<br /><br />
        No reservations - first come!<br /><br />
        Doors will open 1:15pm each day.
      </em>
    </p>
 </div><!-- close of 'show' div -->
 