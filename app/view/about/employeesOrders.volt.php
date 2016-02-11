<div style='padding:10px;'>
<?php
	$date = date('Y-m-d');
	$minusMonth = date('Y-m-d', strtotime('-170 month')); 
?>

<?php echo $this->tag->form(array('about/employeesOrders', 'method' => 'post', 'role' => 'form')); ?>
<div class='panel panel-primary outer-panel'>
	<div class='panel-body'>
		<div class='row'>
			<div class='col-xs-4'>
				<div class='form-group'>
					<label for='salesemployee'>Sales Employee</label>
					<select name='salesemployee' class='form-control'>
 				<?php foreach ($employees as $person) { ?>
 				<option <?php if ($selected == $person['employeeNumber']) { ?>selected<?php } ?> value='<?php echo $person['employeeNumber']; ?>'><?php echo $person['firstName']; ?></option>
 						<?php } ?>
 					</select>
				</div>
			</div>
			<div class='col-xs-4'>
				<div class='form-group'>
					<label for='from'>From</label>
					<input type='date' value='<?php echo $minusMonth; ?>' name='from' class='form-control'/>
				</div>
			</div>
			<div class='col-xs-4'>
				<div class='form-group'>
					<label for='to'>To</label>
					<input type='date' value='<?php echo $date; ?>' name='to' class='form-control'/>
				</div>
			</div>
		</div>
	</div>
		<div class='panel-footer'>
		<div class='pull-right'>
			<button type='button' id='spreadsheet_settings' class='btn btn-primary' data-toggle="modal" data-target="#settings">
            	<span class='glyphicon glyphicon-cog'></span>
            	Spreadsheet Settings
            </button>
			<button type='submit' name='action' value='download' class='btn btn-primary'>Download</button>
			<button type='submit' name='action' value='search' class='btn btn-success'>Search</button>
		</div>
		<div class='clearfix'></div>
	</div>

<?php echo $this->tag->endForm(); ?>

<?php if (isset($employeesOrders)) { ?>

<div class='panel panel-primary outer-panel'>
	<div class='panel-heading'>Sales by Employees</div>
	<div class='panel-body'>

		<?php if ($this->length($employeesOrders) > 0) { ?>

		<table class='table table-striped'>
			<thead>
				<tr>
				<td>#</td>
			<th>Employee Number</th>
			<th>First Name</th>
			<th>Order Number</th>
			<th>Order Date</th>
			<th>Status</th>
		</tr>
			</thead>
			<tbody>
				
				<?php $v142334550354380562011iterator = $employeesOrders; $v142334550354380562011incr = 0; $v142334550354380562011loop = new stdClass(); $v142334550354380562011loop->length = count($v142334550354380562011iterator); $v142334550354380562011loop->index = 1; $v142334550354380562011loop->index0 = 1; $v142334550354380562011loop->revindex = $v142334550354380562011loop->length; $v142334550354380562011loop->revindex0 = $v142334550354380562011loop->length - 1; ?><?php foreach ($v142334550354380562011iterator as $employeeOrder) { ?><?php $v142334550354380562011loop->first = ($v142334550354380562011incr == 0); $v142334550354380562011loop->index = $v142334550354380562011incr + 1; $v142334550354380562011loop->index0 = $v142334550354380562011incr; $v142334550354380562011loop->revindex = $v142334550354380562011loop->length - $v142334550354380562011incr; $v142334550354380562011loop->revindex0 = $v142334550354380562011loop->length - ($v142334550354380562011incr + 1); $v142334550354380562011loop->last = ($v142334550354380562011incr == ($v142334550354380562011loop->length - 1)); ?>
			
					<tr>
				<td><?php echo $v142334550354380562011loop->index; ?></td>
				<td><?php echo $employeeOrder['employeeNumber']; ?></td>
				<td><?php echo $employeeOrder['firstName']; ?></td>
				<td><?php echo $employeeOrder['orderNumber']; ?></td>
				<td><?php echo $employeeOrder['orderDate']; ?></td>
				<td><?php echo $employeeOrder['status']; ?></td>
					</tr>
				<?php $v142334550354380562011incr++; } ?>
			</tbody>
			

		</table>

		<?php } else { ?>
			<div class='jumbotron text-center'>No Results found.</div>
		<?php } ?>

	</div>
</div>

<?php } ?>
</div>
