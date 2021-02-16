<?php 
#$showImage = $_SESSION['website_home']/data/shows/nn/images/xxxxxxx.xxx
$showImage = dirname($_SESSION['website_home'] . substr(__FILE__,strlen($_SESSION['root'])));
$showImage = $showImage . "/images/oz.png";
?>
 <div id="wizard" class='show group'>
    <h1>CLASSIC MOVIE SCREENING</h1>
    <p class='spectacular'>
      <span style='font-weight:900; font-style:italic; font-size:18px; color:#ff9900'>THIS WEEKEND</span><br />
      The 1939 Fan Favorite
    </p>

      <h2>THE WIZARD OF OZ</h2>
     
      <h4> 
        August 18 &amp; 19 at 2PM<br />
      </h4>
    <br /><br />
    <?php echo "<img src=" . $showImage . " title=\"Wizard of OZ\" alt=\"Wizard of OZ\"/>"; ?>

    <p>
      We're screening everyone's favorite Judy Garland movie two times this weekend.  
      Showings are at 2pm on Saturday, August 18th and again at 2pm on Sunday, August 19th.
    </p>
    <p>
      Doors open at 1:15pm and admission is $5 per person.  Concessions will be available.  Come
      on down and join us at this benefit for the Arabian.
    </p>
    <p>
      <em>THE WIZARD OF OZ</em> has always made the American Film Institute's Top-Ten Movies List, and 
      it was an Oscar nominee for Best Picture.  It won Academy Awards for the memorable score, and 
      for Best Song for "Somewhere Over the Rainbow" - and a special Oscar was presented to Judy Garland
      for Outstanding Juvenile Performance.
    </p>
 </div><!-- close of 'show' div -->
 