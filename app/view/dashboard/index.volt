{{ partial('dashboard/partials/dashboardNavBar') }}
<div class="container">
<h1>Live Stats</h1>


<div class="row">
	<div class="col-md-4">
		<div class="panel panel-default">
			  <div class="panel-heading">
			    <h3 class="panel-title">No of properties for Sale</h3>
			  </div>
			  <div class="panel-body">
			    <h1><?php  echo " ", count($allproperties), ""; ?></h1>
			  </div>
		</div>
	</div>

		<div class="col-md-4">
		<div class="panel panel-default">
			  <div class="panel-heading">
			    <h3 class="panel-title">No of properties for Rent</h3>
			  </div>
			  <div class="panel-body">
			    <h1><?php  echo " ", count($allrent), ""; ?></h1>
			  </div>
		</div>
	</div>
</div>


</div>