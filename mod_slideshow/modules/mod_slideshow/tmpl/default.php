<div class="slideshow"><div style="width: <?= $width-2-120?>px; height: <?= $height-2-100?>px;">
	<div class="bg-image1"></div>
	<div class="bg-image2"></div>
	
	<div class="stuff">
		<h3><?= $title ?></h3>

		<div class="description">
			<?= $description ?>
		</div>

		<a class="moduleCustomLink prettylink" href="<?= $link ?>"><?= $link_text ?></a>

		<div class="images"><? foreach ($images as $image): ?>
			<img src="<?= $image ?>" />
		<? endforeach; ?></div>
	
		<div class="selector">
			<ul><? foreach ($images as $image): ?>
				<li></li>
			<? endforeach; ?></ul>
		</div>
	</div>
</div></div>
