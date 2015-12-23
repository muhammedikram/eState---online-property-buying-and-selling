  <h4>Refine your search</h4>
   <form action="/index/search" method="GET">   
   
   <!-- GEt the property types -->
        <div class="form-group">
          <select  type="text"name='type' class='form-control'>
              <option>Type</option>
              <?php foreach ($propertyType as $entry) { ?>
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
              <?php foreach ($propertybedroom as $entry) { ?>
                 <option name="bedroom"value="<?php echo $entry->getBedroom(); ?>"><?php echo $entry->getBedroom(); ?></option>
              <?php } ?>
          </select>
      </div>
      
      <button type="submit" class="btn btn-default">Submit</button>
    </form>
