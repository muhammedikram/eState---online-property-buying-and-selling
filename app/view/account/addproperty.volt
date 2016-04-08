{{ partial('account/partials/accountNavBar') }}


	<div class="container">
	<h3>Add a property</h3>
{{ partial('index/partials/reviews') }}

	
	<div clss="row" style="margin-top:3%;">
		<div class="col-md-8 addform">
			<p><strong>What you doing with your property today?</strong></p>
			<br>
			<form action="addproperty" method="post" enctype="multipart/form-data">
			<div class="row">
			<div class="col-md-12"><strong>
				<label class="radio-inline selltype" name="purpose"  >
			         <input type="radio" name="purpose" id="radio1" value="sell"> Selling a property
			     </label><br><br>
			     <label class="radio-inline selltype" name="purpose">
			         <input type="radio" name="purpose" id="radio2" value="rent">Renting a property
			      </label><br><br>

			      <a href="/account/roomforrent">Renting a room</a>
			      </strong>
			      </div>
			      </div>

			      <hr>

			   	<p><strong>Tell us about your property?</strong></p>
			   	
			   	<div class="row">
			   		<div class="col-md-6">
			   			<div class="form-group">
				   			 <label for="street">* Street</label>
				    		 <input type="text" class="form-control" name="street" id="street" placeholder="Street Name">
				 		</div>

				 		 <div class="form-group">
						    <label for="town">* Town</label>
						    <input type="text" class="form-control" name="town" id="town" placeholder="Town Name">
						 </div>

						 <div class="form-group">
				    		<label for="postcode">* Postcode</label>
				    		<input type="text" class="form-control" name="postcode" id="postcode" placeholder="Postcode">
				 		</div>

			   		</div>
			   	
			   		<div class="col-md-6">
						 <div class="form-group">
						    <label for="county">* County</label>
						    <input type="text" class="form-control" name="county" id="county" placeholder="County">
						 </div>

						 <div class="form-group">
						    <label for="county" name="type" id="type">* Type</label>
							 <select class="form-control" name="type">
							 	  <option>Please select...</option>
								  <option>House</option>
								  <option>Flat</option>
								  <option>Bungalows</option>
								  <option>Land</option>
							</select>
						</div>

						<div class="form-group">
						    <label for="county" name="bedroom" id="bedroom">* Bedrooms</label>
							 <select class="form-control" name="bedroom">
							 <option>Please select...</option>
								  <option>1</option>
								  <option>2</option>
								  <option>3</option>
								  <option>4</option>
								  <option>5</option>
							</select>
						</div>
			   		</div>
			   	</div>

			   	<hr>
			   	<p><strong>More details about your property</strong></p>


			   	<div class="row">
			   		<div class="col-md-6">
			   			<div class="form-group">
				   			  <label for="county" name="kitchen" id="kitchen">* Kitchen</label>
								 <select class="form-control" name="kitchen">
								 <option>Please select...</option>
								  <option>Kitchen(Seperate)</option>
								  <option>Kitchen/Dinner</option>
								  <option>Kitchen(galley)</option>
							</select>
				 		</div>

				 		 <div class="form-group">
						     <label for="county" name="reception" id="reception">* Receptions</label>
								 <select class="form-control" name="reception">
								 <option>Please select...</option>
								  <option>1</option>
								  <option>2</option>
								  <option>3</option>
								  <option>4</option>
								  <option>5</option>
								  <option>6</option>
								  <option>7</option>
								  <option>8</option>
								  <option>9</option>
								  <option>10</option>
							</select>
						 </div>

						 <div class="form-group">
				    		<label for="county" name="bathroom" id="bathroom">* Bathrooms</label>
								 <select class="form-control" name="bathroom">
								 <option>Please select...</option>
								  <option>1</option>
								  <option>2</option>
								  <option>3</option>
								  <option>4</option>
								  <option>5</option>
							</select>
				 		</div>

			   		</div>
			   	
			   		<div class="col-md-6">
						 <div class="form-group">
						 		<label for="county" name="parking" id="parking">* Parking</label>
								 <select class="form-control" name="parking">
								 <option>Please select...</option>
								  <option>None</option>
								  <option>Street parking</option>
								  <option>Off street parking</option>
								  <option>Garage</option>
								  <option>Permit holder</option>
								  <option>Private parking</option>
							</select>
						 </div>

						 <div class="form-group">
							   <label for="county" name="space" id="space">* Outside space</label>
								 <select class="form-control" name="space">
								 <option>Please select...</option>
								  <option>None</option>
								  <option>Roof Terrace</option>
								  <option>Patio</option>
								  <option>Private garden</option>
								  <option>Shared garden</option>
								  <option>Balcony</option>
							</select>
						</div>

		
			   		</div>
			   	</div>


	   			<hr>
			   	<p><strong>Provide us with your property or room description</strong></p>
					<div class="row">
						<div class="col-md-12">
						 <div class="form-group">
						    	<textarea type="text" class="form-control" rows="4S" name="description" id="description" placeholder="Enter Description"></textarea>
						   </div>
						</div>
					</div>



			<div class="row">
				<div class="col-md-6">
				  <div class="form-group">
				    <label for="exampleInputAmount">Price</label>
				    <div class="input-group">
				      <div class="input-group-addon">£</div>
				      <input type="text" class="form-control" id="exampleInputAmount" name="price" placeholder="Price">
				    </div>
				  </div>
			  </div>

			  <div class="col-md-6">
				<div class="form-group">
				 <label for="county" name="valuation" id="type">Do you require free valuation</label>
						<select class="form-control" name="valuation">
								<option>Free valuation</option>
								<option>Yes</option>
								<option>No</option>	
					</select>
				</div>
			  </div>
			 </div>
	
						

			<hr>
			<label for="image1" name="image1">Images</label>
			<div>
		        <input id="image1" type="file"   name="image1"/>
		        <br>
		        <b>Preview</b>
		        <div id="dvPreview"></div>
	    	</div>
	    	<br>
			<input type="submit"  value="submit">
			</form>
			<br><br>
		</div>	
 		
				<div class="col-md-4">
				<h2>Sweet Service</h2>
					<div class="panel panel-default	">
		  				<div class="panel-body">
		    			{% if ratings is defined %}
						{% if ratings|length > 0 %}
				
						{% for entry in ratings %}
							<strong>{{entry.getName()|capitalize}}</strong>	&nbsp;	&nbsp;	&nbsp;&nbsp;<img src="/images/stars/{{entry.getRating()}}"><br>
								<em>"{{entry.getComments()}}</em>"
								<hr>
								{% endfor %} 

							{% else %}
							<div class='jumbotron text-center'>No Ratings to display.</div>
						{% endif %}
					{% endif %}
		  				</div>
					</div>
				</div>
 	</div>


	<div class="col-md-4">
		<div class="panel panel-default">
		  <div class="panel-heading">
		    <h3 class="panel-title">Follow us</h3>
		  </div>
		  <div class="panel-body">
		  		<a class="btn btn-block ">
			   		<i class="fa fa-facebook-square fa-4x"></i> 
			  </a>

			  <a class="btn btn-block ">
			   		<i class="fa fa-twitter-square fa-4x"></i> 
			  </a>

			
		  </div>
		</div>
	</div>
	</div>
</div>


<style>
.selltype{
	margin-right: 10%;
}
#radio1{
	margin-right: 30%;
}

.addform .form-group input{
	height: 50px;
}

.addform .form-group select {
	height: 50px;
}
</style>

























