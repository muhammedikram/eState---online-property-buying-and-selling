<?php echo $this->partial('account/partials/accountNavBar'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="style">
             <h1>Update details</h1>
                <form action="" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="name">* Name</label>
                    <?php echo $this->tag->textField(array('name', 'class' => 'form-control')); ?>
                 </div>

                 <div class="form-group">
                    <label for="email">* Email</label>
                    <?php echo $this->tag->textField(array('email', 'class' => 'form-control')); ?>
                 </div>
                    <div class="clearfix">
                    <input type="submit" value="Update" class="btn btn-primary btn-large btn-success">
                &nbsp;
                 <?php echo $this->tag->linkTo(array('account/index', 'Cancel')); ?>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


<style>
    .style{
            margin-top: 30px;
        }
</style>



            