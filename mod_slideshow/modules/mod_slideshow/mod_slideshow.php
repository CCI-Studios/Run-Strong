<?php
defined('_JEXEC') or die('Direct Access to this location is not allowed.');

$image_path = 'images/galleries/'. $params->get('image_path');
$images = JFolder::files($image_path);
$title = $params->get('title');
$description = $params->get('description');
$description = str_replace("\n", "<br/>", $description);
$link = $params->get('link');
$link_text = $params->get('link_text');
$width = $params->get('width');
$height = $params->get('height');

$document = &JFactory::getDocument();
$document->addStyleSheet('/modules/mod_slideshow/media/slideshow.css');
$document->addScript('/modules/mod_slideshow/media/slideshow.js');

require(JModuleHelper::getLayoutPath('mod_slideshow'));
