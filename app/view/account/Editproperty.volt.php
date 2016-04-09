<div class="container">
<?php echo $this->partial('account/partials/accountNavBar'); ?>
    <div class="col-sm-10">
        <h1>Edit Property</h1>
   <h3> Property reference number: <?php echo $ud->getPropertyID(); ?></h3>
<?php echo $this->tag->form(array('/account/editproperty/' . $ud->getPropertyID(), 'role' => 'form', 'method' => 'post', 'class' => 'form-horizontal')); ?>

        <div class="form-group">
                <label for="street" class="col-md-2 control-label">Street</label>
                
                <div class="col-md-10">
                    <input type="text" id="street" name="street" placeholder="Street"   class="form-control" value="<?php echo $ud->getStreet(); ?>" />
                </div>
            </div>

            <div class="form-group">
                <label for="town" class="col-md-2 control-label">Town</label>
                
                <div class="col-md-10">
                    <input type="text" id="town" name="town" placeholder="Town"  class="form-control" value="<?php echo $ud->getTown(); ?>" />
                </div>
            </div>

               <div class="form-group">
                <label for="postcode" class="col-md-2 control-label">Postcode</label>
                
                <div class="col-md-10">
                    <input type="text" id="postcode" name="postcode" placeholder="postcode"  class="form-control" value="<?php echo $ud->getPostcode(); ?>" />
                </div>
            </div>

               <div class="form-group">
                <label for="county" class="col-md-2 control-label">Type</label>
                
                <div class="col-md-10">
                    <input type="text" id="type" name="type" placeholder="Type"  class="form-control" value="<?php echo $ud->getType(); ?>" />
                </div>
            </div>

               <div class="form-group">
                <label for="bedroom" class="col-md-2 control-label">No of Bedrooms</label>
                
                <div class="col-md-10">
                    <input type="text" id="bedroom" name="bedroom" placeholder="Bedrooms"  class="form-control" value="<?php echo $ud->getBedroom(); ?>" />
                </div>
            </div>

              <div class="form-group">
                <label for="description" class="col-md-2 control-label">Description</label>
                
                <div class="col-md-10">
                    <input type="text" id="description" name="description" placeholder="Description" class="form-control" value="<?php echo $ud->getDescription(); ?>" />
                </div>
            </div>


            <div class="text-right">
            <button type="submit" class="btn btn-success">
                <span class="glyphicon glyphicon-save"></span>
                
                Update
            </button>

            <a class="btn btn-default" href="/account/showlistings" role="button">Back</a>
    
<?php echo $this->tag->endForm(); ?>
         
    </div>
</div>
</div>
