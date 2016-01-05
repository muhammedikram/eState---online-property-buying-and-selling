
 <?php 
        $auth = $this->session->get('auth');
        $user = MemberRegister::find($auth['id']);
        $name = $auth['name'];
  ?>

<nav class="navbar topbar">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Brand</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
       <ul class="nav navbar-nav">
        <li><a href="/index">Home</a></li>
        <li><a href="/about">About</a></li>
        <li><a href="/products">Products</a></li>
        <li><a href="/dashboard">Dashboard</a></li>
        <li><a href="/account">My Account</a></li>
      </ul>
      </ul>

      <ul class="nav navbar-nav navbar-right">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?php echo $name;?> <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="/signup/end">Sign Out</a></li>
            <li role="separator" class="divider"></li>
            
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

<style>
  /*  first nav bar*/
.topbar{
  background-color: #44b645;
  color: white;
}
.topbar ul h4{
  color: white;
}
.nav .navbar-nav>li a{
  color: white;
}
.dropdown-toggle{
  color: white;
}
</style>