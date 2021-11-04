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

<?php 
    if($text_align == '0') {
        $align = 'left';
    }
    else {
        $align = 'right';
    }
?>

<?php print_r( $slides , TRUE); ?>

<div class="jl-position-relative jl-visible-toggle" tabindex="-1" jl-slideshow="animation: scale">

    <ul class="jl-slideshow-items">
    <?php foreach ($slides as $slide) : ?>
        <li>
            <img src="<?php echo $slide->background_image; ?>" alt="<?php echo $slide->title; ?>" jl-cover>
            <div class="jl-position-center-<?php echo $slide->align; ?> jl-position-small jl-text-center jl-light">
                <h2 class="jl-margin-remove"><?php echo $slide->title; ?></h2>
                <h2 class="jl-margin-remove"><?php echo $slide->sub_title; ?></h2>
                <p jl-margin>
                    <a class="jl-button jl-button-primary" href="
                    <?php if($slide->link_type == '0') { ?>
                        JRoute::_("index.php?Itemid={$slide->menuitem}");
                    <?php } else {
                        echo $slide->link;
                    } ?>">
                    <?php echo $slide->button_text; ?>
                    </a>
                </p>
            </div>
        </li>
    <?php endforeach; ?>
    </ul>

    <div class="jl-light">
        <a class="jl-position-center-left jl-position-small jl-hidden-hover" href="#" jl-slidenav-previous jl-slideshow-item="previous"></a>
        <a class="jl-position-center-right jl-position-small jl-hidden-hover" href="#" jl-slidenav-next jl-slideshow-item="next"></a>
    </div>

</div>



<div class="jl-position-relative jl-visible-toggle" tabindex="-1" jl-slideshow="animation: scale">

    <ul class="jl-slideshow-items">
        <li>
            <img src="http://lorempixel.com/1024/768/transport/" alt="" jl-cover>
            <div class="jl-position-center-left jl-position-small jl-text-center jl-light">
                <h2 class="jl-margin-remove">Left</h2>
                <p class="jl-margin-remove">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>
        </li>
        <li>
            <img src="http://lorempixel.com/1024/768/sports/" alt="" jl-cover>
            <div class="jl-position-center-right jl-position-small jl-text-center jl-light">
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