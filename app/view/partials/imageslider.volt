
     <div id="carousel-example-generic" class="carousel slide hidden-xs" data-ride="carousel">
  <!-- Indicators -->
        <ol class="carousel-indicators">
         <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
         <li data-target="#carousel-example-generic" data-slide-to="1"></li>
         <li data-target="#carousel-example-generic" data-slide-to="2"></li>
         <li data-target="#carousel-example-generic" data-slide-to="3"></li>
        </ol>
 <!-- Wrapper for slides -->
      <div class="carousel-inner " role="listbox">
          <div class="item active">
            <img src="/images/car1.jpg" alt="car1" id="slider">
          </div>
        <div class="item">
          <img src="/images/car2.png" alt="car2" id="slider">
        </div>
        <div class="item">
          <img src="/images/car3.jpg" alt="car2" id="slider">
        </div>
        <div class="item">
          <img src="/images/car4.png" alt="car2" id="slider">
        </div>
      </div>

      <!-- Controls -->
        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
          </a>
          <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
           <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
          </a>
    </div>

<style>
  #slider{
  width: 950px;
  height:300px;
  margin-left: 200px;
  }
  .carousel-inner{
    margin-top: -20px;
  }

</style>