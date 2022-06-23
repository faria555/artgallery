<?php
	$page="arts";
	$title="Arts";
	require_once('header.php');
	
?>	
	<div class="container-fluid">
		  <div class="row art_inner">
			<div class="col-md-9">
                <div class="panel panel-default">
				  <div class="panel-heading"></div>
                  <div class="panel-body">
                    <p class="about_us_info">
					<div class="row recent_img">
                                <div class="col-md-4"><img src="images/calligraphy.jpg" class="img-thumbnail home_img" alt="Buy"></div>
                                <div class="col-md-4"><img src="images/flowervase.jpg" class="img-thumbnail home_img" alt="Buy"></div>
                                <div class="col-md-4"><img src="images/redflower.jpg" class="img-thumbnail home_img" alt="Buy"></div>
								<div class="row recent_img">
                                <div class="col-md-4"><img src="images/calligraphy.jpg" class="img-thumbnail home_img" alt="Buy"></div>
                                <div class="col-md-4"><img src="images/flowervase.jpg" class="img-thumbnail home_img" alt="Buy"></div>
                                <div class="col-md-4"><img src="images/redflower.jpg" class="img-thumbnail home_img" alt="Buy"></div>
                              </div>
                              </div>
                    </p>
                  </div>
                </div>
                </div>
            <?php
				require('right_side_cart.php');
			?> 
		  </div>
		  
<?php
	require('footer.php');
?>