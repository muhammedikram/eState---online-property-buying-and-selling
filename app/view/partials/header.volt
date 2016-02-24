  {{ partial('partials/customerRegister') }}

<header>
 <div class="navbar yamm  topbar  hidden-xs hidden-sm">
  <div class="container">
  <ul class="nav navbar-nav navbar-left">
  <h3 class="number"> <i class="fa fa-phone number"></i> 0844 087 4896</h3>
  </ul>

      <ul class="nav navbar-nav navbar-right">


        <li class="dropdown  yamm-fw">  
         <a class=" dropdown-toggle fa fa-user fa-2x" data-toggle="dropdown"></a>

        <a class="fa fa-plus-circle fa-2x" href="/account/addproperty">&nbsp;Add Property</a>

        <a class="fa fa-comment fa-2x   " href="/blog">&nbsp;Blog</a>
        


          <ul class="dropdown-menu" role="menu">
 <div class="row">
  <div class="col-md-4">  

<form class="form-horizontal login" role="form" id="login" action="/signup/start" method="post">
  <h3 id="signin">Sign In</h3>  
  <div class="form-group">
    <!--<label for="name" class="col-sm-2 control-label">Name</label>-->
    <div class="col-sm-10">
      <input type="text" class="form-control" name="name" id="name" placeholder="Email">
    </div>
  </div>
  <div class="form-group">
    <!--<label for="password" class="col-sm-2 control-label">Password</label>-->
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
      <button type="submit" class="btn btn-primary login-button">Sign in</button>
      </div>
    </div>
  </form>
  </div>




<!-- Register-->
<div class="col-md-3">
<div class="register">
<h3 class="text-center">New Customer</h3>
<p class="text-center">New to our website? Create an account<br> today to treat yourself withnew property</p>
<button type="submit"data-toggle='modal' data-target='#customerRegister' class="btn btn-success registerButton">New Customer</button>
</div>
</div>
</div><!-- /. Row end-->
    </ul><!-- /. End Dropdown menu -->
    </li>
  </ul>

  </div><!-- /.container-fluid -->
  </div>


<!-- Second nav bar -->
<div class="secondnavbar">
  <nav class="navbar yamm   navbar-default">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
<!--       <img class="mainlogo" src="/images/logo.png" alt="log"/>
 -->    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <img src="/images/logo.png" class="logo">
      <ul class="nav navbar-nav">
       
         <li><a href="/index">Home</a></li>
        <li><a href="/">Valuation</a></li>
        <li><a href="/">Contact</a></li>
        <li><a href="/about">About</a></li>

      </ul>
      <!-- Form on the header -->
    <div class="hidden-xs">
      <!-- {{ form("products/search") }}
        <ul class="nav navbar-nav navbar-right">
            {% for name in formInNavBar %}
          <div class="style">
            {{ name }}
              <button type="submit" class="btn btn-default" aria-label="Left Align">
              <span class="glyphicon glyphicon-search" aria-hidden="true"></span>
              </button>  
          </div>
          {% endfor %}
        </ul>
    </form> -->

    </div>
   </div><!-- /.navbar-collapse -->

</nav>
</div>
  </header>
<div class="container">
       <p class="flashOutput"><?php $this->flash->output() ?></p> 
</div>

    <style>

    .style input{
      height: 30px;
      width: 300px;
    }
    .logo{
    width: 15%;
    height: 50px;
    float: left;
    }
    .dropdown-menu {
      z-index: 9999;
    }
     .yamm .dropdown-menu li{
      text-align: left;
    }

    .yamm h4{
      text-align: left;
    }

    .yamm .nav,
    .yamm .collapse,
    .yamm .dropup,
    .yamm .dropdown {
      position: static;
    }
    .yamm .container {
      position: relative;

    }
    .yamm .dropdown-menu {
      left: auto;
    }
    .yamm .yamm-content {
      padding: 20px 30px;
    }
    .yamm .dropdown.yamm-fw .dropdown-menu {
      left: 0;
      right: 0;
    
    }
    .login{
      margin-left: 80px;
     margin-top: 20px;
     border-right: 1px solid silver;
    }
    .login input{
      width: 200px;
      margin-left: 50px;
}
   .login .login-button{
      margin-bottom: px;
      margin-left: 45px;
}
#bs-example-navbar-collapse-1{
  margin-top: 1%;
  font-size: 20px;
}
#bs-example-navbar-collapse-1 li{
  font-size: 20px;
  margin-left: 10px;
}

    /*  Hover affect  */
 /*   ul.nav li.dropdown:hover > ul.dropdown-menu {
    display: block;  */  

.register{

   border-right: 1px solid silver;
margin-top: 20px;
margin-bottom: 40px;
}
.registerButton {
  margin-top: 60px;
  margin-left: 80px;

}

 .modal-backdrop {
      z-index: 1;
    }


  #signin{
    margin-left: 117px;
  }

/*  first nav bar*/
.topbar{
  background-color: #44b645;
}
.topbar ul h4{
  color: white;
}
.fa-user {
  color: white;
    float: right;
    margin-right: 50px;
}
.fa-plus-circle {
  color: white;
    float: right;
    font-size: 18px;
}

.fa-comment {
    color: white;
    float: right;
    font-size: 18px;

}


/*  second nav bar*/
.secondnavbar{
  margin-top: -20px;
}

.mainlogo{
height: 90px;
  width: 192px;
  margin-top: 1px;
  margin-bottom: -21px;
}
.number {
  color: white;
}

</style>




</header>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap-theme.min.css">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>