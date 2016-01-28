<div class="container">
	<h1>Properties awaiting for approvel</h1>


		<table class="table table-hover">
		<?php if (isset($notenabledproperties)) { ?>
			<?php if ($this->length($notenabledproperties) > 0) { ?>
				<tr>
					<th>Property ID</th>
					<th>Customer Name</th>
					<th></th>
				</tr>
			<?php foreach ($notenabledproperties as $row) { ?>
				<tr>
					<td><?php echo $row->getPropertyID(); ?></td>
					<td><?php echo $row->getMemberRegister()->getName(); ?></td>
					<td>For Sale</td>
					<td><a href="/dashboard/approveproperty/<?php echo $row->getpropertyID(); ?>">Approve</a></td>
				</tr>
					<?php } ?>
				<?php } else { ?>
				<div class='jumbotron text-center'>No properties to be approved.</div>
			<?php } ?>
	<?php } ?>

	<!-- get all rent request properties-->

		<?php if (isset($notenabledrentsproperties)) { ?>
			<?php if ($this->length($notenabledrentsproperties) > 0) { ?>
			
			<?php foreach ($notenabledrentsproperties as $row) { ?>
				<tr>
					<td><?php echo $row->getPropertyID(); ?></td>
					<td><?php echo $row->getMemberRegister()->getName(); ?></td>
					<td>To Rent</td>
					<td><a href="/dashboard/approverentproperty/<?php echo $row->getpropertyID(); ?>">Approve</a></td>
				</tr>
					<?php } ?>
				<?php } else { ?>
			<?php } ?>
	<?php } ?>
	</table>	


</div>