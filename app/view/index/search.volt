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
      <h4><?php echo ($this->length($page->items)) ?> Result</h4>
            {% if page.items|length > 0 %}
                <table class="table table-valign-middle">
                  <tbody>
                    {% for product in page.items %}
                    
                     <tr>
                <!-- Getting  Image-->
                    <td>
                      <a href="/index/propertydetails/{{product.getPropertyID()}}">
                          <img src="/images/{{ product.getImage1() }}" width="150" height="150" class="thumbnail" style="margin-bottom: 0;" alt="" title="{{ product.getPropertyID()}}" /></a>
                      </td>
                     
                 <!-- Getting Address-->
                      <td >
                          <h4 class="addressOne">
                            <a href="/index/propertydetails/{{product.getPropertyID()}}">
                                {{ product.getStreet()}}
                            </a>
                        </h4>
                      </td>

                <!-- Getting  Type-->
                       <td itemprop="type" >
                             {{ product.getType()}}   
                       </td>


                        <!-- Getting  Price-->
                      <td itemprop="description" >
                              {{ product.getPrice()}}     
                      </td>
                      <!--
                        <td>
                            {{ link_to("index/propertydetails/" ~ product.getpropertyID(), '<i class="glyphicon glyphicon-edit"></i> View Details', "class": "btn btn-primary") }}

                        </td>
                      -->
                       </tr>
              {% endfor %}
          </tbody>
          <tbody>
        <tr>
            <td colspan="7" align="left">
                <div class="btn-group">
                    {{ link_to("index/search", '<i class="icon-fast-backward"></i> First', "class": "btn") }}
                    {{ link_to("index/search?page=" ~ page.before, '<i class="glyphicon glyphicon-chevron-left"></i> Previous', "class": "btn") }}
                    {{ link_to("index/search?page=" ~ page.next, 'Next <i class="glyphicon glyphicon-chevron-right"></i> ', "class": "btn") }}
                    {{ link_to("index/search?page=" ~ page.last, '<i class="icon-fast-forward"></i> Last', "class": "btn") }}
                    <span class="help-inline pull-left">{{ page.current }} of {{ page.total_pages }}</span>
                </div>
            </td>
        </tr>
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
