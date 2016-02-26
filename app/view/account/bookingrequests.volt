<div class="container">
	<h2>Viewings Requests</h2>
<br><br>
	<div class="col-md-12">
		<table class="table">
			{% if viewings is defined %}
			{% if viewings|length > 0 %}
			<tr>
				<th>Viewing ID</th>
				<th>Viewer Name</th>
				<th>Date</th>
				<th>Time</th>
				<th></th>
			</tr>
			
				{% for row in viewings %}

				<?php
					$enabled = $row->getEnabled();

					if ($enabled == 0)
					{
					?>
				<tr div class="jumbotron">
					<td>{{row.getViewingID()}}</td>
					<td>{{row.getName()}}</td>
					<td>{{row.getDate()}}</td>
					<td>{{row.getTime()}}</td>

					<td>
						<form action="/account/bookingrequests/{{row.getpropertyID()}}" method="post">
							 <button type="submit" class="btn btn-sm btn-success" name="action" value="approve" value="approve">
                				<span class="glyphicon glyphicon-ok"></span>
                   				Approve
           					 </button>
             
						</form>

					</td>
				</tr>
				<?php  }  ?>

				<?php
					if ($enabled == 1)
					{
				?>
				<tr>
					<td>{{row.getViewingID()}}</td>
					<td>{{row.getName()}}</td>
					<td>{{row.getDate()}}</td>
					<td>{{row.getTime()}}</td>
					<td>
						<form action="/account/bookingrequests/{{row.getpropertyID()}}" method="post">
							 <button type="submit" disabled class="btn btn-sm btn-success" name="action" value="approve" value="approve">
                				<span class="glyphicon glyphicon-ok"></span>
                   				Already Approved
           					 </button>
             
						</form>

					</td>
				</tr>

				


				<?php  }  ?>
					{% endfor %}
							{% else %}
				<div class='jumbotron text-center'>No any property viewing requests are been received.</div>
			{% endif %}
	{% endif %}	

		</table>
	</div>
</div>
