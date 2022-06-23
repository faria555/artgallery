
<?php
		$page="aboutus";
		$title="About us";
		require_once('header.php');
		include('Admin/conn.php');
		$query="select * from pages where page_nm='about_us'";
		$result=mysqli_query($link,$query)  or die("Error fetching data.".mysqli_error($link));
		$row=mysqli_fetch_assoc($result);
		$desc=$row['page_desc'];
		
?>
		<div class="row about_container">
            <div class="col-md-9">
                <div class="panel panel-default">
				  <div class="panel-heading">About us</div>
                  <div class="panel-body">
                    <p class="about_us_info">
                        <?php echo $desc; ?>

						Assalamu alaikum,I'm Faria Ahammed Mim.
						An Art Gallary is an Exhibition space for the display and sale of artorks.
						as a result,that art gallery is a commercial enterprise working with a portfolio of artists in which the gallery acts as the dealer respresting,supporting and distributing the artworks by the artists in uestion.
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