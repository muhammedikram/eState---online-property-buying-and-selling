<!DOCTYPE html> 
<html lang = "en"> 

   <head> 
   <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
      <meta charset = "utf-8"> 
      <title>Register Form</title> 
   </head>
	
   <body> 
   <div class="row">
   	<div class="col-md-12">
      <h1 class="center">Register Form </h1>

    <form class="form-horizontal" action="test" method="post">
  <div class="form-group">
    <label for="name" class="col-sm-2 control-label">Name</label>
    <div class="col-sm-6	">
      <input type="name" class="form-control" name="name"id="name" placeholder="Name">
    </div>
  </div>
  <div class="form-group">
    <label for="email" class="col-sm-2 control-label">Email</label>
    <div class="col-sm-6">
      <input type="email" class="form-control" name="email"id="email" placeholder="Email">
    </div>
  </div>

  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-default">Sign in</button>
    </div>
  </div>
</form>



     </div>
   </div>
   </body>
	
</html>

<style>
	body{
		background-color:white;
	}

	.center{
		margin-left: 30%;
		margin-top: 2%;
	}


</style>