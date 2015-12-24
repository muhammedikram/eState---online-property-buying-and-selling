
<div class="userForm">
<div id="NewUser"> 
 <legend id="h3">Register Here</legend> 
      
            <?php echo $this->tag->form(array('signup/clientRegister', 'post')); ?>
           
            <?php echo $this->tag->textField(array('name', 'id' => 'name', 'required' => 'required', 'placeholder' => 'Name', 'onClick' => 'myFunction()')); ?>
            <br>
            
            <?php echo $this->tag->emailField(array('email', 'required' => 'required', 'placeholder' => 'Email')); ?>
            <br>
      
          <?php echo $this->tag->passwordField(array('password', 'required' => 'required', 'placeholder' => 'Password')); ?>
            <br>

            <?php echo $this->tag->passwordField(array('confirm_password', 'required' => 'required', 'placeholder' => 'Confirm Password')); ?>
            <br>


            <?php echo $this->tag->submitButton(array('class' => 'btn btn-register', 'name' => 'register', 'value' => 'Register')); ?>
            </form>
 </div>  
</div>
 