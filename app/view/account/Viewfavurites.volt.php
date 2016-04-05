<?php echo $this->partial('account/partials/accountNavBar'); ?>

<div class="container">
	<h2>My favurites properties</h2>

	<?php if (isset($myfavurites)) { ?>
		<?php if ($this->length($myfavurites) > 0) { ?>
			<?php foreach ($myfavurites as $row) { ?>
				<div class="row">
					<div class="col-md-6">		
						<div class='jumbotron'>
							<div class="row">
								<div class="col-md-6">

					  				<h2><?php echo $row->getpropertyID(); ?></h2>

					  		
								</div>
							<div class="col-md-6">
								<div class="display">
								
										<span class='help-block'>Price Includes ...</span>

										<h3><?php echo $row->getProperties()->getStreet(); ?></h3>
<!-- 
								</div> -->
							</div>
						</div>	

				<!-- Delete favurite form -->
				
					
					</div> 
				
					
					</div>      
				<?php } ?>
			<?php } else { ?>
				<div class='jumbotron text-center'>
					<h3>You have no properties in your favurite</h3>
				</div>
		<?php } ?>
	<?php } ?>
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
</style>
