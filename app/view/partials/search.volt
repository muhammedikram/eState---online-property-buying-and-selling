<div class="panel panel-primary outer-panel" id="searchPanel">
    <div class="panel-heading">
        <a href="/search" style="color: inherit;">
            Search
        </a>
    </div>
    
    <div class="panel-body">
        
        {{ form('search', 'method' : 'get', 'role': 'form') }}
            
            <div class="input-group input-group-lg">
                {{ text_field('q', 'placeholder': 'Search by Part Number or Keyword... (eg. "Dell 1M001" or "500gb hard drive")', 'class': 'form-control search-control', 'id': 'mainSearch', 'maxlength': 100) }}
                
                <span class="input-group-btn">
                    <button type="submit" class="btn btn-primary" title="Search">
                        <span class="glyphicon glyphicon-search"></span>
                    </button>
                </span>
            </div>
            
        {{ end_form() }}
        
    </div>

</div>