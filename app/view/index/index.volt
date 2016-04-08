
<!--Get all the content, passed through index.php file -->
  <?php $this->flash->output() ?>

<!--output the welcome partial. which included property 
	search and latest properties. -->
 {{ partial('index/partials/welcome') }}

<!--output the gettingstarted partial. which includes selling property  -->
 {{ partial('index/partials/gettingstarted') }}

<!--output the tools partial. which includes how it works  -->
{{ partial('index/partials/tools') }}

<!--output the social partial. which includes news/blogs/twitter  -->
{{ partial('index/partials/social') }}

