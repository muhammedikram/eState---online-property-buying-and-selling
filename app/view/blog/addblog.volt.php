
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<link rel='stylesheet' href="/css/summernote.css" />

<div class="container">
<?php echo $this->partial('dashboard/partials/dashboardNavBar'); ?>

	<h3>Add a Blog</h3>
	<div class="row">
		<div class="col-md-8">
				<form class="form-horizontal" action="/blog/addblog" method="post" enctype="multipart/form-data">
				  <div class="form-group">
				    <label for="name" class="col-sm-2 control-label">Your Nmae</label>
				    <div class="col-sm-10">
				      <input type="text" class="form-control"  name="name"id="name" placeholder="Name">
				    </div>
				  </div>
				    <div class="form-group">
				    <label for="title" class="col-sm-2 control-label">Title of blog</label>
				    <div class="col-sm-10">
				      <input type="text" class="form-control"  name="title"id="title" placeholder="Title">
				    </div>
				  </div>
				  	<div class="form-group">
				    <label for="title" class="col-sm-2 control-label">Blog </label>
				     <div class="col-sm-10">
						<textarea name="description" id="description" class="form-control"></textarea>
						</div>
					</div>
					<div class="form-group">
				    <label for="title" class="col-sm-2 control-label">Images </label>
					<div class="col-sm-10">
					<input id="image1" type="file"   name="image1"/>
					</div>
					</div>
				  <div class="form-group">
				    <div class="col-sm-offset-2 col-sm-10">
				      <button type="submit" class="btn btn-success">Submit</button>
				    </div>
				  </div>
				</form>
		</div>
	</div>
</div>
						


// <script>

// $(document).ready(function(){
// 	$('#description').summernote({
// 		  height: 200,   //set editable area's height
// 		  codemirror: { // codemirror options
// 		    theme: 'monokai'
// 		  },
// 		  focus : true
// 		});
// });
// </script>























