<!-- Eigth Box -->

<?php
  # The Boxes below will rotate color highlight as programmed in decide_class.php file.
  # The function is in memory as the index.php loads it and it can be used here.
  #
  # You must use ++$box_number.  NOT $box_number++.  One works. The other doesn't.
  # I Think it is because the ++$box_number has the increment happen BEFORE the call
  # and $box_number++ will happen AFTER the call
?>
<div class='<?php print decide_class_name(++$box_number,2)?>'>
    <p class="bright">OUR SEASON PRODUCTION SPONSOR</p> 
    <p>
        <a href="http://www.howard.com" target="_blank" rel="noopener noreferrer nofollow">
            <img src="data/patrons/images/hi_blue.png"
                 alt="Howard Industries"
                 title="Howard Industries"
                 style="vertical-align:top;
                        background-color: white;
                        border-radius: 10px;
	                    border:8px solid white;
	                    margin-top:8px;
						width:115px;">
        </a>
    </p>
    <p>
            <img src="data/patrons/images/missy_bill_sanderson_500.png"
                 alt="Missy & Bill Sanderson"
                 title="Missy & Bill Sanderson"
                 style="vertical-align:top;
                        background-color: white;
                        border-radius: 10px;
	                    border:8px solid white;
	                    margin-top:8px;
						width:115px;">
    </p>
    <br />
    <p class="bright">OUR SEASON CORPORATE SPONSORS</p> 
    <p>
        <a href="https://www.bekins.com/find-a-local-agent/agents/all-american-transfer-storage-inc/?a=5391&zip=&name=all-american%20transfer" target="_blank" rel="noopener noreferrer nofollow">
            <img src="data/patrons/images/american.png"
			     title="All-American Tranfer & Storage"
                 alt="All-American Tranfer & Storage"
                 style="vertical-align:top;
                        background-color: white;
                        border-radius: 10px;
	                    border:8px solid white;
	                    margin-top:8px;
						width:115px;">
        </a>
    </p>
    <p>
        <a href="http://clarkengineers.com/home/" target="_blank" rel="noopener noreferrer nofollow">
            <img src="data/patrons/images/cnc500.png"
                 alt="Clark Engineers" 
                 title="Clark Engineers"
                 style="vertical-align:top;
                        background-color: white;
                        border-radius: 10px;
	                    border:8px solid white;
	                    margin-top:8px;
						 width:115px;">
        </a>
  </p>
  <p>
      <a href="https://www.hgtv.com/shows/home-town/" target="_blank" rel="noopener noreferrer nofollow">
          <img src="data/patrons/images/Hometown_Logo_White_V07.jpg"
               alt="HGVT Home Town"
               title="HGVT Home Town"
               style="vertical-align:top;
                      background-color: white;
              	    border-radius: 10px;
              	    border:8px solid white;
               	    margin-top:8px;
					height:34px;
					width:115px;">
      </a>
  </p>
    <p>
      <img src="data/patrons/images/darlene_billy_montgomery_500.png"
           alt="Darlene & Billy Montgomery" 
           title="Darlene & Billy Montgomery"
           style="vertical-align:top;
                  background-color: white;
                  border-radius: 10px;
	              border:8px solid white;
	              margin-top:8px;
				  width:115px;">
  </p>
    <p>
      <a href="http://www.facebook.com/QuarterCentury2012" target="_blank" rel="noopener noreferrer nofollow">
        <img src="data/patrons/images/quarter_century.jpg"
             alt="Quarter Century Apparel" 
             title="Quarter Century Apparel" 
             style="vertical-align:top;
                    background-color: white;
                    border-radius: 10px;
	                border:8px solid white;
	                margin-top:8px;
				    width:115px;">
      </a>
  </p>
  
</div>

<!-- Close of Eighth Box -->
