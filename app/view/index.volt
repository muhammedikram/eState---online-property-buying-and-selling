<!DOCTYPE html>
<html>
    <head>
    
         {{ stylesheet_link('css/bootstrap.min.css') }}
        {{ stylesheet_link('css/whhg.css') }}

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Your invoices">
        <meta name="author" content="Phalcon Team">
  

    </head>   
  
    
        {{ content() }}
  <body>         
   <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script src="http://code.jquery.com/ui/1.11.0/jquery-ui.min.js"></script>
        {{ javascript_include('js/jquery-2.0.3.min.js') }}
        <script src="/js/summernote.js"></script>
         <script src="/js/datepicker.js"></script>

        <script src="/js/monthly.js"></script>

        <script src="/js/fault.js"></script>
         <script src="/js/dropzone.js"></script>
         {{ javascript_include('js/custom.js') }}


        {{ javascript_include('js/bootstrap.min.js') }}
       

    </body>
<!-- font-size will be 15px on across website-->
<style>
  p{ font-size: 15px;}
</style>


</html>