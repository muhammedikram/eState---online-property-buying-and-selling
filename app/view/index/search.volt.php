<!--
*Search result page
*
*-->

<div class="container">
  <div class="row">
      

     <div class="col-md-8">
      <h4><?php echo ($this->length($propertysearch)) ?> properties found</h4>
      <hr>
       <?php if (isset($propertysearch)) { ?>
            <?php if ($this->length($propertysearch) > 0) { ?>
                    <?php foreach ($propertysearch as $row) { ?>
                    
                <!-- Getting  Image-->

                    <div class="row">
                      <div class="col-md-4">
                      <h2 class="price">&pound;<?php echo $row['price']; ?></h2>
                            <a href="/index/propertydetails/<?php echo $row['propertyID']; ?>">
                            <img src="/images/<?php echo $row['image1']; ?>" width="200" height="180" class="thumbnail" style="margin-bottom: 0;" alt="" title="<?php echo $row['image1']; ?>" /></a>
                      </div>

                      <div class="col-md-6 street">
                            <h4><?php echo $row['street']; ?>, <?php echo $row['town']; ?><h4>
                            <h5><?php echo $row['bedroom']; ?> Bedrom , <?php echo $row['bathroom']; ?> Bathroom</h5>
                            <hr>
                            <h4><?php echo $row['description']; ?></h4>
                        </div>

                        <div class="col-md-2">
                            <h4><strong>For <?php echo $row['purpose']; ?></strong></h4>
                        </div>
                    </div>
                    
                    <hr>
                  
                       
              <?php } ?>
<?php } else { ?>

          <div class="jumbotron">
                  <p>
                      No properties found based on your criteria's. Try searching again<br><br>
                      <a href="/index" class="btn btn-default"> Go back</a> 
                  </p>
                  <?php } ?>
                <?php } ?>
          </div>
        </div>

          <div class="col-md-4">
        <h2>Sweet Service</h2>
          <div class="panel panel-default ">
              <div class="panel-body">
              <?php if (isset($ratings)) { ?>
            <?php if ($this->length($ratings) > 0) { ?>
        
            <?php foreach ($ratings as $entry) { ?>
              <strong><?php echo ucwords($entry->getName()); ?></strong> &nbsp;  &nbsp;  &nbsp;&nbsp;<img src="/images/stars/<?php echo $entry->getRating(); ?>"><br>
                <em>"<?php echo $entry->getComments(); ?></em>"
                <hr>
                <?php } ?> 

              <?php } else { ?>
              <div class='jumbotron text-center'>No Ratings to display.</div>
            <?php } ?>
          <?php } ?>
              </div>
          </div>
        </div>
    </div>
</div>

<style> 
  .price {
    color: green;
    margin-top: -5%;
  }

</style>