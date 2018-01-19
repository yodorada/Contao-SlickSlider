<?php

/**
 * Contao Open Source CMS
 *
 * Copyright (c) 2005-2016 Leo Feyer
 *
 * @license LGPL-3.0+
 *
 *
 * @package   yodorada slick
 * @author    Maya K. Herrmann, yodorada.de
 * @license   GNU/LGPL
 * @copyright yodorada, 2017
 */

/**
 * Register the namespaces
 */
ClassLoader::addNamespaces(array
    (
        'Yodorada\Slick',
    ));

/**
 * Register the classes
 */
ClassLoader::addClasses(array
    (
        // Classes
        'Yodorada\Slick\YodoradaSlick' => 'system/modules/yodorada_slick/classes/YodoradaSlick.php',

        // Models
        'Yodorada\Slick\YodoradaSlickModel' => 'system/modules/yodorada_slick/models/YodoradaSlickModel.php',
        'Yodorada\Slick\YodoradaSlickItemsModel' => 'system/modules/yodorada_slick/models/YodoradaSlickItemsModel.php',

        // Contentelements
        'Yodorada\Slick\ContentElementSlick' => 'system/modules/yodorada_slick/elements/ContentElementSlick.php',
        'Yodorada\Slick\ContentElementSlickGallery' => 'system/modules/yodorada_slick/elements/ContentElementSlickGallery.php',
        'Yodorada\Slick\ContentElementSlickStart' => 'system/modules/yodorada_slick/elements/ContentElementSlickStart.php',
        'Yodorada\Slick\ContentElementSlickStop' => 'system/modules/yodorada_slick/elements/ContentElementSlickStop.php',
        'Yodorada\Slick\ContentElementSlickItemStart' => 'system/modules/yodorada_slick/elements/ContentElementSlickItemStart.php',
        'Yodorada\Slick\ContentElementSlickItemStop' => 'system/modules/yodorada_slick/elements/ContentElementSlickItemStop.php',
    ));

/**
 * Register the templates
 */
TemplateLoader::addFiles(array
    (
        // contentelements
        'ce_slick_gallery' => 'system/modules/yodorada_slick/templates/slick',
        'ce_slick_gallery_image' => 'system/modules/yodorada_slick/templates/slick',
        'ce_slick_start' => 'system/modules/yodorada_slick/templates/slick',
        'ce_slick_stop' => 'system/modules/yodorada_slick/templates/slick',
        'ce_slick_item_start' => 'system/modules/yodorada_slick/templates/slick',
        'ce_slick_item_stop' => 'system/modules/yodorada_slick/templates/slick',

        // javascript template for slick settings
        'ce_slick_js' => 'system/modules/yodorada_slick/templates/slick',
        'slick_events_default' => 'system/modules/yodorada_slick/templates/slick',

        // jquery template for inclusion of slick libs (js/css)
        'j_slick' => 'system/modules/yodorada_slick/templates/jquery',
    ));
