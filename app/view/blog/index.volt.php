<div class="container">
	<h2>Blog</h2>
	
	<div class="col-md-12">
			<?php if (isset($blog)) { ?>
			<?php if ($this->length($blog) > 0) { ?>
	
			<?php foreach ($blog as $entry) { ?>
					<?php echo $entry->getName(); ?><br>
					<?php echo $entry->getTitle(); ?><br>
					<span><?php echo $entry->getDescription(); ?></span>
					<?php echo $entry->getDate(); ?><br>
			
					<?php } ?>

				<?php } else { ?>
				<div class='jumbotron text-center'>No blogs to show.</div>
			<?php } ?>
		<?php } ?>

	</div>
</div>