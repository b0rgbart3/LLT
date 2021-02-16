<?php 
#$showImage = $_SESSION['website_home']/data/shows/nn/images/xxxxxxx.xxx
$showImage = dirname($_SESSION['website_home'] . substr(__FILE__,strlen($_SESSION['root'])));
$showImage = $showImage . "/images/jungle.gif";
?>
    <div id="jungle" class='show'>
        <img style="width:208px; height:208px; float:right; margin-left:10px"
        <?php echo 'src="' . $showImage . '"'; ?> 
             alt="The Jungle Book Logo"
             title="The Jungle Book"/>

        <h2>Disney's The Jungle Book - Kids Camp</h2>
        <h4>JUNE 2nd - 8th, 2008 </h4>
        <br />
        <h5>Laurel Little Theatre</h5>
        <p>
            This will be an intensive theatre workshop for children ages 5-15. Students will focus on improving or 
            developing skills in dancing, acting and singing. This summer we will present the Disney musical 
            <span class="showtitle">The Jungle Book.</span> There will be a lot of chorus numbers, solos and 
            acting parts so that everyone gets involved. This workshop is definitely for the student who loves performing. 
        </p>        
    </div><!-- close of 'show' div -->
