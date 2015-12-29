<div class="container">
{{ partial('account/partials/accountNavBar') }}
	<div class="col-sm-10">
		<h1>Edit Property</h1>
   <h3> Property reference number: {{rd.getPropertyID()}}</h3>
{{ form('/account/editrentproperty/' ~ rd.getPropertyID() , 'role' : 'form', 'method' : 'post', 'class': 'form-horizontal') }}

        <div class="form-group">
                <label for="street" class="col-md-2 control-label">Street</label>
                
                <div class="col-md-10">
                    <input type="text" id="street" name="street" placeholder="Street"   class="form-control" value="{{ rd.getStreet() }}" />
                </div>
            </div>

            <div class="form-group">
                <label for="town" class="col-md-2 control-label">Town</label>
                
                <div class="col-md-10">
                    <input type="text" id="town" name="town" placeholder="Town"  class="form-control" value="{{ rd.getTown() }}" />
                </div>
            </div>

               <div class="form-group">
                <label for="postcode" class="col-md-2 control-label">Postcode</label>
                
                <div class="col-md-10">
                    <input type="text" id="postcode" name="postcode" placeholder="postcode"  class="form-control" value="{{ rd.getPostcode() }}" />
                </div>
            </div>

               <div class="form-group">
                <label for="county" class="col-md-2 control-label">County</label>
                
                <div class="col-md-10">
                    <input type="text" id="county" name="county" placeholder="County"  class="form-control" value="{{ rd.getCounty() }}" />
                </div>
            </div>

               <div class="form-group">
                <label for="bedroom" class="col-md-2 control-label">No of Bedrooms</label>
                
                <div class="col-md-10">
                    <input type="text" id="bedroom" name="bedroom" placeholder="Bedrooms"  class="form-control" value="{{ rd.getBedroom() }}" />
                </div>
            </div>

              <div class="form-group">
                <label for="description" class="col-md-2 control-label">Description</label>
                
                <div class="col-md-10">
                    <input type="text" id="description" name="description" placeholder="Description" class="form-control" value="{{ rd.getDescription() }}" />
                </div>
            </div>


            <div class="text-right">
            <button type="submit" class="btn btn-success">
                <span class="glyphicon glyphicon-save"></span>
                
                Update
            </button>
    
{{ end_form() }}
		 
	</div>
</div>