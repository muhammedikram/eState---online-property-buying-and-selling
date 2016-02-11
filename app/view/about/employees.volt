
<h1>
	All Employees
</h1>

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
		{% for employee in employees %}
			<tr>
				<td>{{ employee['employeeNumber'] }}</td>
				<td>{{ employee['firstName'] }}</td>
				<td>{{ employee['lastName'] }}</td>
				<td>{{ employee['email'] }}</td>
			</tr>
		{% endfor %}
	</tbody>
</table>
</div>
