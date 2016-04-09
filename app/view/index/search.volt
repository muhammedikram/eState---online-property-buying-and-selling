<!--
*Search result page
*
*-->

<div class="container">
  <div class="row">
      

     <div class="col-md-8">
      <h4><?php echo ($this->length($propertysearch)) ?> properties found</h4>
      <hr>
       {% if propertysearch is defined %}
            {% if propertysearch|length > 0 %}
                    {% for row in propertysearch %}
                    
                <!-- Getting  Image-->

                    <div class="row">
                      <div class="col-md-4">
                      <h2 class="price">&pound;{{row['price']}}</h2>
                            <a href="/index/propertydetails/{{row['propertyID']}}">
                            <img src="/images/{{ row['image1'] }}" width="200" height="180" class="thumbnail" style="margin-bottom: 0;" alt="" title="{{ row['image1']}}" /></a>
                      </div>

                      <div class="col-md-6 street">
                            <h4>{{row['street']}}, {{row['town']}}<h4>
                            <h5>{{row['bedroom']}} Bedrom , {{row['bathroom']}} Bathroom</h5>
                            <hr>
                            <h4>{{row['description']}}</h4>
                        </div>

                        <div class="col-md-2">
                            <h4><strong>For {{row['purpose']}}</strong></h4>
                        </div>
                    </div>
                    
                    <hr>
                  
                       
              {% endfor %}
{% else %}

          <div class="jumbotron">
                  <p>
                      No properties found based on your criteria's. Try searching again<br><br>
                      <a href="/index" class="btn btn-default"> Go back</a> 
                  </p>
                  {% endif %}
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