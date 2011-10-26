<?php

function modChrome_xhtml2($module, &$params, &$attribs)
{ ?>
<div class="moduletable<?php echo $params->get('moduleclass_sfx'); ?>">
	<?php if ($module->showtitle != 0) : ?>
		<h3><span><?php echo $module->title; ?></span></h3>
	<?php endif; ?>

    <?php echo $module->content; ?>
</div>
<?php }