<?php echo $this->partial('account/partials/accountNavBar'); ?>

<div class="container">
	<h2>My favorites properties</h2>

	<?php if (isset($myfavurites)) { ?>
		<?php if ($this->length($myfavurites) > 0) { ?>
			<?php foreach ($myfavurites as $row) { ?>
				<div class="row">
					<div class="col-md-6">		
						<div class='jumbotron'>
							<div class="row">
								<div class="col-md-6">

					  				<h2><?php echo $row->getpropertyID(); ?></h2>

					  				<img src="/images/<?php echo $row->getproperties()->getImage1(); ?>" width="160" height="150" class="thumbnail" style="margin-bottom: 0;" alt="" title="<?php echo $row->getproperties()->getPropertyID(); ?>" />

								</div>
							<div class="col-md-6">
								<div class="display">
									<h2 class="text2">&pound;<?php echo number_format($row->getproperties()->getPrice(), 2); ?></h2>
										<span class='help-block'>Price Includes ...</span>

										<h3><?php echo $row->getProperties()->getStreet(); ?></h3>

										<h4><?php echo $row->getProperties()->getTown(); ?></h4>

										<h4><?php echo $row->getProperties()->getType(); ?></h4>
								</div>
							</div>
						</div>	
						<hr>
				<!-- Delete favurite form -->
					 <form action="account/viewfavurites" method="post">
						<input type="hidden" name="propertyID" value="<?php echo $row->getpropertyID(); ?>">
						<button type="submit" value="<?php echo $row->getpropertyID(); ?>" class="btn btn-danger btn-lg " title="<?php echo $row->getpropertyID(); ?>"> Remove</button>
					</form>	 
					<a href="/index/propertydetails/<?php echo $row->getPropertyID(); ?>" class="btn btn-lg btn-default detailbutton">View Details</a>

					</div> 
				
					
					</div>      
				<?php } ?>
			<?php } else { ?>
				<div class='jumbotron text-center'>
					<h3>You have no properties in your favurite</h3>
				</div>
		<?php } ?>
	<?php } ?>
	</div>
</div><!-- End of container -->

<style>
.jumbotron h2 {
			margin-top: -35px;
	}
	.text2{
		
		color: green;
		margin-top: 50px;
	}
	.display{
		margin-top: 35px;
	}

	.detailbutton {
		margin-top: -13%;
		margin-left:60%;
	}
</style>
