<h1>My search</h1>


<?php if (isset($propertysearch)) { ?>
<?php if ($this->length($propertysearch) > 0) { ?>

<?php foreach ($propertysearch as $row) { ?>
<?php echo $row['town']; ?><br>
<?php echo $row['type']; ?><br>
<?php echo $row['street']; ?><br>
<?php echo $row['price']; ?><br>

<?php } ?>
	<?php } else { ?>
			<div class='jumbotron text-center'>No Results found.</div>
		<?php } ?>


<?php } ?>