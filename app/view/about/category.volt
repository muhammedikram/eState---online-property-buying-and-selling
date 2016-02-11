
<div class="row" id="">
	<div class="col-md-12">
		<div class form-group>
			<label for="">Description</label>
			<textarea name="" id="description" class="form-control"></textarea>
		</div>
	</div>
</div>


<link rel='stylesheet' href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css">
<!-- include codemirror (codemirror.css, codemirror.js, xml.js, formatting.js) -->
<link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/codemirror/3.20.0/codemirror.min.css" />
<link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/codemirror/3.20.0/theme/monokai.min.css" />
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/codemirror/3.20.0/codemirror.min.js"></script>
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/codemirror/3.20.0/mode/xml/xml.min.js"></script>
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/codemirror/2.36.0/formatting.min.js"></script>
<script type="text/javascript" src="/js/pdf.js"></script> 


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
{% if category|length > 0 %}
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
		{% for entry in category %}
			<tr>
			<td>{{ loop.index }}</td>
				<td>{{ entry['category'] }}</td>
				<td>{{ entry['description'] }}</td>

				
				
				

			</tr>
		{% endfor %}
	</tbody>
</table>
	</div>
{% endif %}
</div>


