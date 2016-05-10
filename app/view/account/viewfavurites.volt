{{ partial('account/partials/accountNavBar') }}

<div class="container">
	<h2>My favorites properties</h2>

	{% if myfavurites is defined %}
		{% if myfavurites|length > 0 %}
			{% for row in myfavurites%}
				<div class="row">
					<div class="col-md-6">		
						<div class='jumbotron'>
							<div class="row">
								<div class="col-md-6">

					  				<h2>{{row.getpropertyID()}}</h2>

					  				<img src="/images/{{ row.getproperties().getImage1() }}" width="160" height="150" class="thumbnail" style="margin-bottom: 0;" alt="" title="{{ row.getproperties().getPropertyID()  }}" />

								</div>
							<div class="col-md-6">
								<div class="display">
									<h2 class="text2">&pound;<?php echo number_format($row->getproperties()->getPrice(), 2); ?></h2>
										<span class='help-block'>Price Includes ...</span>

										<h3>{{row.getProperties().getStreet()}}</h3>

										<h4>{{row.getProperties().getTown()}}</h4>

										<h4>{{ row.getProperties().getType()}}</h4>
								</div>
							</div>
						</div>	
						<hr>
				<!-- Delete favurite form -->
					 <form action="account/viewfavurites" method="post">
						<input type="hidden" name="propertyID" value="{{row.getpropertyID()}}">
						<button type="submit" value="{{row.getpropertyID()}}" class="btn btn-danger btn-lg " title="{{row.getpropertyID()}}"> Remove</button>
					</form>	 
					<a href="/index/propertydetails/{{row.getPropertyID()}}" class="btn btn-lg btn-default detailbutton">View Details</a>

					</div> 
				
					
					</div>      
				{% endfor %}
			{% else %}
				<div class='jumbotron text-center'>
					<h3>You have no properties in your favurite</h3>
				</div>
		{% endif %}
	{% endif %}
	</div>
</div><!-- End of container -->

<style>
.jumbotron h2 {
			margin-top: -35px;
	}
	.text2{
		
		color: green;
		margin-top: 50px;
	}
	.display{
		margin-top: 35px;
	}

	.detailbutton {
		margin-top: -13%;
		margin-left:60%;
	}
</style>
