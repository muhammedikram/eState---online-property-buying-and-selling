
<!--This volt page will include all the social stuff for example twitter tweets, customers feedback, and links to social sites -->


	<div class="row">
		<div class="jumbotron">
			<div class="container">
				<div class="col-md-4">
				<h2>Twitter</h2>
					<div class="panel panel-default	">
		  				<div class="panel-body twitter">
		    				<a class="twitter-timeline" href="https://twitter.com/estate7861" data-widget-id="709883980703776768">Tweets by @eState</a>
								<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>

		  				</div>
					</div>
				</div>


				<div class="col-md-4">
				<h2>Sweet Service</h2>
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

				<div class="col-md-4">
				<h2>News</h2>
					<div class="panel panel-default	">
		  				{% if blog is defined %}
						{% if blog|length > 0 %}
				
						{% for entry in blog %}
							<div class="container">
							<strong>{{entry.getTitle()}}</strong><br>
								<span>{{entry.getDescription()}}</span><br>
								</div>
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


<style>
iframe.twitter-timeline {
    height: 280px!important;
}
</style>
