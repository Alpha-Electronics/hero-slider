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




<div class="jl-position-relative jl-visible-toggle" tabindex="-1" jl-slideshow="animation: scale">

    <ul class="jl-slideshow-items">
        <li>
            <img src="http://lorempixel.com/1024/768/transport/" alt="" jl-cover>
            <div class="jl-position-left jl-position-small jl-text-center jl-light">
                <h2 class="jl-margin-remove">Left</h2>
                <p class="jl-margin-remove">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>
        </li>
        <li>
            <img src="http://lorempixel.com/1024/768/sports/" alt="" jl-cover>
            <div class="jl-position-right jl-position-small jl-text-center jl-light">
                <h3 class="jl-margin-remove">Right</h3>
                <p class="jl-margin-remove">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>
        </li>
    </ul>

    <div class="jl-light">
        <a class="jl-position-center-left jl-position-small jl-hidden-hover" href="#" jl-slidenav-previous jl-slideshow-item="previous"></a>
        <a class="jl-position-center-right jl-position-small jl-hidden-hover" href="#" jl-slidenav-next jl-slideshow-item="next"></a>
    </div>

</div>