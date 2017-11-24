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
 * Fields
 */
$GLOBALS['TL_LANG']['tl_e23_slick_items']['type']    = array('Type', 'Set the type of your responsive slick configuration.');
$GLOBALS['TL_LANG']['tl_e23_slick_items']['title']    = array('Title', 'Set the title of your responsive slick configuration.');
$GLOBALS['TL_LANG']['tl_e23_slick_items']['author']    = array('Author', 'Set the author of your responsive slick configuration.');
$GLOBALS['TL_LANG']['tl_e23_slick_items']['screensize']    = array('Screen size', 'Select the screen size from which the responsive configuration comes into effect.');
$GLOBALS['TL_LANG']['tl_e23_slick_items']['screensizeCustom']    = array('Screen size', 'Define the screen size from which the responsive configuration comes into effect.');

$GLOBALS['TL_LANG']['tl_e23_slick_items']['settings'] = array('Slick responsive configuration', 'For explanations, please refer to the website: <a href="http://kenwheeler.github.io/slick/" target="_blank">http://kenwheeler.github.io/slick/</a>. Please specify boolean values with "1" (true) or "0" (false).');
$GLOBALS['TL_LANG']['tl_e23_slick_items']['settings_value'] = array('Value','');
$GLOBALS['TL_LANG']['tl_e23_slick_items']['settings_key'] = array('Setting','');

$GLOBALS['TL_LANG']['tl_e23_slick_items']['autoplay'] = array('Autoplay','Enables auto play of slides.');
$GLOBALS['TL_LANG']['tl_e23_slick_items']['autoplaySpeed'] = array('Autoplay speed','Auto play change interval in milliseconds (default 3000).');
$GLOBALS['TL_LANG']['tl_e23_slick_items']['slidesToShow'] = array('Slides to show','Number of slides to show at a time.');
$GLOBALS['TL_LANG']['tl_e23_slick_items']['slidesToScroll'] = array('Slides to scroll','Number of slides to scroll at a time.');
$GLOBALS['TL_LANG']['tl_e23_slick_items']['infinite'] = array('Infinite','Enables infinite looping.');
$GLOBALS['TL_LANG']['tl_e23_slick_items']['arrows'] = array('Arrows','Enables navigation arrows.');
$GLOBALS['TL_LANG']['tl_e23_slick_items']['dots'] = array('Dots','Enables navigations dots.');

$GLOBALS['TL_LANG']['tl_e23_slick_items']['unslick']		= array('Destroy','When marked, Slick will be destroyed at this screensize.');

/**
 * Legend
 */
$GLOBALS['TL_LANG']['tl_e23_slick_items']['type_legend']	= 'Type';
$GLOBALS['TL_LANG']['tl_e23_slick_items']['title_legend'] = 'Title';
$GLOBALS['TL_LANG']['tl_e23_slick_items']['config_legend'] = 'Slick default settings';
$GLOBALS['TL_LANG']['tl_e23_slick_items']['expert_legend'] = 'Slick expert settings';
$GLOBALS['TL_LANG']['tl_e23_slick_items']['unslick_legend'] = 'Destroying Slick';

/**
 * Reference
 */
$GLOBALS['TL_LANG']['tl_e23_slick_items']['type_reference'] = array
(
	'predefined' => 'Predefined breakpoint selection',
	'customized' => 'Self defined breakpoint value'
);
$GLOBALS['TL_LANG']['tl_e23_slick_items']['screensizes_reference'] = array
(
	'320' => 'Custom, iPhone Retina (max. 320px width)',
	'480' => 'Extra Small Devices, Phones (max. 480px width)',
	'576' => 'Small Devices, Phones (max. 576px width)',
	'768' => 'Phones, Tablets (max. 768px width)',
	'992' => 'Medium Devices, Desktops (max. 992px width)',
	'1200' => 'Large Devices, Wide Screens (max. 1200px width)',

	'481' => 'Portrait e-readers (Nook/Kindle), smaller tablets  (max. 481px width)',
	'641' => 'Portrait tablets, Portrait iPad, landscape e-readers, landscape phones  (max. 641px width)',
	'961' => 'Tablet, landscape iPad, lo-res laptops and desktops  (max. 961px width)',
	'1025' => 'Big landscape tablets, laptops, and desktops  (max. 1025px width)',
	'1281' => 'Hi-res laptops and desktops  (max. 1281px width)',


	'standrad' => 'Standard Breakpoints',
	'alternative' => 'Alternative Breakpoints'
);

/**
 * Buttons
 */
$GLOBALS['TL_LANG']['tl_e23_slick_items']['show']   = array('Details', 'Details');
$GLOBALS['TL_LANG']['tl_e23_slick_items']['new']    = array('New responsive configuration', 'Create a new responsive Slick configuration');
$GLOBALS['TL_LANG']['tl_e23_slick_items']['edit']   = array('Edit', 'Edit responsive Slick configuration ID %s.');
$GLOBALS['TL_LANG']['tl_e23_slick_items']['editheader']   = array('Edit', 'Edit Slick configuration.');
$GLOBALS['TL_LANG']['tl_e23_slick_items']['copy']   = array('Copy', 'Copy responsive Slick configuration ID %s.');
$GLOBALS['TL_LANG']['tl_e23_slick_items']['delete'] = array('Löschen', 'Delete responsive Slick configuration ID %s.');
