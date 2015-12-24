      <div class="row">
        <div class="col-sm-12 ">
          <div class="row">
           <div class="col-sm-4">
            <div class="thumbnail">
              <img src="/images/buycar.jpg" alt="car2" id="cars">
              <div class="caption">
                  <h1>Buy Car</h1>
                   <p>...</p>
              </div>
            </div>
          </div>
          <div class="col-sm-4">
            <div class="thumbnail">
              <img src="/images/sellcar.jpg" alt="car2" id="cars">
              <div class="caption">
                  <h1>Rent Car</h1>
                   <p>...</p>
              </div>
            </div>
          </div>
          <div class="col-sm-4">
            <div class="thumbnail">
              <img src="/images/rentcar.jpg" alt="car2" id="cars">
              <div class="caption">
                  <h1>Sell Car</h1>
                   <p>...</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  
    <style>
    #cars{
      width: 300px;
      height: 200px;
      opacity: 0.9;

        }
        .thumbnail{
          width: 300px;
          height: 300px;
          position:relative;
        }
        .caption{
          position: absolute;
          top:0;
          left:0;

        }
        .thumbnail. hover{

        }

    </style>

<script>
  $('.thumbnail').hover(

                function() {
                    $(this).find('.caption').slideDown(250);
                    $('.caption-btm').hide(100);
                },

                function() {
                    $(this).find('.caption').slideUp(250);
                    $('.caption-btm').show(450);
                });
</script>
}
