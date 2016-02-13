<div class="container">
	<h1>Blog</h1>
	
	<div class="col-md-8">
			{% if blog is defined %}
			{% if blog|length > 0 %}
	
			{% for entry in blog %}
				<strong>{{entry.getTitle()}}</strong><br>
					<em>By {{entry.getName()}} on {{entry.getDate()}}</em><br><br>
					<span>{{entry.getDescription()}}</span><br>
					
					<img src="/images/{{ entry.getImage1() }}" width="460" height="350" class="thumbnail" style="margin-bottom: 0;" alt="" title="{{ entry.getImage1() }}" />
					
					<hr>
					{% endfor %} 

				{% else %}
				<div class='jumbotron text-center'>No blogs to show.</div>
			{% endif %}
		{% endif %}

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