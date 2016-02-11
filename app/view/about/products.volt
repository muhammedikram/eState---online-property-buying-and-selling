<h1>Quotes Orders</h1>


{{ form('about/products', 'method' : 'post', 'role' : 'form') }}
<div class='panel panel-primary outer-panel'>
	<div class='panel-body'>
		<div class='row'>
			<div class='col-xs-4'>
				<div class='form-group'>
					<label for='salesemployee'>Sales Employee</label>
					<select name='category' class='form-control'>
 				{% for entry in category %}
 				<option {% if selected ==  entry['category']  %}selected{% endif %} value='{{ entry['category'] }}'>{{ entry['category'] }}</option>
 						{% endfor %}
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

{{ end_form() }}

{% if products is defined %}
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
		{% for entry in products %}
			<tr>
			<td>{{ loop.index }}</td>
				<td>{{ entry['category'] }}</td>
				<td>{{ entry['productCode'] }}</td>
				<td>{{ entry['product'] }}</td>
				<td>&pound;{{ entry['description'] }}</td>
				<td>{{ entry['price'] }}</td>
				
				
				

			</tr>
		{% endfor %}
	</tbody>
</table>
	</div>
{% endif %}
</div>
