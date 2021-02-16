<!---HTML - from Bart -->

<meta charset = "UTF-8">
<html lang="en">
<!-- <meta http-equiv="refresh" content="10" />-->
    
<head>
  <link type="text/css" rel="stylesheet" href="../css/simple_style.css">
  <title>Laurel Little Theatre</title>
    <script src='https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js'></script> 
    <style>
    form.subscribe {
        border:2px solid black;
        padding:20px;
        margin:20px;
        background-color:#ffaa00;
        color:black;
        border-radius: 10px;
    }
    .subscribeLabel {
        color:black;
    }
    .LLTSubmit {
        font-size:1.1em;
        height:55px;
        padding:8px;
        padding-left:14px;
        padding-right:14px;
        border:0;
        background-color:#ffffff;
        border-radius:5px;
    }
    .LLTSubmit:hover {
        background-color:#000000;
        color:white;
    }
    .LLTinput {
        font-size:1.1em;
    }
    </style>
</head>

<body>
  <div class='masthead group'>

    <!--  The page is now divided into a left column and a right column -
          So EVERYTHING in the left column will appear inside this left column div
          before we have any right-column content at all.  (Even the Carousel is nested 
          in the right-hand column. ) -->

    <div class='logo'>
         <a href='../index.html'><img src="../images/logo_plate.png" alt="Laurel Little Theatre" title="Laurel Little Theatre"></a>
    </div>
    
    <nav id='secondLevel'>
        <p class="caption">In the Historic 1927 Downtown Arabian Theatre -- 5th Avenue -- Laurel, Mississippi</p> 
        <a href="../index.html" class="mainnav">Home</a> 
        <a href="tickets.html" class="currentpage">Ticket Info</a> 
        <a href="patrons.html" class="mainnav">Become a Patron</a> 
        <a href="location.html" class="mainnav">Our Location</a> <br />
        <a href="seasons_css.php" class="mainnav">Our Seasons</a>
        <a href="casts_css.php" class="mainnav">56 Years of Cast Lists</a> 
        <a href="patrons_css.php" class="mainnav">Our Current Patrons</a><br />
        <a href="boards_css.php" class="mainnav">56 Years of Board of Directors</a>
        <a href="../photos/index.html" class="mainnav">56 Years of Photos</a> 
        <a href="auditions.html" class="mainnav">Auditions</a><br />
        <a href="past_css.php" class="mainnav">56 Years of Shows</a>
        <a href="stories_css.php" class="mainnav">LLT/Arabian Theatre History and Stories</a>
    </nav>
  </div>  <!-- end of masthead -->
        
  <div class='page'>

    <div class="sidebar"> 

            <!-- Note:  I am now using h1 h2 and h3 to dilleniate the typographic hierarcy
                 instead of the old way of doing it where I used named styles.
                 The specificity of these h tags gets defined as '.sBox h1', and '.sBox h2'
                 in the stylesheet, which makes the content here more semantic, and less
                 cluttered with style references -->
                

    </div>   
            
    <div class='main'>
        <h2>Subscribe to the LLT Newsletter</h2>

<p>By subscribing to the LLT Newsletter, you will receive all the latest info on each upcoming season's shows.  We will NOT fill your inbox with weekly emails.  We will NOT sell your email address to other companies.
But we WILL send you an email every other month or so, with all the latest Theatre news!</p>

<form method="post" action="http://scripts.dreamhost.com/add_list.cgi" class='subscribe'>
<table cellpadding='2' cellspacing='8'><input type="hidden" name="list" value="news"/>
<input type="hidden" name="domain" value="laurellittletheatre.com"/>

<!-- Optional: -->
<input type="hidden" name="unsuburl" value="http://laurellittletheatre.com/news/unsubscribe.php" />
<input type="hidden" name="alreadyonurl" value="http://laurellittletheatre.com/news/already_on.php" />
<input type="hidden" name="notonurl" value="http://laurellittletheatre.com/news/not_on.php" />
<input type="hidden" name="invalidurl" value="http://laurellittletheatre.com/news/invalid_email.php" />
<input type="hidden" name="emailconfirmurl" value="http://laurellittletheatre.com/news/confirm_email.php" />
<input type="hidden" name="emailit" value="1" />
<tr><td class='subscribeLabel' align='right'>Name</td><td><input type="text" name="name" size='30' class='LLTinput'/></td></tr>

<!-- Required: -->
<tr><td class='subscribeLabel' align='right'>E-mail</td><td><input type="text" name="email" size='30' class='LLTinput'/></td></tr>

<!-- Optional: -->
<tr><td class='subscribeLabel' align='right'>Confirm E-mail</td><td><input type="text" name="address2" size='30' class='LLTinput'/></td></tr>
<tr><td colspan='2'><span style='font-size:.9em; color:black;'>(Please re-enter your email address, so we can confirm it.)</span></td></tr>
<!-- Required: -->
<tr><td></td><td align='right'><input type="submit" name="submit" value="Add me to the list" class='LLTSubmit' /></td><td></td></tr>

<!-- Optional: 
<tr><td><input type="submit" name="unsub" value="_Remove from list_" /></td><td></td></tr>
-->
</table>
</form>

        
        <div class="footer">    
            <a name="ContactInfo"></a>                    
            <br /> 
            <img src="../images/llt_logo_neon.png" alt="" title=""/> 
            <br /> 
            P. O. Box 2131  Laurel, MS 39442<br /> 
            <a href="mailto:LLTLaurelMS@aol.com">LLTLaurelMS@aol.com</a><br /> 
            Reservations And Ticket Info 601.428.0140<br />(reservations taken only the week of each show)
            <br /><br /> 
        </div> <!-- close of footer-->

    </div><!-- Close Main -->
</div><!-- Close page -->
</body>
</html>
