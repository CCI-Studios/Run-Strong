<?php
defined('_JEXEC') or die('Direct Access to this location is not allowed.');

$_day = 60*60*24;
$_hour = 60*60;

$date = $params->get('date');
$difference = strtotime($date) - time();
$days = floor($difference/$_day);
$hours = floor(($difference - $days*$_day) / $_hour);
$minutes = floor(($difference - $days*$_day - $hours*$_hour) / 60);
$seconds = floor($difference - $days*$_day - $hours*$_hour - $minutes*60);

$document = &JFactory::getDocument();
$document->addStyleSheet('/modules/mod_countdown/media/countdown.css');
$document->addScript('/modules/mod_countdown/media/countdown.js');

require(JModuleHelper::getLayoutPath('mod_countdown'));
