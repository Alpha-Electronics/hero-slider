<?php

/**
 * @package    Alpha Electronics Location Module
 * @author     Russell English
 * @copyright  Copyright (C) 2021 Russell English. All Rights Reserved
 * @license    GPL v3.0 or later http://www.gnu.org/licenses/gpl-3.0.html
 */

defined('_JEXEC') or die('Restricted access');

use Joomla\CMS\HTML\HTMLHelper;

?>


<div class="jl-position-relative jl-visible-toggle" tabindex="-1" jl-slideshow="animation: scale">

    <ul class="jl-slideshow-items">
        <?php foreach ($slides as $slide) : ?>

            <?php
            if ($slide->text_align == '0') {
                $align = 'left';
            } else {
                $align = 'right';
            }
            ?>

            <li>
                <img src="<?php echo $slide->background_image; ?>" alt="<?php echo $slide->title; ?>" jl-cover>
                <div class="jl-position-<?php echo $align; ?> jl-text-left jl-width-1-2@l jl-overlay jl-overlay-default ">
                    <div class="jl-width-5-6@l jl-position-medium">
                        <div class="jl-margin-remove jl-heading-medium jl-text-bold"><?php echo $slide->title; ?></div>
                        <div class="jl-margin-remove jl-heading-small"><?php echo $slide->sub_title; ?></div>
                        <p jl-margin>
                            <a class="jl-button jl-button-primary" href="<?php
                                                                            if ($slide->link_type == '0') {
                                                                                echo JRoute::_("index.php?Itemid={$slide->menuitem}");
                                                                            } else {
                                                                                echo $slide->link;
                                                                            } ?>">
                                <?php echo $slide->button_text; ?>
                            </a>
                        </p>
                    </div>
                </div>
            </li>
        <?php endforeach; ?>
    </ul>

    <div class="jl-light">
        <a class="jl-position-center-left jl-position-small jl-hidden-hover" href="#" jl-slidenav-previous jl-slideshow-item="previous"></a>
        <a class="jl-position-center-right jl-position-small jl-hidden-hover" href="#" jl-slidenav-next jl-slideshow-item="next"></a>
    </div>

</div>