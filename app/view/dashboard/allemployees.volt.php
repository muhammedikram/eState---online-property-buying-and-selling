<div class="container">
	<div class="col-md-10">
		<h2>All Employees</h2>

		<div class="table-responsive">
		  <table class="table">
			<thead>
				<tr>
					<th>Employee Number</th>
					<th>First Name</th>
					<th>Last Name</th>
					<th>Email</th>
				</tr>
			</thead>
			
			<tbody>
				<?php foreach ($employees as $employee) { ?>
					<tr>
						<td><?php echo $employee['employeeNumber']; ?></td>
						<td><?php echo $employee['firstName']; ?></td>
						<td><?php echo $employee['lastName']; ?></td>
						<td><?php echo $employee['email']; ?></td>
					</tr>
				<?php } ?>
			</tbody>
		</table>
		</div>
	</div>
</div>