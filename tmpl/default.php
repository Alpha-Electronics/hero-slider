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


<div class="jl-position-relative jl-visible-toggle" tabindex="-1" jl-slideshow="autoplay: true; animation: scale; max-height:580">

    <ul class="jl-slideshow-items">
        <?php foreach ($slides as $slide) : ?>

            <?php
            if ($slide->text_align == '0') {
                $align = 'left';
            } else {
                $align = 'right';
            }
            ?>

            <?php
            if ($slide->text_align == '0') {
                $align = 'jl-position-top-left';
            }
            if ($slide->text_align == '1') {
                $align = 'jl-position-top-center';
            }
            if ($slide->text_align == '2') {
                $align = 'jl-position-top-right';
            }
            if ($slide->text_align == '3') {
                $align = 'jl-position-center';
            }
            if ($slide->text_align == '4') {
                $align = 'jl-position-center-left';
            }
            if ($slide->text_align == '5') {
                $align = 'jl-position-center-right';
            }
            if ($slide->text_align == '6') {
                $align = 'jl-position-bottom-left';
            }
            if ($slide->text_align == '7') {
                $align = 'jl-position-bottom-center';
            }
            if ($slide->text_align == '8') {
                $align = 'jl-position-bottom-right';
            } ?>
            <li>

                <?php if ($slide->background_type == '0') { ?>
                    <img src="<?php echo $slide->background_image; ?>" alt="<?php echo $slide->title; ?>" jl-contain>
                <?php }
                if ($slide->background_type == '1') { ?>
                    <video src="images/<?php echo $slide->background_video; ?>" loop muted playsinline jl-cover jl-video="autoplay: inview"></video>
                <?php } 
                if ($slide->background_type == '2') { ?>
                    <iframe src="https://www.youtube-nocookie.com/embed/<?php echo $slide->youtube;?>?autoplay=0&amp;showinfo=0&amp;rel=0&amp;modestbranding=1&amp;playsinline=1" width="1920" height="1080" frameborder="0" allowfullscreen jl-responsive jl-video="automute: true"></iframe>
                <?php }

                if ($slide->background_type == '3') { ?>
                    <div style="<?php echo $slide->backgroundcolor; ?>"></div>
                <?php } ?>

                <?php if ($slide->show_overlay == '1') { ?>

                <div class="<?php echo $align; ?> jl-text-left jl-width-1-4@l jl-overlay jl-overlay-default ">
                    <div>
                        <div class="jl-margin-remove jl-h2 jl-text-bold text-black"><?php echo $slide->title; ?></div>
                        <div class="jl-margin-remove jl-content text-black"><?php echo $slide->sub_title; ?></div>
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

                <?php }

                if ($slide->background_type == '3') { ?>

<div jl-grid class="jl-child-width-1-3">
    <div><img src="<?php echo $slide->buildit_left_image;?>"/></div>
    <div><?php echo $slide->buildit_text;?></div>
    <div><img src="<?php echo $slide->buildit_right_image;?>"/></div>
</div>

                <?php  } ?>

            </li>
        <?php endforeach; ?>
    </ul>

    <div class="jl-dark">
        <a class="jl-position-center-left jl-position-small jl-hidden-hover" href="#" jl-slidenav-previous jl-slideshow-item="previous"></a>
        <a class="jl-position-center-right jl-position-small jl-hidden-hover" href="#" jl-slidenav-next jl-slideshow-item="next"></a>
    </div>

</div>