<!--
*Search result page
*
*-->

<div class="container">
  <div class="row">
    <div class="col-md-3 jumbotron">
        <!-- get the refine search partial, which is saved in /views/index/partials/refinesearch -->
        <?php echo $this->partial('index/partials/refinesearch'); ?>
     </div>     

     <div class="col-md-8"> 
      <h4><?php echo ($this->length($propertysearch)) ?> properties found</h4>
            <?php if ($this->length($propertysearch) > 0) { ?>
                <table class="table table-valign-middle">
                  <tbody>
                    <?php foreach ($propertysearch as $row) { ?>
                    
                     <tr>
                <!-- Getting  Image-->
                    <td>
                      <a href="/index/propertydetails/<?php echo $row['propertyID']; ?>">
                          <img src="/images/<?php echo $row['image1']; ?>" width="150" height="150" class="thumbnail" style="margin-bottom: 0;" alt="" title="<?php echo $row['image1']; ?>" /></a>
                      </td>
                     
                 <!-- Getting Address-->
                      <td >
                          <h4 class="addressOne">
                            <a href="/index/propertydetails/<?php echo $row['propertyID']; ?>">
                                <?php echo $row['street']; ?>
                            </a>
                        </h4>
                      </td>

                <!-- Getting  Type-->
                       <td itemprop="type" >
                             <?php echo $row['type']; ?>   
                       </td>


                        <!-- Getting  Price-->
                      <td itemprop="description" >
                              <?php echo $row['price']; ?>     
                      </td>
                  
                       </tr>
              <?php } ?>
          </tbody>
          <tbody>
    </tbody>
      </table>
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
