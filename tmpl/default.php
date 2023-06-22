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
<div class="jl-position-relative jl-visible-toggle" tabindex="-1" jl-slideshow="autoplay: true; min-height: 430; max-height: 430">

    <ul class="jl-slideshow-items">
        <?php foreach ($slides as $slide) : ?>

            <?php if ($slide->textcolor == 1) :
                $color = 'white';
            else :
                $color = '#3c4650';
            endif; ?>

            <?php if ($slide->new_product == 1) :
                $newproduct = '<div class="new-badge">New</div>Product';
            else :
                $newproduct = '';
            endif; ?>

            <?php
            if ($slide->button_style == 0) :
                $button_style = 'jl-button-default';
            elseif ($slide->button_style == 1) :
                $button_style = 'jl-button-primary';
            elseif ($slide->button_style == 2) :
                $button_style = 'jl-button-secondary';
            elseif ($slide->button_style == 3) :
                $button_style = 'jl-button-text';
            endif; ?>

            <?php if ($slide->link_type == 0) :
                $link = $slide->menuitem;
            else :
                $link = $slide->link;
            endif; ?>


            <li style="background-color:<?php echo $slide->backgroundcolor; ?>">
                <div class="jl-container">
                    <div jl-grid class="jl-padding jl-padding-remove-left jl-padding-remove-right" jl-scrollspy="target: > div; cls: jl-animation-kenburns">
                        <div class="jl-width-2-3">
                            <img src="<?php echo $slide->client_logo; ?>" alt="<?php echo $slide->title; ?>" jl-scrollspy-class="jl-animation-slide-top"/>
                            <h2 jl-scrollspy-class="jl-animation-slide-left" style="color:<?php echo $color; ?>"><?php echo $slide->title; ?></h2>
                            <span jl-scrollspy-class="jl-animation-slide-left" style="color:<?php echo $color; ?>">
                                <?php echo $slide->description; ?>
                            </span>
                            <div class="jl-margin-top" jl-scrollspy-class="jl-animation-slide-left">
                                <a href="<?php echo $link; ?>" class="jl-button <?php echo $button_style; ?>"><?php echo $slide->button; ?></a>
                            </div>
                        </div>
                        <div class="jl-width-1-3 jl-animation-toggle" jl-scrollspy-class="jl-animation-slide-right">
                            <div class="jl-position-relative">
                                <img src="<?php echo $slide->product_image_one; ?>" alt="<?php echo $slide->title; ?>" class="jl-position-relative" />
                                <?php if ($slide->new_product == 1) : ?>
                                    <div class="ribbon-wrapper-container jl-position-absolute">
                                        <div class="ribbon-wrapper jl-text-center jl-text-uppercase" style="color:<?php echo $color; ?>">
                                            <?php echo $newproduct; ?>
                                        </div>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
        <?php endforeach; ?>
    </ul>

    <div class="jl-dark">
        <a class="jl-position-center-left jl-position-small" href="#" jl-slideshow-item="previous"><i class="fa-solid fa-circle-chevron-left fa-lg"></i></a>
        <a class="jl-position-center-right jl-position-small" href="#" jl-slideshow-item="next"><i class="fa-solid fa-circle-chevron-right fa-lg"></i></a>
    </div>
</div>