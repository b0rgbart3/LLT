<?php session_start();
  include_once "../functions/set_session_vars.php";
  include_once "header.php";
?>

<div class='page group'>
  <div class="sidebar"> 
    <div class='sBox'>
      <?php include_once "../functions/add_to_mailing_list.php";?>
    </div>
  </div>   
            
  <div class='main group'>
    <div class='headBanner'>WOULD YOU LIKE TO BECOME AN LLT PATRON?</div>
      <div class='main_content padMe'>
        As Blanche DuBois says in <span class="showtitle">A Streetcar Named Desire</span>..."I have always depended 
        on the kindness of strangers."  And LLT is no different.  We also depend on the kindness and support 
        of our local friends, neighbors, relatives and businesses to keep our wonderful old Arabian Theatre 
        open and operating.
        <br /><br />
        Our ticket prices are kept low to allow as many folks as possible to attend our shows and the income 
        from ticket sales can only partially sustain our annual budget.  So we hope you'll think about
        becoming an LLT patron and help us out.
        <br /><br />
        And by the way.....In case you didn't know, in Tennessee Williams' script of <span class="showtitle">A Streetcar 
        Named Desire</span>, Blanche really is from Laurel and in every stage production of that show around the world 
        every year, audiences hear her talk about her life in Laurel, Mississippi.  Although it's a fictional character, 
        rumor always had it that she was based on a certain notorious Jones County dame.  Curiously, if you watch the 
        Marlon Brando movie, his slurred speech patterns makes our hometown sound more like Oriole, Mississippi.

        <br /><br />
        <h4 style="text-align:left;">Patron memberships also come with a few nice perks...</h4>
        <br />

        <ul class="llist" style="list-style-type:square;">
          <li>
            All our patrons will receive a complimentary drink (wine or soft drink) at every performance 
            they attend throughout the season.
          </li>
          <li>
            A section of reserved seats will be set aside at every performance through the year.  Those will 
            be held until 15 minutes before curtain just for the patrons to choose from.
          </li>
          <li>
            Patron membership includes season tickets that gets you into all of our productions for 
            the year.  There are different patron levels with varying numbers of season tickets with them.  
            INFO LISTED AT BOTTOM OF THIS PAGE.
          </li>
          <li>Tax deduction for the amount of your contribution over basic ticket price.</li>
          <li>
            Patron listing of your name or your company name in all our show playbills for all productions through 
            the year and also listed on our website.
          </li>
        </ul>
          
        <br />
        <h4>REGULAR SEASON MEMBERSHIPS</h4>
        <br />
        
        <ul class="llist">
          <li>
            You get four punches on your season ticket and can use one or two punches per show.<br />
          </li>
          <li>
            Adult Season Ticket is $55 for four punches to cover all four shows of the year.
          </li>
          <li>
            Senior Citizen/Student Season Ticket is $50 for four punches to cover all four shows of the year.
          </li>
          <li>
            Family Season Package is $100 for two full season tickets or $190 for four full season tickets.
          </li>
        </ul>
        
        <br />
        <h4>PATRON SEASON MEMBERSHIPS</h4>
        <br />                
      
        <ul class="llist">
          <li>
            Includes complimentary drink at each performance, listing in each show program and on our LLT 
            website, a choice of seats from our reserved patron's section at each performance, tax deduction 
            and season tickets.
          </li>
          <li>
            Three different levels of patron membership are noted in the program as either 'Director,' 
            'Producer,' or 'Benefactor' and then there are three different levels for corporate sponsors.
          </li>
          <li>
            <span style="color:#FFFFFF">Single Adult Patron</span> for either $155 ('Director'), $255 
            ('Producer') or $380 ('Benefactor') gets you all those benefits plus one season ticket.
          </li>
          <li>
            <span style="color:#FFFFFF">Couple's Adult Patron</span> for either $200 ('Director'), $300 
            ('Producer') or $425 ('Benefactor') gets you all those benefits plus two season tickets.
          </li>
          <li>
            <span style="color:#FFFFFF">Family Patron</span> for either $290 ('Director'), $390 
            ('Producer') or $515 ('Benefactor') gets you all those benefits plus four season tickets.
          </li>
          <li>
            <span style="color:#FFFFFF">Corporate Patron</span> $750 includes all the patron benefits 
            plus four season tickets.
          </li>
          <li>
            <span style="color:#FFFFFF">Corporate Sponsor</span> for $1500 includes all the patron 
            benefits plus 8 season tickets and your company logo on the home page of our LLT website.
          </li>
          <li>
            <span style="color:#FFFFFF">Production Sponsor</span> for $3000 includes all the patron benefits 
            plus 16 season tickets, a full page ad in all show programs, your company logo on the home page 
            of our LLT website and your company logo on the title page of each show program.
          </li>
          <li>
            <a href="../images/brochures/brochure60.pdf" 
               target="_blank" 
               rel="noopener noreferrer nofollow">
               CLICK HERE to download this season's brochure to your desktop
            </a>
          </li>
        </ul>
         
        <br />
        For further info, call <strong><?php echo $_SESSION['llt_phone']?></strong> on show week or email 
        <?php 
          echo "<a href=\"mailto:" . $_SESSION['llt_email'] . "\">" . $_SESSION['llt_email'] . "</a>"
        ?>
        <br />
      </div><!-- Close secondLevel Content div -->
    </div><!-- Close Main -->
  </div> <!-- close page -->

<?php include_once "footer.php"; ?>
</body>
</html>
