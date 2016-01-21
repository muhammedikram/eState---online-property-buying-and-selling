<div class="row">
  <div class="col-md-12">
     <div class="image-background">
       <header class="jumbotron subhead" id="overview">
       <div class="container">
        <div class="row">
          <div class="col-md-8">
           <div class="jumbtron topJumbtron">
          <!-- This the search form -->
            <div class="row">
              <div class="col-sm-12">
                  <h5 class="searchtitle"> Are you looking to buy?</h5>
              </div>
            </div>
            <hr>
              <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                <div class="panel panel-default">
                  <div class="panel-heading" role="tab" id="headingOne">
                    <h4 class="panel-title">
                      <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                       <strong>I'm looking to buy</strong>
                      </a>
                    </h4>
                  </div>
                  <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                    <div class="panel-body">
                <form action="index/search" method="post">
                 <div class="row">
                     <div class="selectTown">
                      <div class="col-sm-5 formLabel">
                        <i class="fa fa-map-marker fa-2x icon"></i>
                      <select  type="text"name='town' class='form-control dropdown' >
                          <option required>Select City</option>
                          <?php foreach ($properties as $entry) { ?>
                         <option value="<?php echo $entry->getTown(); ?>"><?php echo $entry->getTown(); ?></option>
                          <?php } ?>
                      </select> 
                      </div>
                   </div>
                   

                   <div class="selectType">
                      <div class="col-sm-5 formLabel">
                       <i class="fa fa-list fa-2x icon"></i>
                        <select  type="text"name='type' class='form-control dropdown'>
                          <option>Select Type</option>
                            <?php foreach ($propertyType as $entry) { ?>
                           <option name="text"value="<?php echo $entry->getType(); ?>"><?php echo $entry->getType(); ?></option>
                          <?php } ?>
                        </select> 
                     </div> 
                    </div> 
              </div>

               <div class="row">
                 <div class="selectBedroom">
                      <div class="col-sm-5 formLabel">
                       <i class="fa fa-bed fa-2x icon"></i>
                        <select  type="text"name='bedroom' class='form-control dropdown'>
                          <option>Select Bedroom</option>
                            <?php foreach ($propertybedroom as $entry) { ?>
                           <option name="text"value="<?php echo $entry->getBedroom(); ?>"><?php echo $entry->getBedroom(); ?></option>
                          <?php } ?>
                        </select> 
                     </div> 
                    </div>

               <div class="selectType">
                      <div class="col-sm-5 formLabel">
                       <i class="fa fa-money fa-2x icon"></i>
                        <select  type="text"name='price' class='form-control dropdown'>
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
                    </div>  

              </div> 
              <input type="submit" name="submit" id="searchSubmit"value="submit" class="btn btn-success formLabel">
            </form>
                    </div>
                  </div>
                </div>
                <div class="panel panel-default">
                  <div class="panel-heading" role="tab" id="headingTwo">
                    <h4 class="panel-title">
                      <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        <strong>I'm looking to rent</strong>
                      </a>
                    </h4>
                  </div>
                  <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                    <div class="panel-body">

            <!-- rent properties search. differnet function will handle this form -->
            <form action="index/searchrents" method="GET">
              <div class="row">
                     <div class="selectTown">
                      <div class="col-sm-5 formLabel">
                        <i class="fa fa-map-marker fa-2x icon"></i>
                      <select  type="text"name='town' class='form-control dropdown' >
                          <option required>Select City</option>
                          <?php foreach ($rentproperties as $entry) { ?>
                         <option value="<?php echo $entry->getTown(); ?>"><?php echo $entry->getTown(); ?></option>
                          <?php } ?>
                      </select> 
                      </div>
                   </div>
                   

                   <div class="selectType">
                      <div class="col-sm-5 formLabel">
                       <i class="fa fa-list fa-2x icon"></i>
                        <select  type="text"name='type' class='form-control dropdown'>
                          <option>Select Type</option>
                            <?php foreach ($rentpropertyType as $entry) { ?>
                           <option name="text"value="<?php echo $entry->getType(); ?>"><?php echo $entry->getType(); ?></option>
                          <?php } ?>
                        </select> 
                     </div> 
                    </div> 
              </div>

               <div class="row">
                 <div class="selectBedroom">
                      <div class="col-sm-5 formLabel">
                       <i class="fa fa-bed fa-2x icon"></i>
                        <select  type="text"name='bedroom' class='form-control dropdown'>
                          <option>Select Bedroom</option>
                            <?php foreach ($rentpropertybedroom as $entry) { ?>
                           <option name="text"value="<?php echo $entry->getBedroom(); ?>"><?php echo $entry->getBedroom(); ?></option>
                          <?php } ?>
                        </select> 
                     </div> 
                    </div>
              </div> 
              <input type="submit" name="submit" id="searchSubmit"value="submit" class="btn btn-success formLabel">
            </form> 
                    </div>
                  </div>
                </div>
                <div class="panel panel-default">
                  <div class="panel-heading" role="tab" id="headingThree">
                    <h4 class="panel-title">
                      <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        <strong>I'm looking for spare room</strong> <span class="label label-success">New</span>

                      </a>
                    </h4>
                  </div>
                  <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                    <div class="panel-body">
                              <form action="index/search" method="GET">
              <div class="row">
                     <div class="selectTown">
                      <div class="col-sm-5 formLabel">
                        <i class="fa fa-map-marker fa-2x icon"></i>
                      <select  type="text"name='town' class='form-control dropdown' >
                          <option required>Select City</option>
                          <?php foreach ($properties as $entry) { ?>
                         <option value="<?php echo $entry->getTown(); ?>"><?php echo $entry->getTown(); ?></option>
                          <?php } ?>
                      </select> 
                      </div>
                   </div>
                   

                   <div class="selectType">
                      <div class="col-sm-5 formLabel">
                       <i class="fa fa-list fa-2x icon"></i>
                        <select  type="text"name='type' class='form-control dropdown'>
                          <option>Select Type</option>
                            <?php foreach ($propertyType as $entry) { ?>
                           <option name="text"value="<?php echo $entry->getType(); ?>"><?php echo $entry->getType(); ?></option>
                          <?php } ?>
                        </select> 
                     </div> 
                    </div> 
              </div>

               <div class="row">
                 <div class="selectBedroom">
                      <div class="col-sm-5 formLabel">
                       <i class="fa fa-bed fa-2x icon"></i>
                        <select  type="text"name='bedroom' class='form-control dropdown'>
                          <option>Select Bedroom</option>
                            <?php foreach ($propertybedroom as $entry) { ?>
                           <option name="text"value="<?php echo $entry->getBedroom(); ?>"><?php echo $entry->getBedroom(); ?></option>
                          <?php } ?>
                        </select> 
                     </div> 
                    </div>
              </div> 
              <input type="submit" name="submit" id="searchSubmit"value="submit" class="btn btn-success formLabel"></form> 
                    </div>
                  </div>
                </div>
              </div>
            </div>
            </div>


