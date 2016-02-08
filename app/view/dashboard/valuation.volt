<div class="container">
{{ partial('dashboard/partials/dashboardNavBar') }}

	<div class="row">
		<h2>Properties Valuation Requests</h2>
		<div class="col-md-12">
		<table class="table table-hover">
		{% if valuationproperties is defined %}
			{% if valuationproperties|length > 0 %}
				<tr>
					<th>Valuation ID</th>
					<th>Property ID</th>
					<th>Customer Name</th>
					<th>Date</th>
					<th>Details</th>
					<th>price</th>
				</tr>
			{% for row in valuationproperties %}
				<tr>
					<td>{{row.getValuationID()}}</td>
					<td>{{row.getPropertyID()}}</td>
					<td>{{row.getMemberRegister().getName()}}</td>
					<td>{{row.getDate()}}</td>
					<td><a  class="btn btn-success" href="/index/propertydetails/<?php echo $row->getpropertyID(); ?>">More Details</a></td>
					<td>

						<form action="/dashboard/valuation" method="post">
			      				<input type="text" class="form-control" id="exampleInputAmount" placeholder="Price">
						</form>
					</td>
				</tr>
					{% endfor %}
				{% else %}
				<div class='jumbotron text-center'>No properties to be approved.</div>
			{% endif %}
	{% endif %}	
	</table>

		</div>
	</div>
</div>
