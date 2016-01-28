<div class="container">
	<h1>Approve property  <?php echo $rt->getPropertyID(); ?></h1>

    <p>Please check the detals and ensure thar are correct before you approve the property.</p>

<?php echo $this->tag->form(array('/dashboard/approverentproperty/' . $rt->getPropertyID(), 'role' => 'form', 'method' => 'post', 'class' => 'form-horizontal')); ?>

		 <div class="form-group">
                <label for="street" class="col-md-2 control-label">Street</label>
                
                <div class="col-md-10">
                    <input type="text" id="street" name="street" placeholder="Street"   class="form-control" value="<?php echo $rt->getRents()->getStreet(); ?>" />
                </div>
            </div>


	             <div class="form-group">
                <label for="town" class="col-md-2 control-label">Town</label>
                
                <div class="col-md-10">
                    <input type="text" id="town" name="town" placeholder="Town"  class="form-control" value="<?php echo $rt->getRents()->getTown(); ?>" />
                </div>
            </div>

               <div class="form-group">
                <label for="postcode" class="col-md-2 control-label">Postcode</label>
                
                <div class="col-md-10">
                    <input type="text" id="postcode" name="postcode" placeholder="postcode"  class="form-control" value="<?php echo $rt->getRents()->getPostcode(); ?>" />
                </div>
            </div>

               <div class="form-group">
                <label for="county" class="col-md-2 control-label">County</label>
                
                <div class="col-md-10">
                    <input type="text" id="county" name="county" placeholder="County"  class="form-control" value="<?php echo $rt->getRents()->getCounty(); ?>" />
                </div>
            </div>

               <div class="form-group">
                <label for="bedroom" class="col-md-2 control-label">No of Bedrooms</label>
                
                <div class="col-md-10">
                    <input type="text" id="bedroom" name="bedroom" placeholder="Bedrooms"  class="form-control" value="<?php echo $rt->getRents()->getBedroom(); ?>" />
                </div>
            </div>

              <div class="form-group">
                <label for="description" class="col-md-2 control-label">Description</label>
                
                <div class="col-md-10">
                    <input type="text" id="description" name="description" placeholder="Description" class="form-control" value="<?php echo $rt->getRents()->getDescription(); ?>" />
                </div>
            </div>

            <div class="text-right">
            <button type="submit" class="btn btn-success" name="action" value="approve">
                <span class="glyphicon glyphicon-ok"></span>
                
                Approve
            </button>
            </div><br><br>
<?php echo $this->tag->endForm(); ?>

</div>