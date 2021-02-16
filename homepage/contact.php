  <div id="ContactInfo" class='contact'>              
    <br /> 
    <img src="images/interface/llt_logo_neon.png" alt="" title=""/> 
    <br /> 
    <?php echo $_SESSION['llt_address']?><br /> 
    <?php echo "<a href=\"mailto:" . $_SESSION['llt_email'] . "\">" . $_SESSION['llt_email'] . "</a>" ?>
    <br /> 
    Reservations And Ticket Info <?php echo $_SESSION['llt_phone']?><br />(reservations taken only the week of each show)
</div>