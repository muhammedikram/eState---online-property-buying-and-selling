<!--
*Search result page
*
*-->

<div class="container">
  <div class="row">
    <div class="col-md-3 jumbotron">
        <!-- get the refine search partial, which is saved in /views/index/partials/refinesearch -->
        <?php echo $this->partial('index/partials/refinerentsearch'); ?>
     </div>       

     <div class="col-md-8">
      <h4><?php echo ($this->length($rentpropertysearch)) ?> properties found</h4>
      <hr>
            <?php if ($this->length($rentpropertysearch) > 0) { ?>
                    <?php foreach ($rentpropertysearch as $row) { ?>
                    
                <!-- Getting  Image-->

                    <div class="row">
                      <div class="col-md-4">
                      <h2 class="price">&pound;<?php echo $row['price']; ?></h2>
                            <a href="/index/rentpropertydetails/<?php echo $row['propertyID']; ?>">
                            <img src="/images/<?php echo $row['image1']; ?>" width="200" height="180" class="thumbnail" style="margin-bottom: 0;" alt="" title="<?php echo $row['image1']; ?>" /></a>
                      </div>

                      <div class="col-md-6 street">
                            <h4><?php echo $row['street']; ?>, <?php echo $row['town']; ?><h4>
                            <h5><?php echo $row['bedroom']; ?> Bedrom , <?php echo $row['bathroom']; ?> Bathroom</h5>
                            <hr>
                            <h4><?php echo $row['description']; ?></h4>
                        </div>
                    </div>

                    <hr>
                  
                       
              <?php } ?>
<?php } else { ?>

          <div class="jumbotron">
                  <p>
                      No properties found based on your criteria's. Try refining your search to find properties.  
                  </p>
                  <?php } ?>
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