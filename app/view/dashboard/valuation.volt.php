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
					<th>price</th>
				</tr>
			<?php foreach ($valuationproperties as $row) { ?>
				<tr>
					<td><?php echo $row->getValuationID(); ?></td>
					<td><?php echo $row->getPropertyID(); ?></td>
					<td><?php echo $row->getMemberRegister()->getName(); ?></td>
					<td><?php echo $row->getDate(); ?></td>
					<td><a  class="btn btn-success" href="/index/propertydetails/<?php echo $row->getpropertyID(); ?>">More Details</a></td>
					<td>

						<form action="/dashboard/valuation" method="post">
			      				<input type="text" class="form-control" id="exampleInputAmount" placeholder="Price">
						</form>
					</td>
				</tr>
					<?php } ?>
				<?php } else { ?>
				<div class='jumbotron text-center'>No properties to be approved.</div>
			<?php } ?>
	<?php } ?>	
	</table>

		</div>
	</div>
</div>
