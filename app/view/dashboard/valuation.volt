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
					<th> Add Price</th>
				</tr>
			{% for row in valuationproperties %}
				<tr>
					<td>{{row.getValuationID()}}</td>
					<td>{{row.getPropertyID()}}</td>
					<td>{{row.getMemberRegister().getName()}}</td>
					<td>{{row.getDate()}}</td>
					<td><a  class="btn btn-primary" href="/index/propertydetails/<?php echo $row->getpropertyID(); ?>">More Details</a></td>
					<td>
					<button type="submit"data-toggle='modal' data-target='#valuationprice' class="btn btn-success registerButton">Add Price</button>
					</td>
				</tr>
	

<div class="modal fade" id="valuationprice">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h3 class="modal-title text-center">Set Price<br>Property ID: {{row.getPropertyID()}}</h3>
      </div>
      <div class="modal-body">
        <div class='modal-container'>
           <div class="row">
              <form  action="/dashboard/valuation/{{row.getPropertyID()}}" method="post"role="form">
                  <div class="col-lg-12">
                     <div class="form-group">
				    <label for="exampleInputAmount">Price</label>
				    <div class="input-group">
				      <div class="input-group-addon">£</div>
				      <input type="text" class="form-control" id="exampleInputAmount" name="price" placeholder="Price">
				    </div>
				  </div>
                  </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                      <button type="submit" class="btn btn-success offer-submit">Set Price</button>
                    </div>
                    <div class="alert alert-info" role="alert">Please Note: Setting price will automatically enable property in system</div>

              </form>
            </div>
          </div>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

				{% endfor %}
				{% else %}
				<div class='jumbotron text-center'>No properties to be valued.</div>
			{% endif %}
	{% endif %}	
	</table>

		</div>
	</div>

	
		<!-- Prvious valuated properties -->
		<h2>Previous valuated properties</h2>

			<div class="col-md-12">
		<table class="table table-hover">
		{% if valuedproperties is defined %}
			{% if valuedproperties|length > 0 %}
				<tr>
					<th>Valuation ID</th>
					<th>Property ID</th>
					<th>Customer Name</th>
					<th>Date</th>
					<th>Price</th>
					<th></th>
				</tr>
			{% for entry in valuedproperties %}
				<tr class="alert alert-danger">
					<td>{{entry.getValuationID()}}</td>
					<td>{{entry.getPropertyID()}}</td>
					<td>{{entry.getMemberRegister().getName()}}</td>
					<td>{{entry.getDate()}}</td>
					<td><a  class="btn btn-primary" href="/index/propertydetails/<?php echo $entry->getpropertyID(); ?>">More Details</a>
					</td>

					<td>Remove</td>
				</tr>
					{% endfor %}
				{% else %}
				<div class='jumbotron text-center'>No previous properties been valued.</div>
			{% endif %}
	{% endif %}	
	</table>

		</div>
</div>



<style>
	.price{
		width: 50%;
	}
</style>