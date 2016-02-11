<div class="container">
	<h2>Blog</h2>
	
	<div class="col-md-12">
			{% if blog is defined %}
			{% if blog|length > 0 %}
	
			{% for entry in blog %}
					{{entry.getName()}}<br>
					{{entry.getTitle()}}<br>
					<span>{{entry.getDescription()}}</span>
					{{entry.getDate()}}<br>
			
					{% endfor %}

				{% else %}
				<div class='jumbotron text-center'>No blogs to show.</div>
			{% endif %}
		{% endif %}

	</div>
</div>