<div class="container">
{{ partial('dashboard/partials/dashboardNavBar') }}

	<h1>Properties awaiting for approvel</h1>


		<table class="table table-hover">
		{% if notenabledproperties is defined %}
			{% if notenabledproperties|length > 0 %}
				<tr>
					<th>Property ID</th>
					<th>Customer Name</th>
					<th></th>
				</tr>
			{% for row in notenabledproperties %}
				<tr>
					<td>{{row.getPropertyID()}}</td>
					<td>{{row.getMemberRegister().getName()}}</td>
					<td>For Sale</td>
					<td><a href="/dashboard/approveproperty/<?php echo $row->getpropertyID(); ?>">Approve</a></td>
				</tr>
					{% endfor %}
				{% else %}
				<div class='jumbotron text-center'>No properties to be approved.</div>
			{% endif %}
	{% endif %}

	<!-- get all rent request properties-->

		{% if notenabledrentsproperties is defined %}
			{% if notenabledrentsproperties|length > 0 %}
			
			{% for row in notenabledrentsproperties %}
				<tr>
					<td>{{row.getPropertyID()}}</td>
					<td>{{row.getMemberRegister().getName()}}</td>
					<td>To Rent</td>
					<td><a href="/dashboard/approverentproperty/<?php echo $row->getpropertyID(); ?>">Approve</a></td>
				</tr>
					{% endfor %}
				{% else %}
			{% endif %}
	{% endif %}
	</table>	


</div>