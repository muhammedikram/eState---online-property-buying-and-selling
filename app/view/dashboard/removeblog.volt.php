<div class="container">
<?php echo $this->partial('dashboard/partials/dashboardNavBar'); ?>

	<h1>Blogs</h1>
<div class="row">
			<?php if (isset($blog)) { ?>
			<?php if ($this->length($blog) > 0) { ?>
	
			<?php foreach ($blog as $entry) { ?>
			<div class="jumbotron">
				<strong><?php echo $entry->getTitle(); ?></strong><br>
					<em>By <?php echo $entry->getName(); ?> on <?php echo $entry->getDate(); ?></em><br><br>
					<span><?php echo $entry->getDescription(); ?></span><br>
					
					<img src="/images/<?php echo $entry->getImage1(); ?>" width="260" height="150" class="thumbnail" style="margin-bottom: 0;" alt="" title="<?php echo $entry->getImage1(); ?>" />

					<button class="pull-right btn-lg btn-danger remove">Remove</button>
				</div>
					<hr>
					<?php } ?> 

				<?php } else { ?>
				<div class='jumbotron text-center'>No blogs to show.</div>
			<?php } ?>
		<?php } ?>

</div>

</div>

<style>
	.remove {
		margin-top: -15%;
	}
</style>