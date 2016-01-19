<h1>My search</h1>


{% if propertysearch is defined %}
{% if propertysearch|length > 0 %}

{% for row in propertysearch %}
{{ row['town'] }}<br>
{{ row['type'] }}<br>
{{ row['street'] }}<br>
{{ row['price'] }}<br>

{% endfor %}
	{% else %}
			<div class='jumbotron text-center'>No Results found.</div>
		{% endif %}


{% endif %}