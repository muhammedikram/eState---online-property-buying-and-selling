{{ partial('account/partials/accountNavBar') }}

<div class="container">
	<h2>My properties for sale</h2>

		<!-- get the variable -->
	{% if mySaleProperties is defined %}
		{% if mySaleProperties|length > 0 %}
			{% for row in mySaleProperties%}
				<div class='jumbotron style'>
					<div class="row">
						<div class="col-md-4">
							<img src="/images/{{ row.getproperties().getImage1() }}" width="160" height="150" class="thumbnail" style="margin-bottom: 0;" alt="" title="{{ row.getproperties().getPropertyID()  }}" />
						</div>
						<div class="col-md-5">
							<div class="display">
									<h3>{{row.getProperties().getStreet()}}</h3>
									<h4>{{row.getProperties().getTown()}}</h4>
									<h4>{{ row.getProperties().getType()}}</h4>
							</div>
						</div>
						<div class="col-md-2">
							<form action="/account/deleteProperty" method="post">
								  <input type="hidden" name="propertyID" value="{{row.getpropertyID()}}">
								  <button type="submit" value="{{row.getpropertyID()}}" class="btn btn-danger glyphicon glyphicon-remove" title="{{row.getpropertyID()}}"> Remove</button>
							</form>
							<br><br>
							<form action="/account/editproperty/{{row.getpropertyID()}}" method="post">
								  <input type="hidden" name="propertyID" value="{{row.getpropertyID()}}">
								  <button type="submit" value="{{row.getpropertyID()}}" class="btn btn-success glyphicon glyphicon-pencil" title="{{row.getpropertyID()}}" name="editProperty" value="edit"> Edit</button>
							</form>	
						</div>
					</div>
						<hr>
					<div class="row">
						<div class="col-md-3">
							Created on:{{row.getCreated()}}
						</div>
						<div class="col-md-3">
							Add No: {{row.getPropertyID()}}
						</div>
						<div class="col-md-3">
							Add by: {{row.getMemberRegister().getName()}}
						</div>
						<div class="col-md-3 forSale">
							For Sale
						</div>
					</div>
				</div>
			{% endfor %}
			{% else %}
				<div class='jumbotron text-center'>
					<h3>You have no properties for sale</h3>
				</div>
		{% endif %}
	{% endif %}


	{% if myRentProperties is defined %}
		{% if myRentProperties|length > 0 %}
			{% for row in myRentProperties%}
				<div class='jumbotron style'>
					<div class="row">
						<div class="col-md-4">
							<img src="{{ row.getRents().getImage1() }}" width="160" height="150" class="thumbnail" style="margin-bottom: 0;" alt="" title="{{ row.getRents().getPropertyID()  }}" />
						</div>
						<div class="col-md-5">
							<div class="display">
									<h3>{{row.getRents().getStreet()}}</h3>
									<h4>{{row.getRents().getTown()}}</h4>
									<h4>{{ row.getRents().getType()}}</h4>
							</div>
						</div>
						<div class="col-md-2">
							<form action="/account/deleteProperty" method="post">
								  <input type="hidden" name="propertyID" value="{{row.getpropertyID()}}">
								  <button type="submit" value="{{row.getpropertyID()}}" class="btn btn-danger glyphicon glyphicon-remove" title="{{row.getpropertyID()}}"> Remove</button>
							</form>
							<br><br>
							<form action="/account/editrentproperty/{{row.getpropertyID()}}" method="post">
								  <input type="hidden" name="propertyID" value="{{row.getpropertyID()}}">
								  <button type="submit" value="{{row.getpropertyID()}}" class="btn btn-success glyphicon glyphicon-pencil" title="{{row.getpropertyID()}}" name="editProperty" value="edit"> Edit</button>
							</form>	
						</div>
					</div>
						<hr>
					<div class="row">
						<div class="col-md-3">
							Created on:{{row.getCreated()}}
						</div>
						<div class="col-md-3">
							Add No: {{row.getPropertyID()}}
						</div>
						<div class="col-md-3">
							Add by: {{row.getMemberRegister().getName()}}
						</div>
						<div class="col-md-3 forSale">
							For Rent
						</div>
					</div>
				</div>
			{% endfor %}
		{% endif %}
	{% endif %}
</div><!-- End of container -->





<style>
.style  {

			padding-bottom: 1%;
	}
	.text2{
		
		color: green;
		margin-top: 50px;
	}
	.display{
		margin-top: -20px;
		margin-left: -33%;
	}
	.addID{
		margin-left: 30%;
		margin-top: -2%;
	}

	.forSale{
		color: green;
		font-size: 16px;
		font-weight: bold;
	}
</style>

