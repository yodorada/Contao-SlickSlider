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
 * Fields
 */
$GLOBALS['TL_LANG']['tl_yodorada_slick']['title'] = array('Title', 'Select the title of your slick configuration.');
$GLOBALS['TL_LANG']['tl_yodorada_slick']['author'] = array('Author', 'Select the author of your slick configuration.');

$GLOBALS['TL_LANG']['tl_yodorada_slick']['settings'] = array('Slick configuration', 'For explanations, please refer to the website: <a href="http://kenwheeler.github.io/slick/" target="_blank">http://kenwheeler.github.io/slick/</a>. Please specify boolean values with "1" (true) or "0" (false).');
$GLOBALS['TL_LANG']['tl_yodorada_slick']['settings_value'] = array('Value', '');
$GLOBALS['TL_LANG']['tl_yodorada_slick']['settings_key'] = array('Slick setting', '');

$GLOBALS['TL_LANG']['tl_yodorada_slick']['autoplay'] = array('Autoplay', 'Enables auto play of slides.');
$GLOBALS['TL_LANG']['tl_yodorada_slick']['autoplaySpeed'] = array('Autoplay speed', 'Auto play change interval in milliseconds (default 3000).');
$GLOBALS['TL_LANG']['tl_yodorada_slick']['slidesToShow'] = array('Slides to show', 'Number of slides to show at a time.');
$GLOBALS['TL_LANG']['tl_yodorada_slick']['slidesToScroll'] = array('Slides to scroll', 'Number of slides to scroll at a time.');
$GLOBALS['TL_LANG']['tl_yodorada_slick']['infinite'] = array('Infinite', 'Enables infinite looping.');
$GLOBALS['TL_LANG']['tl_yodorada_slick']['arrows'] = array('Arrows', 'Enables navigation arrows.');
$GLOBALS['TL_LANG']['tl_yodorada_slick']['dots'] = array('Dots', 'Enables navigations dots.');

$GLOBALS['TL_LANG']['tl_yodorada_slick']['useLazyLoad'] = array('LazyLoad active', 'Activate lazyLoad. Only effective when using content element "Slick Image Gallery".');
$GLOBALS['TL_LANG']['tl_yodorada_slick']['lazyLoad'] = array('LazyLoad type', '"ondemand" will load the image as soon as you slide to it, "progressive" loads one image after the other when the page loads.');

$GLOBALS['TL_LANG']['tl_yodorada_slick']['useSlickEvents'] = array('Slick Events', 'Activate Slick event handling.');
$GLOBALS['TL_LANG']['tl_yodorada_slick']['slickEventsTpl'] = array('Slick Event Template', 'Choose your custom built JavaScript event template.');
/**
 * Info Message
 */
$GLOBALS['TL_LANG']['tl_yodorada_slick']['includeSlickEventTpl'] = 'Please make a copy of the default template \'<em>%s</em>\' under a different name (eg. <em>%s</em>), edit it\'s JavaScript functions and select it under "' . $GLOBALS['TL_LANG']['tl_yodorada_slick']['slickEventsTpl'][0] . '".';

/**
 * Legend
 */
$GLOBALS['TL_LANG']['tl_yodorada_slick']['title_legend'] = 'Title';
$GLOBALS['TL_LANG']['tl_yodorada_slick']['config_legend'] = 'Slick default settings';
$GLOBALS['TL_LANG']['tl_yodorada_slick']['expert_legend'] = 'Slick expert settings';
$GLOBALS['TL_LANG']['tl_yodorada_slick']['events_legend'] = 'Slick events settings';

/**
 * Buttons
 */
$GLOBALS['TL_LANG']['tl_yodorada_slick']['show'] = array('Details', 'Details');
$GLOBALS['TL_LANG']['tl_yodorada_slick']['new'] = array('New Slick configuration', 'Create a new Slick configuration');
$GLOBALS['TL_LANG']['tl_yodorada_slick']['edit'] = array('Edit', 'Edit responsive settings of Slick configuration ID %s.');
$GLOBALS['TL_LANG']['tl_yodorada_slick']['editheader'] = array('Edit', 'Edit Slick configuration ID %s.');
$GLOBALS['TL_LANG']['tl_yodorada_slick']['copy'] = array('Copy', 'Copy Slick configuration ID %s.');
$GLOBALS['TL_LANG']['tl_yodorada_slick']['delete'] = array('Löschen', 'Delete Slick configuration ID %s.');
