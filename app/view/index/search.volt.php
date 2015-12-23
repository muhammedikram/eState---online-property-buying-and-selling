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
      <h4><?php echo ($this->length($page->items)) ?> Result</h4>
            <?php if ($this->length($page->items) > 0) { ?>
                <table class="table table-valign-middle">
                  <tbody>
                    <?php foreach ($page->items as $product) { ?>
                    
                     <tr>
                <!-- Getting  Image-->
                    <td>
                      <a href="/index/propertydetails/<?php echo $product->getPropertyID(); ?>">
                          <img src="/images/<?php echo $product->getImage1(); ?>" width="150" height="150" class="thumbnail" style="margin-bottom: 0;" alt="" title="<?php echo $product->getPropertyID(); ?>" /></a>
                      </td>
                     
                 <!-- Getting Address-->
                      <td >
                          <h4 class="addressOne">
                            <a href="/index/propertydetails/<?php echo $product->getPropertyID(); ?>">
                                <?php echo $product->getStreet(); ?>
                            </a>
                        </h4>
                      </td>

                <!-- Getting  Type-->
                       <td itemprop="type" >
                             <?php echo $product->getType(); ?>   
                       </td>


                        <!-- Getting  Price-->
                      <td itemprop="description" >
                              <?php echo $product->getPrice(); ?>     
                      </td>
                      <!--
                        <td>
                            <?php echo $this->tag->linkTo(array('index/propertydetails/' . $product->getpropertyID(), '<i class="glyphicon glyphicon-edit"></i> View Details', 'class' => 'btn btn-primary')); ?>

                        </td>
                      -->
                       </tr>
              <?php } ?>
          </tbody>
          <tbody>
        <tr>
            <td colspan="7" align="left">
                <div class="btn-group">
                    <?php echo $this->tag->linkTo(array('index/search', '<i class="icon-fast-backward"></i> First', 'class' => 'btn')); ?>
                    <?php echo $this->tag->linkTo(array('index/search?page=' . $page->before, '<i class="glyphicon glyphicon-chevron-left"></i> Previous', 'class' => 'btn')); ?>
                    <?php echo $this->tag->linkTo(array('index/search?page=' . $page->next, 'Next <i class="glyphicon glyphicon-chevron-right"></i> ', 'class' => 'btn')); ?>
                    <?php echo $this->tag->linkTo(array('index/search?page=' . $page->last, '<i class="icon-fast-forward"></i> Last', 'class' => 'btn')); ?>
                    <span class="help-inline pull-left"><?php echo $page->current; ?> of <?php echo $page->total_pages; ?></span>
                </div>
            </td>
        </tr>
    </tbody>
      </table>
<?php } else { ?>

          <div class="jumbotron">
                  <p>
                      Sorry no houses availables at this time!
                  </p>
                  <?php } ?>
          </div>
        </div>
    </div>
</div>
