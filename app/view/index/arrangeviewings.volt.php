<div class="container">
	<h2>Arrange Viewings</h2>
		<?php foreach ($arrangeviewproperties as $prop) { ?>
		<div class="row">
			<div class="col-md-3">
				<img src="/images/<?php echo $prop->getImage1(); ?>"  width="250" height="250" style="margin-left: 10px;" alt="" title="<?php echo $prop->getPropertyID(); ?>" />
			</div>

			<div class="col-md-4">
				<p>
				<strong>Address:</strong><?php echo $prop->getStreet(); ?>,<?php echo $prop->getTown(); ?>,<?php echo $prop->getPostcode(); ?></p>
				<p><strong>Price:</strong>&pound;<?php echo number_format($prop->getPrice(), 2); ?></p>
			</div>
		</div><!-- end of row -->

		<br>
		<div class="row">
			<p>Complete the form below in order to book viewing.</p>



		</div>
		<?php } ?>
</div><!-- end of container -->