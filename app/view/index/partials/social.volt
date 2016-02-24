
<!--This volt page will include all the social stuff for example twitter tweets, customers feedback, and links to social sites -->


	<div class="row">
		<div class="jumbotron">
			<div class="container">
				<div class="col-md-4">
				<h2>Twitter</h2>
					<div class="panel panel-default	">
		  				<div class="panel-body">
		    				Panel content
		  				</div>
					</div>
				</div>


				<div class="col-md-4">
				<h2>Sweet Service</h2>
					<div class="panel panel-default	">
		  				<div class="panel-body">
		    				Panel content
		  				</div>
					</div>
				</div>

				<div class="col-md-4">
				<h2>News</h2>
					<div class="panel panel-default	">
		  				{% if blog is defined %}
						{% if blog|length > 0 %}
				
						{% for entry in blog %}
							<strong>{{entry.getTitle()}}</strong><br>
								<span>{{entry.getDescription()}}</span><br>
								
								<hr>
								{% endfor %} 

							{% else %}
							<div class='jumbotron text-center'>No blogs to show.</div>
						{% endif %}
					{% endif %}

					</div>
				</div>
			</div>

		</div>
	</div>


