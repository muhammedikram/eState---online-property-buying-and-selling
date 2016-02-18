<div class="container">
    <div class="col-sm-10">
        <h1>Add Price</h1>
   <h3> Property reference number: <?php echo $ud->getPropertyID(); ?></h3>
<?php echo $this->tag->form(array('/dashboard/addprice/' . $ud->getPropertyID(), 'role' => 'form', 'method' => 'post', 'class' => 'form-horizontal')); ?>

        <div class="form-group">
                <label for="price" class="col-md-2 control-label">price</label>
                
                <div class="col-md-10">
                    <input type="text" id="price" name="price" placeholder="price"   class="form-control" />
                </div>
            </div>

            <div class="text-right">
            <button type="submit" class="btn btn-success">
                <span class="glyphicon glyphicon-save"></span>
                
                Update
            </button>
           

            <a class="btn btn-default" href="/dashboard/valuation" role="button">Back</a> <br><br>
    
<?php echo $this->tag->endForm(); ?>
         
    </div>
</div>
</div>
