<?php
defined('_JEXEC') or die('Direct Access to this location is not allowed.');

$images = array('images/galleries/header_images/image1.jpg', 'images/galleries/header_images/image2.jpg', 'images/galleries/header_images/image3.jpg', 'images/galleries/header_images/image4.jpg');
$title = "Sed At Semper";
$description = "<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
<p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>";
$link = "http://google.com";
$link_text = "About";
$width = 940;
$height = 350;

$document = &JFactory::getDocument();
$document->addStyleSheet('/modules/mod_slideshow/media/slideshow.css');
$document->addScript('/modules/mod_slideshow/media/slideshow.js');

require(JModuleHelper::getLayoutPath('mod_slideshow'));
