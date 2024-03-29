<?php

/**
 * @package    Alpha Electronics Location Module
 * @author     Russell English
 * @copyright  Copyright (C) 2021 Russell English. All Rights Reserved
 * @license    GPL v3.0 or later http://www.gnu.org/licenses/gpl-3.0.html
 */

defined('_JEXEC') or die('Restricted access');

use Joomla\CMS\HTML\HTMLHelper;
use Joomla\CMS\Router\Route;
use Joomla\CMS\Factory;

?>
<div class="jl-position-relative jl-visible-toggle visible-desktop" tabindex="-1" jl-slideshow="autoplay: true; min-height: 430; max-height: 430">

    <ul class="jl-slideshow-items">
        <?php foreach ($slides as $slide) : ?>

            <?php
            if ($slide->backgroundcolor == 0) :
                $backgroundcolor = 'rgba(255,255,255,1)';
                $color = '#3c4650';
            elseif ($slide->backgroundcolor == 1) :
                $backgroundcolor = 'rgba(254,190,14,1)';
                $color = '#3c4650';
            elseif ($slide->backgroundcolor == 2) :
                $backgroundcolor = 'rgba(255,0,0,1)';
                $color = '#ffffff';
            elseif ($slide->backgroundcolor == 3) :
                $backgroundcolor = 'rgba(0,0,0,1)';
                $color = '#ffffff';
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


            <li style="background-color:<?php echo $backgroundcolor; ?>">

                <div class="jl-overlay jl-position-center hidden-phone">
                    <?php
                    if ($slide->backgroundcolor == 3) :
                        echo '<img src="modules/mod_hero_slider/media/images/alpha-circle-light.png">';
                    else :
                        echo '<img src="modules/mod_hero_slider/media/images/alpha-circle-dark.png">';
                    endif; ?>

                </div>
                <div class="jl-container">
                    <div jl-grid class="jl-padding jl-padding-remove-left jl-padding-remove-right">
                        <div class="jl-width-2-3@m">
                            <img src="<?php echo $slide->client_logo; ?>" alt="<?php echo $slide->title; ?>" />
                            <h2 style="color:<?php echo $color; ?>"><?php echo $slide->title; ?></h2>
                            <span style="color:<?php echo $color; ?>">
                                <?php echo $slide->description; ?>
                            </span>
                            <div class="jl-margin-top jl-position-absolute">
                                <?php if ($slide->link_type == 0) : ?>

                                    <?php
                                    $menuItemId = $slide->menuitem;
                                    $menu = Factory::getApplication()->getMenu();
                                    $item = $menu->getItem($menuItemId);

                                    if ($item) {
                                        $url = Route::_('index.php?Itemid=' . $item->id);
                                        echo '<a href="' . $url . '" class="jl-button ' . $button_style . '">' . $slide->button . '</a>';
                                    }
                                    ?>
                                <?php else : ?>
                                    <a href="<?php echo $slide->link; ?>" class="jl-button <?php echo $button_style; ?>"><?php echo $slide->button; ?></a>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="jl-width-1-3@m jl-animation-toggle">
                            <div class="jl-position-relative">
                                <img src="<?php echo $slide->product_image_one; ?>" alt="<?php echo $slide->title; ?>" class="jl-position-relative" />
                                <?php if ($slide->new_product == 1) : ?>
                                    <div class="ribbon-wrapper-container jl-position-absolute <?php if ($slide->backgroundcolor == 2) : echo 'ribbon-wrapper-bg-red';
                                                                                                else : echo 'ribbon-wrapper-bg-white';
                                                                                                endif; ?> <?php if ($slide->corner == 1) : echo 'border-radius jl-padding-small';
                                                                                                                                                                                                                        endif; ?>">
                                        <div class="ribbon-wrapper jl-text-center jl-text-uppercase">
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