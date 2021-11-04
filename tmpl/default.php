<?php

/**
 * @package    Alpha Electronics Location Module
 * @author     Russell English
 * @copyright  Copyright (C) 2021 Russell English. All Rights Reserved
 * @license    GPL v3.0 or later http://www.gnu.org/licenses/gpl-3.0.html
 */

defined('_JEXEC') or die('Restricted access');

use Joomla\CMS\HTML\HTMLHelper;

HTMLHelper::_('stylesheet', 'mod_hero_slider/media/css/mod_hero_slider.css', ['version' => 'auto', 'relative' => true]);
?>

<div id="locations" class="jl-child-width-expand@s" jl-grid>
    <?php foreach ($locations as $location) : ?>

        <div>
            <div class="jl-card jl-card-body jl-text-center">
                <i class="fas fa-map-marker-alt fa-2x"></i>
                <h3 class="jl-text-bold"><?php echo $location->name; ?></h3>
                <p>
                    <?php echo $location->address_one; ?><br>
                    <?php echo $location->address_two; ?><br>
                    <?php echo $location->address_three; ?>
                </p>
                <p><a class="jl-button jl-button-text jl-text-bold" href="tel:<?php echo $location->number; ?>"><?php echo $location->number; ?></a></p>
            </div>
        </div>

    <?php endforeach; ?>
</div>




<div class="uk-position-relative uk-visible-toggle" tabindex="-1" uk-slideshow="animation: push">

    <ul class="uk-slideshow-items">
        <li>
            <img src="images/photo.jpg" alt="" uk-cover>
            <div class="uk-position-center uk-position-small uk-text-center uk-light">
                <h2 class="uk-margin-remove">Center</h2>
                <p class="uk-margin-remove">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>
        </li>
        <li>
            <img src="images/dark.jpg" alt="" uk-cover>
            <div class="uk-position-bottom uk-position-medium uk-text-center uk-light">
                <h3 class="uk-margin-remove">Bottom</h3>
                <p class="uk-margin-remove">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>
        </li>
        <li>
            <img src="images/light.jpg" alt="" uk-cover>
            <div class="uk-overlay uk-overlay-primary uk-position-bottom uk-text-center">
                <h3 class="uk-margin-remove">Overlay Bottom</h3>
                <p class="uk-margin-remove">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>
        </li>
        <li>
            <img src="images/dark.jpg" alt="" uk-cover>
            <div class="uk-overlay uk-overlay-default uk-position-bottom-right uk-position-small">
                <h3 class="uk-margin-remove">Overlay Bottom Right</h3>
                <p class="uk-margin-remove">Lorem ipsum dolor sit amet.</p>
            </div>
        </li>
    </ul>

    <div class="uk-light">
        <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slideshow-item="previous"></a>
        <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slideshow-item="next"></a>
    </div>

</div>