<!--     <div class="col-md-4">
           <div class="jumbtron topJumbtron">
            <div class="row">
              <div class="col-sm-12">
                  <h5 class="fa fa-list fa-2x searchtitle">Latest Properties</h5>
              </div>
            </div>
          
              <table class="table table-valign-middle">
                  <?php foreach ($latestP as $entry) { ?>
                    <tr>
                            <td >
                           <h4 >
                            <a href="/index/propertydetails/<?php echo $entry->getPropertyID(); ?>">
                                <?php echo ucwords($entry->getStreet()); ?>, <!--Put first letter as capital -->
                                
                     <!--          </a>
                          </h4>
                        </td>
                        </tr>
                      <?php } ?>
                        </table> -->
                </div>
              </div> 
            </div>
            </div>
          </div>
       </header>
    </div>
  </div>
</div><!-- closing row    -->

</div>

<form action="index/mysearch" method="post">
          <div class="row">
                   
                      <div class="col-sm-5 formLabel">
                      <select  type="text"name='town' class='form-control dropdown' >
                          <option required>Select City</option>
                          <?php foreach ($properties as $entry) { ?>
                         <option value="<?php echo $entry->getTown(); ?>"><?php echo $entry->getTown(); ?></option>
                          <?php } ?>
                      </select> 
                      </div>
      
                   

   
                      <div class="col-sm-5 formLabel">
                        <select  type="text"name='type' class='form-control dropdown'>
                          <option>Select Type</option>
                            <?php foreach ($propertyType as $entry) { ?>
                           <option name="text"value="<?php echo $entry->getType(); ?>"><?php echo $entry->getType(); ?></option>
                          <?php } ?>
                        </select> 
                     </div> 
                


                      <div class="col-sm-5 formLabel">
                        <select  type="text"name='price' class='form-control dropdown'>
                          <option>Max price</option>
                           <option>10</option>
                           <option>20</option>
                           <option>30</option>
                           <option>40</option>
                           <option>50</option>
                           <option>60</option>
                           <option>70</option>
                           <option>80</option>
                           <option>90</option>
                           <option>100</option>
                        </select> 
                     </div> 
          
              </div>
               <input type="submit" name="submit" id="searchSubmit"value="submit" class="btn btn-success formLabel">
</form>



<style>

.secondjum .jumbotron{
  background-color: #44b645;
  height: 300px;

}
.hero-unit h2{
  margin-top: -35px;
}
#searchSubmit{
  margin-top: 19px;
}

.form-control{
  width: 86%;
}

.image-background .jumbotron {
    margin-bottom: 0px;
    /*background-image: url(images/background.jpg);*/
    background-position: 0% 25%;
    background-size: cover;
    background-repeat: no-repeat;
    height: 450px;
    margin-top: -20px;
}

.subhead .topJumbtron{
  background-color: white;
  height: 330px;
  margin-top: -10px;

}
 .formLabel{
  margin-top: 20px;
  margin-left: 20px;
}
.icon{
  opacity: 0.6;
    filter: alpha(opacity=40); /* For IE8 and earlier */
    margin-left: 0%;
}
.selectTown .dropdown{
  margin-left: 13%;
  margin-top: -10%;
}
.selectType .dropdown{
  margin-left: 13%;
  margin-top: -10%;
}
.selectBedroom .dropdown{
  margin-left: 13%;
  margin-top: -10%;

}
.panel-group{
  margin-top: -5%;
}
.panel-default .panel-heading{
  margin-bottom: -1%;
}
.panel-group .panel+.panel{
  margin-top: -0%;
}
.panel-default>.panel-heading+.panel-collapse>.panel-body{
  margin-top: 1%;
}

.searchtitle{
  margin-left: 5%;
  font-size: 25px;
  letter-spacing: 3px;
}
.panel-body{
  padding:1% !important;
}

}
</style>



