<div class="container">

<div class="first">
	<div name="targetname"class="jumbotron">
	  <h2 class="text-center"><strong>Sell or Rent With Us</strong></h2>

	  <div class="panel panel-default">
		  <div class="panel-body">
		  	<div class="row">
		  		<div class="col-md-6 estate">
		  			<h3 class="text-center"><strong>eState</strong></h3>
		  			 <span class="glyphicon glyphicon-star"></span><p class="star">Free valuations</p>
		  			 <span class="glyphicon glyphicon-star"></span><p class="star">Photographs & floorplans</p>
		  			 <span class="glyphicon glyphicon-star"></span><p class="star">Sales negotiation</p>
		  			 <span class="glyphicon glyphicon-star"></span><p class="star">Solicitor work</p>
		  			 <span class="glyphicon glyphicon-star"></span><p class="star">Fast viewings</p>
 					 <span class="glyphicon glyphicon-star"></span><p class="star">Fast listining</p>

 					 <hr>
 					 <br>
 					 <p class="star text-center"><strong>FREE</strong></p>
		  		</div>

		  		<div class="col-md-6">
		  			<h3 class="text-center"><strong>Others</strong></h3>
 					<span class="glyphicon glyphicon-star"></span><p class="star"> Valuations</p>
		  			 <span class="glyphicon glyphicon-star"></span><p class="star">Photographs & floorplans</p>
		  			 <span class="glyphicon glyphicon-star"></span><p class="star">Sales negotiation</p>
		  			 <span class="glyphicon glyphicon-star"></span><p class="star">Sales board</p>
		  			 <br><br><br>

 					 <hr>
 					 <br>
 					 <p class="star text-center"><strong>£800</strong></p>
		  		</div>
		  	</div>

		  </div>
	</div>
	</div>



	<h2><a name="targetname2" style="color:white;">dfdf</a></h2>
	<div name="targetname2"class="jumbotron">
	  <h3 class="text-center"><strong>Have you got a spare room? <span class="rentroom">Rent it with us</span></strong></h3>

	  <div class="panel panel-default">
		  <div class="panel-body">
		  	<div class="row">
		  		<div class="col-md-12">
		  			<img src="/images/roomforrent2.png" class="roompic hidden-xs hidden-sm">
		  			 <p>&nbsp;&nbsp;<a class="learn btn btn-success btn-lg" href="/account/roomforrent" role="button">Post free add >></a></p>

		  		</div>

		  </div>
	</div>
	</div>
</div>







	<h2><a name="targetname3" style="color:white;">3</a></h2>

	  <h2 class="text-center"><strong>Sweet Service</strong></h2>
		<!-- Button trigger modal -->
		<button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#myModal">
		  Rate our service
		</button>
					<div class="panel panel-default	">
		  				<div class="panel-body">
		    			{% if ratings is defined %}
						{% if ratings|length > 0 %}
				
						{% for entry in ratings %}
							<div class="container">
							<strong>{{entry.getName()|capitalize}}</strong>	&nbsp;	&nbsp;	&nbsp;&nbsp;<img src="/images/stars/{{entry.getRating()}}"><br>
								<em>"{{entry.getComments()}}</em>"
								</div>
								<hr>
								{% endfor %} 

							{% else %}
							<div class='jumbotron text-center'>No Ratings to display.</div>
						{% endif %}
					{% endif %}
		  				</div>
					</div>
</div>



<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Rate our service</h4>
      </div>
      <div class="modal-body">
          <form action="about/services" method="post">
            <input type="text" class="form-control" placeholder="Name" name="name"><br>
            <input type="email" class="form-control" placeholder="Email" name="email"><br>
            <textarea class="form-control" rows="3" placeholder="Comments" name="comments"></textarea><br>
            <label>Select rating</label>
            <select multiple class="form-control" name="rating">
            <option>1</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
            <option>5</option>
          </select>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

      </div>
    </div>
  </div>
</div>

<style>
	.first .jumbotron{
		background-color:   #F1F1F1;

	}

	.estate {
		     border-right: 1px solid silver;

	}

	.star {
		margin-top: -5%;
		margin-left: 5%;
	}

	.rentroom{
		color: green;
		font-weight: bold;
	}
	.roompic{
		height: 400px;
		width: 980px;

	}


</style>