<div class="container">
	<h2>Arrange Viewings</h2>
		{% for prop in arrangeviewproperties%}
		<div class="row">
			<div class="col-md-3">
				<img src="/images/{{ prop.getImage1() }}"  width="250" height="250" style="margin-left: 10px;" alt="" title="{{ prop.getPropertyID()  }}" />
			</div>

			<div class="col-md-4">
				<p>
				<strong>Address:</strong>{{prop.getStreet()}},{{prop.getTown()}},{{prop.getPostcode()}}</p>
				<p><strong>Price:</strong>&pound;<?php echo number_format($prop->getPrice(), 2); ?></p>
			</div>
		</div><!-- end of row -->

		<br>
		<div class="row">
			



		</div>
		{% endfor %}
</div><!-- end of container -->