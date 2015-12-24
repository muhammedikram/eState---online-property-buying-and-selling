<div class="modal fade" id="customerRegister">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h3 class="modal-title text-center">Customer Register</h3>
      </div>
      <div class="modal-body">
        <div class='modal-container'>
           <div class="row">
              <form  action="signup/clientRegister" method="post"role="form">
                  <div class="col-lg-12">
                      <div class="form-group">
                          <label for="name">Enter Name</label>
                          <div class="input-group">
                              <input type="text" class="form-control" name="name" id="name" placeholder="Enter Name" required="required">
                              <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                          </div>
                      </div>
                      <div class="form-group">
                          <label for="email">Enter Email</label>
                          <div class="input-group">
                              <input type="email" class="form-control" id="email" name="email" placeholder="Enter Email" required="required">
                              <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                          </div>
                      </div>
                      <div class="form-group">
                          <label for="InputPassword">Enter Password</label>
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
                      <button type="submit" class="btn btn-primary offer-submit">Register</button>
                    </div>
              </form>
            </div>
          </div>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->