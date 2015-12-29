<?php echo $this->partial('account/partials/accountNavBar'); ?>

<div class="container">
	<h2>My properties for sale</h2>

		<!-- get the variable -->
	<?php if (isset($mySaleProperties)) { ?>
		<?php if ($this->length($mySaleProperties) > 0) { ?>
			<?php foreach ($mySaleProperties as $row) { ?>
				<div class='jumbotron style'>
					<div class="row">
						<div class="col-md-4">
							<img src="/images/<?php echo $row->getproperties()->getImage1(); ?>" width="160" height="150" class="thumbnail" style="margin-bottom: 0;" alt="" title="<?php echo $row->getproperties()->getPropertyID(); ?>" />
						</div>
						<div class="col-md-5">
							<div class="display">
									<h3><?php echo $row->getProperties()->getStreet(); ?></h3>
									<h4><?php echo $row->getProperties()->getTown(); ?></h4>
									<h4><?php echo $row->getProperties()->getType(); ?></h4>
							</div>
						</div>
						<div class="col-md-2">
							<form action="/account/deleteProperty" method="post">
								  <input type="hidden" name="propertyID" value="<?php echo $row->getpropertyID(); ?>">
								  <button type="submit" value="<?php echo $row->getpropertyID(); ?>" class="btn btn-danger glyphicon glyphicon-remove" title="<?php echo $row->getpropertyID(); ?>"> Remove</button>
							</form>
							<br><br>
							<form action="/account/editproperty/<?php echo $row->getpropertyID(); ?>" method="post">
								  <input type="hidden" name="propertyID" value="<?php echo $row->getpropertyID(); ?>">
								  <button type="submit" value="<?php echo $row->getpropertyID(); ?>" class="btn btn-success glyphicon glyphicon-pencil" title="<?php echo $row->getpropertyID(); ?>" name="editProperty" value="edit"> Edit</button>
							</form>	
						</div>
					</div>
						<hr>
					<div class="row">
						<div class="col-md-3">
							Created on:<?php echo $row->getCreated(); ?>
						</div>
						<div class="col-md-3">
							Add No: <?php echo $row->getPropertyID(); ?>
						</div>
						<div class="col-md-3">
							Add by: <?php echo $row->getMemberRegister()->getName(); ?>
						</div>
						<div class="col-md-3 forSale">
							For Sale
						</div>
					</div>
				</div>
			<?php } ?>
			<?php } else { ?>
				<div class='jumbotron text-center'>
					<h3>You have no properties for sale</h3>
				</div>
		<?php } ?>
	<?php } ?>


	<?php if (isset($myRentProperties)) { ?>
		<?php if ($this->length($myRentProperties) > 0) { ?>
			<?php foreach ($myRentProperties as $row) { ?>
				<div class='jumbotron style'>
					<div class="row">
						<div class="col-md-4">
							<img src="<?php echo $row->getRents()->getImage1(); ?>" width="160" height="150" class="thumbnail" style="margin-bottom: 0;" alt="" title="<?php echo $row->getRents()->getPropertyID(); ?>" />
						</div>
						<div class="col-md-5">
							<div class="display">
									<h3><?php echo $row->getRents()->getStreet(); ?></h3>
									<h4><?php echo $row->getRents()->getTown(); ?></h4>
									<h4><?php echo $row->getRents()->getType(); ?></h4>
							</div>
						</div>
						<div class="col-md-2">
							<form action="/account/deleteProperty" method="post">
								  <input type="hidden" name="propertyID" value="<?php echo $row->getpropertyID(); ?>">
								  <button type="submit" value="<?php echo $row->getpropertyID(); ?>" class="btn btn-danger glyphicon glyphicon-remove" title="<?php echo $row->getpropertyID(); ?>"> Remove</button>
							</form>
							<br><br>
							<form action="/account/editrentproperty/<?php echo $row->getpropertyID(); ?>" method="post">
								  <input type="hidden" name="propertyID" value="<?php echo $row->getpropertyID(); ?>">
								  <button type="submit" value="<?php echo $row->getpropertyID(); ?>" class="btn btn-success glyphicon glyphicon-pencil" title="<?php echo $row->getpropertyID(); ?>" name="editProperty" value="edit"> Edit</button>
							</form>	
						</div>
					</div>
						<hr>
					<div class="row">
						<div class="col-md-3">
							Created on:<?php echo $row->getCreated(); ?>
						</div>
						<div class="col-md-3">
							Add No: <?php echo $row->getPropertyID(); ?>
						</div>
						<div class="col-md-3">
							Add by: <?php echo $row->getMemberRegister()->getName(); ?>
						</div>
						<div class="col-md-3 forSale">
							For Rent
						</div>
					</div>
				</div>
			<?php } ?>
		<?php } ?>
	<?php } ?>
</div><!-- End of container -->





<style>
.style  {

			padding-bottom: 1%;
	}
	.text2{
		
		color: green;
		margin-top: 50px;
	}
	.display{
		margin-top: -20px;
		margin-left: -33%;
	}
	.addID{
		margin-left: 30%;
		margin-top: -2%;
	}

	.forSale{
		color: green;
		font-size: 16px;
		font-weight: bold;
	}
</style>

