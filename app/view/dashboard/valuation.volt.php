<div class="container">
<?php echo $this->partial('dashboard/partials/dashboardNavBar'); ?>

	<div class="row">
		<h2>Properties Valuation Requests</h2>
		<div class="col-md-12">
		<table class="table table-hover">
		<?php if (isset($valuationproperties)) { ?>
			<?php if ($this->length($valuationproperties) > 0) { ?>
				<tr>
					<th>Valuation ID</th>
					<th>Property ID</th>
					<th>Customer Name</th>
					<th>Date</th>
					<th>Details</th>
					<th> Add Price</th>
				</tr>
			<?php foreach ($valuationproperties as $row) { ?>
				<tr>
					<td><?php echo $row->getValuationID(); ?></td>
					<td><?php echo $row->getPropertyID(); ?></td>
					<td><?php echo $row->getMemberRegister()->getName(); ?></td>
					<td><?php echo $row->getDate(); ?></td>
					<td><a  class="btn btn-primary" href="/index/propertydetails/<?php echo $row->getpropertyID(); ?>">More Details</a></td>
					<td>
					<button type="submit"data-toggle='modal' data-target='#valuationprice' class="btn btn-success registerButton">Add Price</button>
					</td>
				</tr>
	

<div class="modal fade" id="valuationprice">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h3 class="modal-title text-center">Set Price<br>Property ID: <?php echo $row->getPropertyID(); ?></h3>
      </div>
      <div class="modal-body">
        <div class='modal-container'>
           <div class="row">
              <form  action="/dashboard/valuation/<?php echo $row->getPropertyID(); ?>" method="post"role="form">
                  <div class="col-lg-12">
                     <div class="form-group">
				    <label for="exampleInputAmount">Price</label>
				    <div class="input-group">
				      <div class="input-group-addon">£</div>
				      <input type="text" class="form-control" id="exampleInputAmount" name="price" placeholder="Price">
				    </div>
				  </div>
                  </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                      <button type="submit" name="setprice" value="settheprice"class="btn btn-success offer-submit">Set Price</button>
                    </div>
                    <div class="alert alert-info" role="alert">Please Note: Setting price will automatically enable property in system</div>

              </form>
            </div>
          </div>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

				<?php } ?>
				<?php } else { ?>
				<div class='jumbotron text-center'>No properties to be valued.</div>
			<?php } ?>
	<?php } ?>	
	</table>

		</div>
	</div>

	
		<!-- Prvious valuated properties -->
		<h2>Previous valuated properties</h2>

			<div class="col-md-12">
		<table class="table table-hover">
		<?php if (isset($valuedproperties)) { ?>
			<?php if ($this->length($valuedproperties) > 0) { ?>
				<tr>
					<th>Valuation ID</th>
					<th>Property ID</th>
					<th>Customer Name</th>
					<th>Date</th>
					<th>Price</th>
					<th></th>
				</tr>
			<?php foreach ($valuedproperties as $entry) { ?>
				<tr class="alert alert-danger">
					<td><?php echo $entry->getValuationID(); ?></td>
					<td><?php echo $entry->getPropertyID(); ?></td>
					<td><?php echo $entry->getMemberRegister()->getName(); ?></td>
					<td><?php echo $entry->getDate(); ?></td>
					<td><a  class="btn btn-primary" href="/index/propertydetails/<?php echo $entry->getpropertyID(); ?>">More Details</a>
					</td>

					<td>
					<form  action="/dashboard/valuation/<?php echo $entry->getpropertyID(); ?>"method="post" >
						<button type="submit" name="remove" value="removebadenable" class="btn btn-success">Remove</button>
						</form>


					</td>
				</tr>
					<?php } ?>
				<?php } else { ?>
				<div class='jumbotron text-center'>No previous properties been valued.</div>
			<?php } ?>
	<?php } ?>	
	</table>

		</div>
</div>



<style>
	.price{
		width: 50%;
	}
</style>