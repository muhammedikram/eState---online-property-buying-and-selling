<!--
*Search result page
*
*-->

<div class="container">
  <div class="row">
    <div class="col-md-3 jumbotron">
        <!-- get the refine search partial, which is saved in /views/index/partials/refinesearch -->
        {{ partial('index/partials/refinesearch') }}
     </div>     

     <div class="col-md-8"> 
      <h4><?php echo ($this->length($propertysearch)) ?> properties found</h4>
            {% if propertysearch|length > 0 %}
                <table class="table table-valign-middle">
                  <tbody>
                    {% for row in propertysearch %}
                    
                     <tr>
                <!-- Getting  Image-->
                    <td>
                      <a href="/index/propertydetails/{{row['propertyID']}}">
                          <img src="/images/{{ row['image1'] }}" width="150" height="150" class="thumbnail" style="margin-bottom: 0;" alt="" title="{{ row['image1']}}" /></a>
                      </td>
                     
                 <!-- Getting Address-->
                      <td >
                          <h4 class="addressOne">
                            <a href="/index/propertydetails/{{row['propertyID']}}">
                                {{ row['street']}}
                            </a>
                        </h4>
                      </td>

                <!-- Getting  Type-->
                       <td itemprop="type" >
                             {{ row['type']}}   
                       </td>


                        <!-- Getting  Price-->
                      <td itemprop="description" >
                              {{ row['price']}}     
                      </td>
                  
                       </tr>
              {% endfor %}
          </tbody>
          <tbody>
    </tbody>
      </table>
{% else %}

          <div class="jumbotron">
                  <p>
                      Sorry no houses availables at this time!
                  </p>
                  {% endif %}
          </div>
        </div>
    </div>
</div>
