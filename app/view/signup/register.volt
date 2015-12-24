
<div class="userForm">
<div id="NewUser"> 
 <legend id="h3">Register Here</legend> 
      
            {{form('signup/clientRegister','post')}}
           
            {{text_field('name','id':'name',  'required':'required','placeholder':'Name','onClick':'myFunction()')}}
            <br>
            
            {{email_field('email','required':'required','placeholder':'Email')}}
            <br>
      
          {{password_field('password','required':'required','placeholder':'Password')}}
            <br>

            {{password_field('confirm_password','required':'required','placeholder':'Confirm Password')}}
            <br>


            {{submit_button('class':'btn btn-register','name':'register','value':'Register')}}
            </form>
 </div>  
</div>
 