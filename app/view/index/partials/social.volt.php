
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
		  				<?php if (isset($blog)) { ?>
						<?php if ($this->length($blog) > 0) { ?>
				
						<?php foreach ($blog as $entry) { ?>
							<strong><?php echo $entry->getTitle(); ?></strong><br>
								<span><?php echo $entry->getDescription(); ?></span><br>
								
								<hr>
								<?php } ?> 

							<?php } else { ?>
							<div class='jumbotron text-center'>No blogs to show.</div>
						<?php } ?>
					<?php } ?>

					</div>
				</div>
			</div>

		</div>
	</div>


