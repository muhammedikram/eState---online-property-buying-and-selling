<div class="container">
<form class="form-horizontal" role="form" id="login" action="/signup/start" method="post">
  <div class="form-group">
    <label for="name" class="col-sm-2 control-label">Name</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="name" id="name" placeholder="Email">
    </div>
  </div>
  <div class="form-group">
    <label for="password" class="col-sm-2 control-label">Password</label>
    <div class="col-sm-10">
      <input type="password" name="password" class="form-control" id="password" placeholder="Password">
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
    
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-default">Sign in</button>



<button data-toggle='modal' data-target='#customernewRegister' type="button"  class="btn btn-primary">
  <span class="glyphicon glyphicon-pencil"   aria-hidden="true"></span> Register
</button>
    </div>
  </div>
</form>

</div>

<div class="modal fade" id="customernewRegister">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h3 class="modal-title text-center">Customer Register</h3>
      </div>
      <div class="modal-body">
        <div class='modal-container'>
           <div class="row">
              <form  action="/signup/clientRegister" method="post"role="form">
                  <div class="col-lg-12">
                      <div class="form-group">
                          <label for="name">Name</label>
                          <div class="input-group">
                              <input type="text" class="form-control" name="name" id="name" placeholder="Enter Name" required="required">
                              <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                          </div>
                      </div>
                      <div class="form-group">
                          <label for="email">Email</label>
                          <div class="input-group">
                              <input type="email" class="form-control" id="email" name="email" placeholder="Enter Email" required="required">
                              <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                          </div>
                      </div>
                      <div class="form-group">
                          <label for="InputPassword">Password</label>
                          <div class="input-group">
                              <input type="password" class="form-control" id="password" name="password" placeholder="Enter Password" required="required">
                              <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                          </div>
                      </div>
                      <div class="form-group">
                          <label for="confirm_password">Confirm Password</label>
                          <div class="input-group">
                              <input type="password" name="confirm_password" id="confirm_password" placeholder="Confim Password" class="form-control"  required="required" >
                              <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                          </div>
                      </div>
                  </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                      <button type="submit" class="btn btn-success offer-submit">Register</button>
                    </div>
              </form>
            </div>
          </div>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->


<!-- SIGNUP FORM END  --> 






