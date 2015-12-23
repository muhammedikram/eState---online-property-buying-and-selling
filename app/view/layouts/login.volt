{{ partial('/layouts/partials/header') }}
<p><?php $this->flash->output() ?></p>
{{ content() }}
{{ partial('/partials/footer') }}
