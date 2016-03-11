<div class="container">
{{ partial('dashboard/partials/dashboardNavBar') }}

	<h1>Blogs</h1>
<div class="row">
			{% if blog is defined %}
			{% if blog|length > 0 %}
	
			{% for entry in blog %}
			<div class="jumbotron">
				<strong>{{entry.getTitle()}}</strong><br>
					<em>By {{entry.getName()}} on {{entry.getDate()}}</em><br><br>
					<span>{{entry.getDescription()}}</span><br>
					
					<img src="/images/{{ entry.getImage1() }}" width="260" height="150" class="thumbnail" style="margin-bottom: 0;" alt="" title="{{ entry.getImage1() }}" />

					<button class="pull-right btn-lg btn-danger remove">Remove</button>
				</div>
					<hr>
					{% endfor %} 

				{% else %}
				<div class='jumbotron text-center'>No blogs to show.</div>
			{% endif %}
		{% endif %}

</div>

</div>

<style>
	.remove {
		margin-top: -15%;
	}
</style>