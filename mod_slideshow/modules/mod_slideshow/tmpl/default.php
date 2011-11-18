<div class="slideshow"><div><div style="width: <?= $width-2-120?>px; height: <?= $height-2-100?>px;">
	<div class="bg-image1"></div>
	<div class="bg-image2"></div>
	
	<div class="stuff">
		<h3><?= $title ?></h3>

		<div class="description">
			<?= $description ?>
		</div>

		<a class="moduleCustomLink prettylink" href="<?= $link ?>"><span><?= $link_text ?></span></a>

		<div class="images"><? foreach ($images as $image): ?>
			<img src="<?= $image_path .'/'. $image ?>" />
		<? endforeach; ?></div>
	</div>
	
	<div class="selector">
		<div><div><? foreach ($images as $image): ?>
			<div></div>
		<? endforeach; ?></div></div>
	</div>
</div></div></div>
