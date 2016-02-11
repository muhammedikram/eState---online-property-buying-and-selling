<div class="modal fade" id="valuationprice">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h3 class="modal-title text-center">Set Price
        <?php
          if($row->getPropertyID());
        
        ?>

        </h3>
      </div>
      <div class="modal-body">
        <div class='modal-container'>
           <div class="row">
              <form  action="/dashboard/valuation/<?php echo $row->getPropertyID(); ?>" method="post"role="form">
                  <div class="col-lg-12">
                     <div class="form-group">
            <label for="exampleInputAmount">Price</label>
            <div class="input-group">
              <div class="input-group-addon">£</div>
              <input type="text" class="form-control" id="exampleInputAmount" name="price" placeholder="Price">
            </div>
          </div>
                  </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                      <button type="submit" class="btn btn-success offer-submit">Set Price</button>
                    </div>
                    <div class="alert alert-info" role="alert">Please Note: Setting price will automatically enable property in system</div>

              </form>
            </div>
          </div>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->