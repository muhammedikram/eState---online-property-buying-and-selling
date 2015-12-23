<?php echo $this->partial('/layouts/partials/header'); ?>
<p><?php $this->flash->output() ?></p>
<?php echo $this->getContent(); ?>
<?php echo $this->partial('/partials/footer'); ?>
