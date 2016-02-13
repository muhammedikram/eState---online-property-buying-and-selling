<div class="container">
	<h1>Blog</h1>
	
	<div class="col-md-8">
			<?php if (isset($blog)) { ?>
			<?php if ($this->length($blog) > 0) { ?>
	
			<?php foreach ($blog as $entry) { ?>
				<strong><?php echo $entry->getTitle(); ?></strong><br>
					<em>By <?php echo $entry->getName(); ?> on <?php echo $entry->getDate(); ?></em><br><br>
					<span><?php echo $entry->getDescription(); ?></span><br>
					
					<img src="/images/<?php echo $entry->getImage1(); ?>" width="460" height="350" class="thumbnail" style="margin-bottom: 0;" alt="" title="<?php echo $entry->getImage1(); ?>" />
					
					<hr>
					<?php } ?> 

				<?php } else { ?>
				<div class='jumbotron text-center'>No blogs to show.</div>
			<?php } ?>
		<?php } ?>

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