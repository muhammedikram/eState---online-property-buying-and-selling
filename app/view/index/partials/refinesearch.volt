  <h4>Refine your search</h4>
   <form action="/index/search" method="GET">   
   
   <!-- GEt the property types -->
        <div class="form-group">
          <select  type="text"name='type' class='form-control'>
              <option>Type</option>
              {% for entry in propertyType %}
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
              {% for entry in propertybedroom %}
                 <option name="bedroom"value="{{entry.getBedroom()}}">{{entry.getBedroom()}}</option>
              {% endfor %}
          </select>
      </div>
      
      <button type="submit" class="btn btn-default">Submit</button>
    </form>
