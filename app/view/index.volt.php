<!DOCTYPE html>
<html>
    <head>
    
         <?php echo $this->tag->stylesheetLink('css/bootstrap.min.css'); ?>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
         <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
         <!-- include codemirror (codemirror.css, codemirror.js, xml.js, formatting.js) -->
        <link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/codemirror/3.20.0/codemirror.min.css" />
        <link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/codemirror/3.20.0/theme/monokai.min.css" />

        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Your invoices">
        <meta name="author" content="Phalcon Team">
  

    </head>   
  
    
        <?php echo $this->getContent(); ?>
  <body>  
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
        <script src="http://code.jquery.com/ui/1.11.0/jquery-ui.min.js"></script>
        <?php echo $this->tag->javascriptInclude('js/jquery-2.0.3.min.js'); ?>
        <script src="/js/summernote.js"></script>
        <script src="/js/fault.js"></script>
        <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/codemirror/3.20.0/codemirror.min.js"></script>
        <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/codemirror/3.20.0/mode/xml/xml.min.js"></script>
        <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/codemirror/2.36.0/formatting.min.js"></script>
        <script type="text/javascript" src="/js/pdf.js"></script> 
        <?php echo $this->tag->javascriptInclude('js/bootstrap.min.js'); ?>
       

    </body>
<!-- font-size will be 15px on across website-->
<style>
  p{ font-size: 15px;}
</style>


</html>

