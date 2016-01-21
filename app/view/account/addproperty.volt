{{ partial('account/partials/accountNavBar') }}


<div class="container">
	<h3>Add a property</h3>
	<div class="row" style="margin-top:3%;">
		<div class="col-md-8 addform">
			<form action="addproperty" method="post" enctype="multipart/form-data">
			<label>* Purpose</label>
				<label class="radio-inline selltype" name="purpose" style="margin-left:20%;" >
			         <input type="radio" name="purpose" id="radio1" value="sell"> Sell
			     </label>
			     <label class="radio-inline selltype" name="purpose">
			         <input type="radio" name="purpose" id="radio2" value="rent"> Rent
			      </label>
			      <label class="radio-inline selltype" name="purpose">
			         <input type="radio" name="purpose" id="radio3" value="student"> Spare Room 
			      </label><br><br>



				<div class="form-group">
				    <label for="street">* Street</label>
				    <input type="text" class="form-control" name="street" id="street" placeholder="Street Name">
				 </div>

				 <div class="form-group">
				    <label for="town">* Town</label>
				    <input type="text" class="form-control" name="town" id="town" placeholder="Town Name">
				 </div>

				 <div class="form-group">
				    <label for="postcode">* Postcode</label>
				    <input type="text" class="form-control" name="postcode" id="postcode" placeholder="Postcode">
				 </div>

				 <div class="form-group">
				    <label for="county">* County</label>
				    <input type="text" class="form-control" name="county" id="county" placeholder="County">
				 </div>

				 <div class="form-group">
				    <label for="county" name="type" id="type">* Type</label>
					 <select class="form-control" name="type">
						  <option>House</option>
						  <option>Flat</option>
						  <option>Bungalows</option>
						  <option>Land</option>
					</select>
				</div>

				<div class="form-group">
				    <label for="county" name="bedroom" id="bedroom">* Bedrooms</label>
					 <select class="form-control" name="bedroom">
						  <option>1</option>
						  <option>2</option>
						  <option>3</option>
						  <option>4</option>
						  <option>5</option>
					</select>
				</div>
				  

				 <hr>
				 <div class="form-group">
				    <label for="description">Description</label>
				    <input type="text" class="form-control" name="description" id="description" placeholder="Enter Description">
				 </div>

				
			  <div class="form-group">
			    <label for="exampleInputAmount">Price</label>
			    <div class="input-group">
			      <div class="input-group-addon">£</div>
			      <input type="text" class="form-control" id="exampleInputAmount" placeholder="Price">
			      
			    </div>
			  </div>
			  
			  <div class="form-group">
				<label for="inputValidUntil" class="control-label ">
					Valid Until
				</label>
					<input type="date" id="inputValidUntil" name="validUntil" placeholder="Valid Until" class="form-control" />
				
			</div>
			

				

			<hr>
			<label for="image1" name="image1">Images</label>
			<div>
		        <input id="image1" type="file"   name="image1"/>
		        <br>
		        <b>Preview</b>
		        <div id="dvPreview"></div>
	    	</div>
	    	<br>
			<input type="submit"  value="submit">
			</form>
			<br><br>
		</div>	
	</div>
</div>

<script language="javascript" type="text/javascript">
        window.onload = function () {
            var fileUpload = document.getElementById("image1");
            fileUpload.onchange = function () {
                if (typeof (FileReader) != "undefined") {
                    var dvPreview = document.getElementById("dvPreview");
                    dvPreview.innerHTML = "";
                    var regex = /^([a-zA-Z0-9\s_\\.\-:])+(.jpg|.jpeg|.gif|.png|.bmp)$/;
                    for (var i = 0; i < fileUpload.files.length; i++) {
                        var file = fileUpload.files[i];
                        if (regex.test(file.name.toLowerCase())) {
                            var reader = new FileReader();
                            reader.onload = function (e) {
                                var img = document.createElement("IMG");
                                img.height = "100";
                                img.width = "100";
                                img.src = e.target.result;
                                dvPreview.appendChild(img);
                            }
                            reader.readAsDataURL(file);
                        } else {
                            alert(file.name + " is not a valid image file.");
                            dvPreview.innerHTML = "";
                            return false;
                        }
                    }
                } else {
                    alert("This browser does not support HTML5 FileReader.");
                }
            }
        };
    </script>
<style>
.selltype{
	margin-right: 10%;
}
#radio1{
	margin-right: 30%;
}

.addform{
	margin-left: 10%;
}

.addform .form-group input{
	height: 50px;
}
</style>

























