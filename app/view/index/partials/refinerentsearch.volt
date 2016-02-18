  <h4>Refine your search</h4>
   <form action="/index/searchrents" method="post">   
   
   <!-- GEt the property types -->
        <div class="form-group">
          <select  type="text"name='type' class='form-control'>
              <option>Type</option>
              {% for entry in rentpropertyType %}
                 <option name="type"value="{{entry.getType()}}">{{entry.getType()}}</option>
              {% endfor %}
          </select>
      </div>

         <!-- GEt the property town -->
        <div class="form-group">
          <select  type="text"name='town' class='form-control'>
              <option>Town</option>
              {% for entry in properties%}
                 <option name="town"value="{{entry.getTown()}}">{{entry.getTown()}}</option>
              {% endfor %}
          </select>
      </div>

         <!-- GEt the property bedroom -->
        <div class="form-group">
          <select  type="text"name='bedroom' class='form-control'>
              <option>No. of Bedrooms</option>
              {% for entry in rentpropertybedroom %}
                 <option name="bedroom"value="{{entry.getBedroom()}}">{{entry.getBedroom()}}</option>
              {% endfor %}
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
