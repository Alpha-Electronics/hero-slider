<?php

/**
 * @package    Alpha Electronics Location Module
 * @author     Russell English
 * @copyright  Copyright (C) 2021 Russell English. All Rights Reserved
 * @license    GPL v3.0 or later http://www.gnu.org/licenses/gpl-3.0.html
 */

defined('_JEXEC') or die('Restricted access');

use Joomla\CMS\HTML\HTMLHelper;

HTMLHelper::_('stylesheet', 'mod_locations/media/css/mod_locations.css', ['version' => 'auto', 'relative' => true]);
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