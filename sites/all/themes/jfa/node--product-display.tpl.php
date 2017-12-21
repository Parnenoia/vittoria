<div class="col-xs-12 col-sm-5 col-sm-offset-1">
	<?php print render($content['product:field_kunstwerk']); ?>
</div>
<div class="col-xs-12 col-sm-6 product">
	<h2><?php print render($content['field_artiest']); ?></h2>
	<h1><?php print $title; ?></h1>
	<ul >
		<?php if (!empty($content['field_kunststijle'])): ?>
			<li><?php print render($content['field_kunststijle']); ?></li>
		<?php endif; ?>
		<li>Afmetingen: <?php print render($content['product:field_hoogte']); ?> x <?php print render($content['product:field_breedte']); ?><?php if (!empty($content['product:field_diepte'])): ?><span> x <?php print render($content['product:field_diepte']);?></span><?php endif; ?>
		<li><?php print render($content['product:field_oplage']); ?></li>
		<li><?php print render($content['product:sku']); ?></li>
	</ul>
	<ul>
		<li><?php print render($content['product:commerce_price']); ?></li>
		<?php if (!empty($content['product:field_levering'])): ?>
			<li><?php print render($content['product:field_levering']); ?></li>
		<?php endif; ?>
		<?php if (!empty($content['product:field_levertijd'])): ?>
			<li><?php print render($content['product:field_levertijd']); ?></li>
		<?php endif; ?>
		<?php if (!empty($content['product:'])): ?>
			<li><?php print render($content['product:']); ?></li>
		<?php endif; ?>
	</ul>
	<?php print render($content); ?>
</div>
<div class="col-xs-12 product">
</div>