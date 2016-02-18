	<div class="container">
		
		<div class="row">
			<div class="col-md-8">
			
			<!-- property ref and price row-->
			<div class="row">
				<div class="col-md-8">
					<!-- Assigining property code to variable, which will be used in related properties-->
					{% for part in properties %}
						<?php $id = $part->getPropertyID();  ?>
						<h3 class="text"><?php echo "Ref:" ,$id; ?></h3>
					{% endfor %}
				</div>

				<div class="col-md-4">
					<h2 class="text2">

							<?php $price =$part->getPrice(); ?>
								<?php if($price) 
							{ ?>
							&pound;
							<?php
								echo number_format (($price),2);
							}else {
								echo "Price Not Available <button class='btn btn-success'>Request Price</button>";
							}
						?>
						</h2>
					</div>
			</div>


			<!--Property image-->

			<div class="row">
				<div class="col-md-8">
					{% for part in properties %}
					<div class="hidden-xs">
						<img src="/images/{{ part.getImage1() }}"  width="740" height="450" style="margin-left: 10px;" alt="" title="{{ part.getPropertyID()  }}" />
					</div>
				</div>
			</div>


			<!--Property details. show property details in table-->

			<div class="row">
				<div class="col-md-6">	<br>
					<table class="table table-striped">
			
							<tr><td><strong>Street: </strong>{{part.getStreet()}}</td></tr>
							<tr><td><strong>Town: </strong>{{part.getTown()}}</td></tr>
							<tr><td><strong>Type: </strong>{{ part.getType()}}</td></tr>
							<tr><td><strong>Postcode: </strong>{{part.getPostcode()}}</td></tr>
							<tr><td><strong>County: </strong>{{part.getCounty()}}</td></tr>
					</table>
				</div>

					<div class="col-md-6">	<br>
					<table class="table table-striped">
			
							<tr><td><strong>Bedrooms: </strong>{{part.getBedroom()}}</td></tr>
							<tr><td><strong>Bathroom: </strong>{{part.getBathroom()}}</td></tr>
							<tr><td><strong>Kitchen: </strong>{{part.getKitchen()}}</td></tr>
							<tr><td><strong>Reception: </strong>{{part.getReception()}}</td></tr>
							<tr><td><strong>Parking: </strong>{{part.getParking()}}</td></tr>		
					</table>
				</div>
			</div>


			<!--Property description-->
			<div class="row">
				<div class="col-md-10">
					{{part.getDescription()}}
				</div>
			</div>

			<hr>

			<!--Properties for sale in user chosen area-->
			<div class="row">
				<div class="col-md-12">
			<!-- Assign the town to variable -->
				<h3>More properties in {{part.getTown()}} area</h3>
				
				<?php $similarProperties = $part->getTown();  ?>

			<!-- Sql query to get properties. -->
			<?php
			$relatedProperties = Properties::find(array(
					    "town = '$similarProperties' AND  propertyID !=$id" 
					)
				);
			?>

			 {% if relatedProperties|length > 0 %}
			 <div class="row">
			 {% for property in relatedProperties  %}
			 		<div class="col-sm-4">
					    <div class="thumbnail">
					    <a href="/index/propertydetails/{{property.getPropertyID()}}">
					      <img src="/images/{{ property.getImage1() }}"  width="150" height="150" style="margin-left: 10px;" alt="" title="{{ property.getPropertyID()  }}" />
					      </a>
					      <div class="caption">
					        <h3>{{property.getStreet()}}</h3>
					        <p>{{property.getTown()}}</p>
					        <p>{{property.getPostcode()}}</p>
					        
					      </div>
					    </div>
					  </div>			 
				  {% endfor %}
				   </div>
				  {% else %}
				<div class='jumbotron text-center'>No related properties found in 
				<?php echo $similarProperties; ?> area. </div>
			{% endif %}
			</div>
		</div>

		<hr>

		<div class="row">
				<div class="col-sm-10">
					    <h3>More Information & Bookings</h3>
					    <p>If you require more information about this property or you would like to view this property, please contact <strong>{{part.getRentsListinings().getMemberRegister().getName()}}</strong>
					   by email on <strong><a href="mailto:{{part.getRentsListinings().getMemberRegister().getEmail()}}">{{part.getRentsListinings().getMemberRegister().getEmail()}}</a></strong></p>

					   <p>Alternatively, you can click contact seller above to send {{part.getRentsListinings().getMemberRegister().getName()}} message directly from here. </p>
				</div>
			</div>

			<hr>






		</div><!-- End of panel 1  -->


				<!-- Panel 2  start here  -->
			<div class="col-md-4">
				<div class="row">
					<div class="col-md-12">
						<div class="panel panel-default contactpanel">
 				 			<div class="panel-body">
								<div class="contactdetails">
									<h4>The property is added by</h4>
									<h4>{{part.getRentsListinings().getMemberRegister().getName()}}</h4>

									<hr class="lineInPeopleContact">
										<button   type="button" class="btn btn-default btn-md contactButton" data-toggle="modal" data-target="#contactSeller"><span class="fa fa-envelope  fa-fw left"></span>Contact Seller</button>
						
									<hr class="lineInPeopleContact">
										{{ form( 'method' : 'post', 'role' : 'form') }}
									<button href ='/index/propertydetails/{{part.getPropertyID()}}' type='submit' name='action' value='favurite' class='btn btn-default addToFavurite'><span class="fa fa-star fa-fw left"></span>Add to Favurite</button>
										<hr class="lineInPeopleContact">
									<button   type="button" class="btn btn-default btn-md sendToFrend" data-toggle="modal" data-target="#myModal"><span class="fa fa-send  fa-fw left"></span>Send to Frend</button>
									{{ end_form() }}
									<hr class="lineInPeopleContact">
									<button   type="button" class="btn btn-default btn-md writeReview" data-toggle="modal" data-target="#myModal"><span class="fa fa-pencil  fa-fw left"></span>Write a review</button>

				
					
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-md-12">
						<iframe width="370" height="350" src="https://maps.google.co.uk/maps?q={{part.getPostcode()}}&amp;output=embed"></iframe>
					</div>
				</div>
			

			</div><!--END OF PANEL 2 -->
		



		</div><!--END OF ROW -->
		{% endfor %}
	</div><!--END OF CONTAINER-->




		<!-- Modal for email -->
		 <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		  <div class="modal-dialog">
		    <div class="modal-content">
		      <div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		        <h4 class="modal-title" id="myModalLabel"> Property ID {{part.getpropertyID()}}</h4>
		      </div>
		      <div class="modal-body">
		        <form action="/index/rentpropertydetails/{{part.getpropertyID()}}" method="post" >
		         <div class="row">
		                   <div class="col-md-10 formLabel">
		                      Enter your Email:<br>
		                      <input type="email" class="form-control" placeholder="Enter email"name="sendEmail" id="sendEmail">   
		                    </div>
		                  </div>
		      <div class="modal-footer">
		        <button type="submit" class="btn btn-default" data-dismiss="modal">Close</button>
		        <button type="submit" name='newEmail' value='email'class="btn btn-success">Send</button>
		      </div>
		      </form>
		    </div>
		  </div>
		</div>
	</div>


		<!-- Modal for contact seller -->
		 <div class="modal fade" id="contactSeller" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		  <div class="modal-dialog">
		    <div class="modal-content">
		      <div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		        <h4 class="modal-title" id="myModalLabel"> Property ID {{part.getpropertyID()}}</h4>
		      </div>
		      <div class="modal-body">
		        <form action="/index/rentcontact/{{part.getpropertyID()}}" method="post" >
		         <div class="row">
		                   <div class="col-md-10 formLabel">
		                    <div class="form-group">
								  <label for="name">* Name:</label>
								  <input type="text" class="form-control" id="name" name="name" required>
								</div>
								<div class="form-group">
								  <label for="email">* Email:</label>
								  <input type="email" class="form-control" id="email" name="email" required>
								</div>
								<div class="form-group">
								  <label for="number">Number:</label>
								  <input type="text" class="form-control" id="number" name="number">
								</div>
								<div class="form-group">
								  <label for="message">* Message:</label>
								  <textarea class="form-control" rows="5" id="message" name="message" required></textarea>
								</div>  
		                    </div>
		                  </div>
		      <div class="modal-footer">
		        <button type="submit" class="btn btn-default" data-dismiss="modal">Close</button>
		        <button type="submit" name='newEmail' value='email'class="btn btn-success">Send</button>
		      </div>
		      </form>
		    </div>
		  </div>
		</div>
	</div>





<style>

	.contactpanel{
		margin-top: 16%;
	}
	
	.text2{
		font-size: 25px;
		color: green;
		font-weight: bold;
	}
	.details{
		margin-left: -9%;
	}
#myModal{
	z-index: 1050;
}
#contactSeller{
	z-index: 1050;
}

.fa-envelope ,.fa-star,.fa-send, .fa-pencil{
  margin-right: 20%;
}
.contactButton,.sendToFrend,.addToFavurite,.writeReview{
	width: 75%;
	height: 40px;
	margin-left: 12%;
	mar
}

</style>
	
	




