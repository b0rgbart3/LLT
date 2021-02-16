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
        border:2px solid white;
    }
    .LLTSubmit:hover {
        background-color:#000000;
        color:white;
        border:2px solid white;
    }
    .LLTSubmit:active {
        color:black;
        background-color:white;
        border:2px solid black;
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
        <h2>The email you entered is invalid.</h2>

<p>
<a href='subscribe.php'>Click here if you would like to try again.</a>
</p>

        
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
