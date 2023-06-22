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
            <li style="background-color:<?php echo $slide->backgroundcolor; ?>">
                <div class="jl-container">
                    <div jl-grid>
                        <div class="jl-width-2-3">
                            <img src="<?php echo $slide->client_logo; ?>" alt="" />
                            <h2><?php echo $slide->title; ?></h2>
                            <?php echo $slide->description; ?>
                            <a class="jl-button jl-button-default"><a href="<?php echo $slide->link_type; ?>"><?php echo $slide->button; ?></a>
                        </div>
                        <div class="jl-width-1-3">
                            <img src="<?php echo $slide->product_image_one; ?>" alt="<?php echo $slide->title; ?>" />
                            <?php echo $slide->new_product; ?>
                        </div>
                    </div>
                </div>
            </li>
        <?php endforeach; ?>
    </ul>

    <div class="jl-dark">
        <a class="jl-position-center-left jl-position-small jl-hidden-hover" href="#" jl-slidenav-previous jl-slideshow-item="previous"></a>
        <a class="jl-position-center-right jl-position-small jl-hidden-hover" href="#" jl-slidenav-next jl-slideshow-item="next"></a>
    </div>
</div>