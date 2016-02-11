<div style='padding:10px;'>
<?php
	$date = date('Y-m-d');
	$minusMonth = date('Y-m-d', strtotime('-170 month')); 
?>

{{ form('about/employeesOrders', 'method' : 'post', 'role' : 'form') }}
<div class='panel panel-primary outer-panel'>
	<div class='panel-body'>
		<div class='row'>
			<div class='col-xs-4'>
				<div class='form-group'>
					<label for='salesemployee'>Sales Employee</label>
					<select name='salesemployee' class='form-control'>
 				{% for person in employees %}
 				<option {% if selected ==  person['employeeNumber']  %}selected{% endif %} value='{{ person['employeeNumber'] }}'>{{ person['firstName'] }}</option>
 						{% endfor %}
 					</select>
				</div>
			</div>
			<div class='col-xs-4'>
				<div class='form-group'>
					<label for='from'>From</label>
					<input type='date' value='{{ minusMonth }}' name='from' class='form-control'/>
				</div>
			</div>
			<div class='col-xs-4'>
				<div class='form-group'>
					<label for='to'>To</label>
					<input type='date' value='{{ date }}' name='to' class='form-control'/>
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

{{ end_form() }}

{% if employeesOrders is defined %}

<div class='panel panel-primary outer-panel'>
	<div class='panel-heading'>Sales by Employees</div>
	<div class='panel-body'>

		{% if employeesOrders|length > 0 %}

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
				
				{% for employeeOrder in employeesOrders %}
			
					<tr>
				<td>{{ loop.index }}</td>
				<td>{{ employeeOrder['employeeNumber'] }}</td>
				<td>{{ employeeOrder['firstName'] }}</td>
				<td>{{ employeeOrder['orderNumber'] }}</td>
				<td>{{ employeeOrder['orderDate'] }}</td>
				<td>{{ employeeOrder['status'] }}</td>
					</tr>
				{% endfor %}
			</tbody>
			

		</table>

		{% else %}
			<div class='jumbotron text-center'>No Results found.</div>
		{% endif %}

	</div>
</div>

{% endif %}
</div>
