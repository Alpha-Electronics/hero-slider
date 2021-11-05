<?php 
/**
 * @package    Alpha Electronics Location Module
 * @author     Russell English
 * @copyright  Copyright (C) 2021 Russell English. All Rights Reserved
 * @license    GPL v3.0 or later http://www.gnu.org/licenses/gpl-3.0.html
 */

defined('_JEXEC') or die('Restricted access');
use Joomla\CMS\Factory;

$document = Factory::getDocument();

use Joomla\CMS\Helper\ModuleHelper;

$slides = $params->get('slides');

require ModuleHelper::getLayoutPath('mod_hero_slider');

$options = array("version" => "auto");
$document->addStyleSheet(JURI::root() . "modules/mod_hero_slider/media/css/mod_hero_slider.css", $options);