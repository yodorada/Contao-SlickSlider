<?php

/**
 * Contao Open Source CMS
 *
 * Copyright (c) 2005-2016 Leo Feyer
 *
 * @license LGPL-3.0+
 *
 *
 * @package   e23 slick
 * @author    Knut Herrmann, EINS[23].TV
 * @license   GNU/LGPL
 * @copyright EINS[23].TV, 2017
 */


/**
 * Register the namespaces
 */
ClassLoader::addNamespaces(array
(
	'eins23\Slick',
));


/**
 * Register the classes
 */
ClassLoader::addClasses(array
(
	// Classes
	'eins23\Slick\E23Slick'											=> 'system/modules/e23_slick/classes/E23Slick.php',

	// Models
	'eins23\Slick\E23SlickModel'								=> 'system/modules/e23_slick/models/E23SlickModel.php',
	'eins23\Slick\E23SlickItemsModel'						=> 'system/modules/e23_slick/models/E23SlickItemsModel.php',

	// Contentelements
	'eins23\Slick\ContentElementSlick'					=> 'system/modules/e23_slick/elements/ContentElementSlick.php',
	'eins23\Slick\ContentElementSlickGallery'		=> 'system/modules/e23_slick/elements/ContentElementSlickGallery.php',
	'eins23\Slick\ContentElementSlickStart'			=> 'system/modules/e23_slick/elements/ContentElementSlickStart.php',
	'eins23\Slick\ContentElementSlickStop'			=> 'system/modules/e23_slick/elements/ContentElementSlickStop.php',
	'eins23\Slick\ContentElementSlickItemStart'	=> 'system/modules/e23_slick/elements/ContentElementSlickItemStart.php',
	'eins23\Slick\ContentElementSlickItemStop'	=> 'system/modules/e23_slick/elements/ContentElementSlickItemStop.php'
));

/**
 * Register the templates
 */
TemplateLoader::addFiles(array
(
	// contentelements
	'ce_slick_gallery'				=> 'system/modules/e23_slick/templates/slick',
	'ce_slick_gallery_image'	=> 'system/modules/e23_slick/templates/slick',
	'ce_slick_start'					=> 'system/modules/e23_slick/templates/slick',
	'ce_slick_stop'						=> 'system/modules/e23_slick/templates/slick',
	'ce_slick_item_start'			=> 'system/modules/e23_slick/templates/slick',
	'ce_slick_item_stop'			=> 'system/modules/e23_slick/templates/slick',

	// javascript template for slick settings
	'ce_slick_js'							=> 'system/modules/e23_slick/templates/slick',
	'slick_events_default'		=> 'system/modules/e23_slick/templates/slick',

	// jquery template for inclusion of slick libs (js/css)
	'j_slick'									=> 'system/modules/e23_slick/templates/jquery'
));