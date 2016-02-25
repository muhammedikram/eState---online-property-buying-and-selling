<div class="container">
	<h2>Viewings Requests</h2>
<br><br>
	<div class="col-md-12">
		<table class="table table-hover">
			<?php if (isset($viewings)) { ?>
			<?php if ($this->length($viewings) > 0) { ?>
			<tr>
				<th>Viewing ID</th>
				<th>Viewer Name</th>
				<th>Date</th>
				<th>Time</th>
			</tr>
			
				<?php foreach ($viewings as $row) { ?>

				<tr>
					<td><?php echo $row->getViewingID(); ?></td>
					<td><?php echo $row->getName(); ?></td>
					<td><?php echo $row->getDate(); ?></td>
					<td><?php echo $row->getTime(); ?></td>
					<td>
						<form action="/account/bookingrequests/<?php echo $row->getpropertyID(); ?>" method="post">
							 <button type="submit" class="btn btn-sm btn-success" name="action" value="approve" value="approve">
                				<span class="glyphicon glyphicon-ok"></span>
                   				Approve
           					 </button>
             
						</form>

					</td>
				</tr>
					<?php } ?>
							<?php } else { ?>
				<div class='jumbotron text-center'>No any property viewing requests are been received.</div>
			<?php } ?>
	<?php } ?>	

		</table>
	</div>
</div>
