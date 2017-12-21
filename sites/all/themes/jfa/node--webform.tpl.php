<div class="container">
	<div class="row">
		<div class="col-xs-12 col-sm-6">
			<h1><?php print $title; ?></h1>
			<?php hide($content['field_into_form']); hide($content['body']); print render($content); ?>
		</div>
		<div class="col-xs-12 col-sm-6">
			<?php print render($content['body']); ?>
		</div>
	</div>
</div>