  <h4>Refine your search</h4>
   <form action="/index/searchrents" method="post">   
   
   <!-- GEt the property types -->
        <div class="form-group">
          <select  type="text"name='type' class='form-control'>
              <option>Type</option>
              <?php foreach ($rentpropertyType as $entry) { ?>
                 <option name="type"value="<?php echo $entry->getType(); ?>"><?php echo $entry->getType(); ?></option>
              <?php } ?>
          </select>
      </div>

         <!-- GEt the property town -->
        <div class="form-group">
          <select  type="text"name='town' class='form-control'>
              <option>Town</option>
              <?php foreach ($properties as $entry) { ?>
                 <option name="town"value="<?php echo $entry->getTown(); ?>"><?php echo $entry->getTown(); ?></option>
              <?php } ?>
          </select>
      </div>

         <!-- GEt the property bedroom -->
        <div class="form-group">
          <select  type="text"name='bedroom' class='form-control'>
              <option>No. of Bedrooms</option>
              <?php foreach ($rentpropertybedroom as $entry) { ?>
                 <option name="bedroom"value="<?php echo $entry->getBedroom(); ?>"><?php echo $entry->getBedroom(); ?></option>
              <?php } ?>
          </select>
      </div>



         <!-- show price varience  -->
        <div class="form-group">
          <select  type="text"name='price' class='form-control'>
             <option >Max Price</option>
                  <option>10000</option>
                  <option>20000</option>
                  <option>30000</option>
                  <option>40000</option>
                  <option>50000</option>
                  <option>60000</option>
                  <option>70000</option>
                  <option>80000</option>
                  <option>90000</option>
                  <option>100000</option>
                  <option>110000</option>
                  <option>120000</option>
                
          </select>
      </div>

      
      <button type="submit" class="btn btn-default">Submit</button>
    </form>
