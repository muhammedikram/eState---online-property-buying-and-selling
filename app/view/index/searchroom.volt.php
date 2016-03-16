
<div class="container">
  <div class="row">
    <div class="col-md-3 jumbotron">
        <!-- get the refine search partial, which is saved in /views/index/partials/refinesearch -->
        <?php echo $this->partial('index/partials/refinesearch'); ?>
     </div>     

     <div class="col-md-8">
      <h4><?php echo ($this->length($page->items)) ?> Result</h4>
      <hr>
            <?php if ($this->length($page->items) > 0) { ?>
                <?php foreach ($page->items as $row) { ?>                    
                <!-- Getting  Image-->

                    <div class="row">
                      <div class="col-md-4">
                      <h2 class="price">&pound;<?php echo $row->getPrice(); ?> P/M</h2>
                            <a href="/index/propertydetails/<?php echo $row->getPropertyID(); ?>">
                            <img src="/images/<?php echo $row->getImage1(); ?>" width="200" height="180" class="thumbnail" style="margin-bottom: 0;" alt="" title="<?php echo $row->getImage1(); ?>" /></a>
                      </div>

                      <div class="col-md-6 street">
                            <h4><?php echo $row->getStreet(); ?>,<?php echo $row->getTown(); ?><h4>
                            <h5><?php echo $row->getRoomSize(); ?> Bedrom <?php echo $row->getReady(); ?></h5>
                            <hr>
                            <h4><?php echo $row->getDescription(); ?></h4>
                        </div>

                        <div class="col-md-2">
                            <h4><strong>For Rent</strong></h4>
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