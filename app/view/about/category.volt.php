
<div class="row" id="">
	<div class="col-md-12">
		<div class form-group>
			<label for="">Description</label>
			<textarea name="" id="description" class="form-control"></textarea>
		</div>
	</div>
</div>



<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<link rel='stylesheet' href="/css/summernote.css" />

<script>

$(document).ready(function(){
	$('#description').summernote({
		  height: 200,   //set editable area's height
		  codemirror: { // codemirror options
		    theme: 'monokai'
		  },
		  focus : true
		});
});
</script>


<h1>Categories</h1>
<?php if ($this->length($category) > 0) { ?>
<div class='panel panel-primary outer-panel'>
	<div class='panel-heading'>Quotes Orders</div>
	<div class='panel-body'>
		<table class='table table-striped'>
	<thead>
		<tr>
			<th>#</th>
			<th>Category </th>
			<th>Description</th>
	



		</tr>
	</thead>
	
	<tbody>
		<?php $v69693160029906130931iterator = $category; $v69693160029906130931incr = 0; $v69693160029906130931loop = new stdClass(); $v69693160029906130931loop->length = count($v69693160029906130931iterator); $v69693160029906130931loop->index = 1; $v69693160029906130931loop->index0 = 1; $v69693160029906130931loop->revindex = $v69693160029906130931loop->length; $v69693160029906130931loop->revindex0 = $v69693160029906130931loop->length - 1; ?><?php foreach ($v69693160029906130931iterator as $entry) { ?><?php $v69693160029906130931loop->first = ($v69693160029906130931incr == 0); $v69693160029906130931loop->index = $v69693160029906130931incr + 1; $v69693160029906130931loop->index0 = $v69693160029906130931incr; $v69693160029906130931loop->revindex = $v69693160029906130931loop->length - $v69693160029906130931incr; $v69693160029906130931loop->revindex0 = $v69693160029906130931loop->length - ($v69693160029906130931incr + 1); $v69693160029906130931loop->last = ($v69693160029906130931incr == ($v69693160029906130931loop->length - 1)); ?>
			<tr>
			<td><?php echo $v69693160029906130931loop->index; ?></td>
				<td><?php echo $entry['category']; ?></td>
				<td><?php echo $entry['description']; ?></td>

				
				
				

			</tr>
		<?php $v69693160029906130931incr++; } ?>
	</tbody>
</table>
	</div>
<?php } ?>
</div>


