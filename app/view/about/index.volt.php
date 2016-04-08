
 <div class="container">
 	<div class="row">
 		<div class="col-md-8">
 			<h1>About Us</h1><br>

 			<p>eState is been completed as final year project, focused on empowering users to sell their properties themselves. We have put all the customers needs on one website now. People no longer need to visit numerour to buy or sell property even to buy or sell room.</p>

			<p>At eState we believe in difference so we aim to make the estate market more efficient for both property buyers and sellers. we believe in simplicity so we focused on building a channel that is for everyone.</p>

			<p>Our mission is to make this platform one of the leading online estate agent in UK, providing services that never been provied.</p>

 		</div>


 		
				<div class="col-md-4">
				<h2>Sweet Service</h2>
					<div class="panel panel-default	">
		  				<div class="panel-body">
		    			<?php if (isset($ratings)) { ?>
						<?php if ($this->length($ratings) > 0) { ?>
				
						<?php foreach ($ratings as $entry) { ?>
							<strong><?php echo ucwords($entry->getName()); ?></strong>	&nbsp;	&nbsp;	&nbsp;&nbsp;<img src="/images/stars/<?php echo $entry->getRating(); ?>"><br>
								<em>"<?php echo $entry->getComments(); ?></em>"
								<hr>
								<?php } ?> 

							<?php } else { ?>
							<div class='jumbotron text-center'>No Ratings to display.</div>
						<?php } ?>
					<?php } ?>
		  				</div>
					</div>
				</div>
 	</div>

 	<div class="row"></div>
 	<div class="col-md-8"></div>


	<div class="col-md-4">
		<div class="panel panel-default">
		  <div class="panel-heading">
		    <h3 class="panel-title">Follow us</h3>
		  </div>
		  <div class="panel-body">
		  		<a class="btn btn-block ">
			   		<i class="fa fa-facebook-square fa-4x"></i> 
			  </a>

			  <a class="btn btn-block ">
			   		<i class="fa fa-twitter-square fa-4x"></i> 
			  </a>

			
		  </div>
		</div>
	</div>
 </div>