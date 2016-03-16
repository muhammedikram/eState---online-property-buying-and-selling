
<div class="container">
  <div class="row">
    <div class="col-md-3 jumbotron">
        <!-- get the refine search partial, which is saved in /views/index/partials/refinesearch -->
        {{ partial('index/partials/refinesearch') }}
     </div>     

     <div class="col-md-8">
      <h4><?php echo ($this->length($page->items)) ?> Result</h4>
      <hr>
            {% if page.items|length > 0 %}
                {% for row in page.items %}                    
                <!-- Getting  Image-->

                    <div class="row">
                      <div class="col-md-4">
                      <h2 class="price">&pound;{{row.getPrice()}} P/M</h2>
                            <a href="/index/roomdetails/{{row.getPropertyID()}}">
                            <img src="/images/{{ row.getImage1()}}" width="200" height="180" class="thumbnail" style="margin-bottom: 0;" alt="" title="{{row.getImage1()}}" /></a>
                      </div>

                      <div class="col-md-6 street">
                            <h4>{{row.getStreet() }},{{row.getTown()}}<h4>
                            <h5>{{row.getRoomSize()}} Bedrom {{row.getReady()}}</h5>
                            <hr>
                            <h4>{{row.getDescription()}}</h4>
                        </div>

                        <div class="col-md-2">
                            <h4><strong>For Rent</strong></h4>
                        </div>
                    </div>
                    
                    <hr>
                  
                       
              {% endfor %}
{% else %}

          <div class="jumbotron">
                  <p>
                      No properties found based on your criteria's. Try refining your search to find properties.  
                  </p>
                  {% endif %}
          </div>
        </div>
    </div>
</div>

<style> 
  .price {
    color: green;
    margin-top: -5%;
  }

</style>