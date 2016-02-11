<h1>Quotes Orders</h1>


<?php echo $this->tag->form(array('about/products', 'method' => 'post', 'role' => 'form')); ?>
<div class='panel panel-primary outer-panel'>
	<div class='panel-body'>
		<div class='row'>
			<div class='col-xs-4'>
				<div class='form-group'>
					<label for='salesemployee'>Sales Employee</label>
					<select name='category' class='form-control'>
 				<?php foreach ($category as $entry) { ?>
 				<option <?php if ($selected == $entry['category']) { ?>selected<?php } ?> value='<?php echo $entry['category']; ?>'><?php echo $entry['category']; ?></option>
 						<?php } ?>
 					</select>

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
</div>

<?php echo $this->tag->endForm(); ?>

<?php if (isset($products)) { ?>
<div class='panel panel-primary outer-panel'>
	<div class='panel-heading'>Quotes Orders</div>
	<div class='panel-body'>
		<table class='table table-striped'>
	<thead>
		<tr>
			<th>#</th>
			<th>Category </th>
			<th>Product Code</th>
			<th>Product</th>
			<th>Description</th>
			<th>Price</th>
			



		</tr>
	</thead>
	
	<tbody>
		<?php $v127246675734522291151iterator = $products; $v127246675734522291151incr = 0; $v127246675734522291151loop = new stdClass(); $v127246675734522291151loop->length = count($v127246675734522291151iterator); $v127246675734522291151loop->index = 1; $v127246675734522291151loop->index0 = 1; $v127246675734522291151loop->revindex = $v127246675734522291151loop->length; $v127246675734522291151loop->revindex0 = $v127246675734522291151loop->length - 1; ?><?php foreach ($v127246675734522291151iterator as $entry) { ?><?php $v127246675734522291151loop->first = ($v127246675734522291151incr == 0); $v127246675734522291151loop->index = $v127246675734522291151incr + 1; $v127246675734522291151loop->index0 = $v127246675734522291151incr; $v127246675734522291151loop->revindex = $v127246675734522291151loop->length - $v127246675734522291151incr; $v127246675734522291151loop->revindex0 = $v127246675734522291151loop->length - ($v127246675734522291151incr + 1); $v127246675734522291151loop->last = ($v127246675734522291151incr == ($v127246675734522291151loop->length - 1)); ?>
			<tr>
			<td><?php echo $v127246675734522291151loop->index; ?></td>
				<td><?php echo $entry['category']; ?></td>
				<td><?php echo $entry['productCode']; ?></td>
				<td><?php echo $entry['product']; ?></td>
				<td>&pound;<?php echo $entry['description']; ?></td>
				<td><?php echo $entry['price']; ?></td>
				
				
				

			</tr>
		<?php $v127246675734522291151incr++; } ?>
	</tbody>
</table>
	</div>
<?php } ?>
</div>
