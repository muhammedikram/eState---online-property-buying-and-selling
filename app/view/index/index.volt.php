
<!--Get all the content, passed through index.php file -->
  <?php $this->flash->output() ?>

<!--output the welcome partial. which included property 
	search and latest properties. -->
 <?php echo $this->partial('index/partials/welcome'); ?>

<!--output the gettingstarted partial. which includes selling property  -->
 <?php echo $this->partial('index/partials/gettingstarted'); ?>

<!--output the tools partial. which includes how it works  -->
<?php echo $this->partial('index/partials/tools'); ?>

<!--output the social partial. which includes news/blogs/twitter  -->
<?php echo $this->partial('index/partials/social'); ?>

<p>HELLO MUFI</p>