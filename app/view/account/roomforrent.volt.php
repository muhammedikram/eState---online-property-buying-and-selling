<?php echo $this->partial('account/partials/accountNavBar'); ?>


<div class="container">
	<h3>Rent a room</h3>

	
	<div clss="row" style="margin-top:3%;">
		<div class="col-md-8 addform">
			<form action="roomforrent" method="post" enctype="multipart/form-data">
			<hr>
			   	<p><strong>About the property</strong></p>
			 <hr>
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
						    <label for="county" name="type" id="type">* House Type</label>
							 <select class="form-control" name="type">
							 	  <option>Please select...</option>
								  <option>House</option>
								  <option>Flat</option>
								  <option>Bungalows</option>
								  <option>Land</option>
							</select>
						</div>

					<!--  <div class="form-group ">
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
						 </div> -->
			   		</div>
			   	</div>
			   	<hr>
			   		<p><strong>About the room</strong></p>
			   	<hr>
			   		<div class="row">
			   		<div class="col-md-6">

			   			<label for="roomsize" name="ready" id="ready">* Ready</label>

						    <div class="radio">
						      <label><input type="radio" name="ready" value="Furnished">Furnished</label>
						    </div>
						    <div class="radio">
						      <label><input type="radio" name="ready" value="Non-furnished">Non-Furnished</label>
						    </div>

			   			<div class="form-group">
				   			  <label for="county" name="kitchen" id="kitchen">* Kitchen</label>
								 <select class="form-control" name="kitchen">
								 <option>Please select...</option>
								  <option>Kitchen(Seperate)</option>
								  <option>Together</option>
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
			   	<p><strong>More about the room</strong></p>
			   	<hr>
				<div class="row">
			   		<div class="col-md-6">
			   			<div class="form-group">
				   			  <label for="county" name="roomavailable" id="roomavailable">* Room available</label>
								 <select class="form-control" name="roomavailable">
								 <option>1</option>
								  <option>2</option>
								  <option>3</option>
								  <option>4</option>
								  <option>5</option>
							</select>
				 		</div>
				    		
				    <label for="roomsize" name="roomsize" id="roomsize">* Room Size</label>

				    <div class="radio">
				      <label><input type="radio" name="roomsize" value="Single">Single</label>
				    </div>
				    <div class="radio">
				      <label><input type="radio" name="roomsize" value="Double">Double</label>
				    </div><br>
  				
			   		</div>

			   		<div class="col-md-6">
			   			<div class="form-group">
						    <label for="price">Montly Rent</label>
							    <div class="input-group">
							      <div class="input-group-addon">£</div>
							      <input type="text" class="form-control" id="price" name="price" placeholder="Monthly rent">
							    </div>
						   </div>

						   <div class="form-group">
						    <label for="exampleInputAmount">Deposit required</label>
							    <div class="input-group">
							      <div class="input-group-addon">£</div>
							      <input type="text" class="form-control" id="exampleInputAmount" name="Deposit" placeholder="Deposit">
							    </div>
						    </div>
			   		</div>
			   	</div>

			   	<hr>
			   		<strong><p>Required</p></strong>

			   	<hr>
			   		<div class="row">
			   			<div class="col-md-6">	
			   				<div class="form-group">
				   			  <label for="county" name="petsallowed" id="roomavailable">* Pets allowed</label>
								 <select class="form-control" name="petsallowed">
								 <option >Please select </option>
								  <option>Yes</option>
								  <option>No</option>
							</select>
				 		</div>

				 		<div class="form-group">
					   			  <label for="minimumcontract" name="minimumcontract" id="minimumcontract">* Minimum Contract</label>
									 <select class="form-control" name="minimumcontract">
									 <option >Please select </option>
									  <option>1 - 3 Months</option>
									  <option>3 - 6 Months</option>
									  <option>6 - 9 Months</option>
									  <option>9 - 12 Months</option>
								</select>
					 		</div>
			   			</div>

			   				<div class="col-md-6">
			   				<div class="form-group">
				   			  <label for="smoaking" name="smoaking" id="smoaking">* Smoaking</label>
								 <select class="form-control" name="smoaking">
								 <option >Please select </option>
								  <option>Allowed</option>
								  <option>Not allowed</option>
							</select>
				 		</div>
			   			</div>
				   			<div class="col-md-6">
				   				<div class="form-group">
					   			  <label for="couple" name="couple" id="couple">* Couple</label>
									 <select class="form-control" name="couple">
									 <option >Please select </option>
									  <option>Allowed</option>
									  <option>Not allowed</option>
								</select>
					 		</div>
				   		</div>
			   		</div>
			   	<hr>
			   	

	   			<hr>
			   	<p><strong>Provide us with your property or room description</strong></p>
			   	<hr>
					<div class="row">
						<div class="col-md-12">
						 <div class="form-group">
						    	<textarea type="text" class="form-control" rows="4S" name="description" id="description" placeholder="Enter Description"></textarea>
						   </div>
						</div>
					</div>

	
						

			<hr>
			<label for="image1" name="image1">Images</label>
			<hr>
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

























