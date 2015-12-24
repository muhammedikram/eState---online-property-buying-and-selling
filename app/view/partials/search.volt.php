<div class="panel panel-primary outer-panel" id="searchPanel">
    <div class="panel-heading">
        <a href="/search" style="color: inherit;">
            Search
        </a>
    </div>
    
    <div class="panel-body">
        
        <?php echo $this->tag->form(array('search', 'method' => 'get', 'role' => 'form')); ?>
            
            <div class="input-group input-group-lg">
                <?php echo $this->tag->textField(array('q', 'placeholder' => 'Search by Part Number or Keyword... (eg. "Dell 1M001" or "500gb hard drive")', 'class' => 'form-control search-control', 'id' => 'mainSearch', 'maxlength' => 100)); ?>
                
                <span class="input-group-btn">
                    <button type="submit" class="btn btn-primary" title="Search">
                        <span class="glyphicon glyphicon-search"></span>
                    </button>
                </span>
            </div>
            
        <?php echo $this->tag->endForm(); ?>
        
    </div>

</div>