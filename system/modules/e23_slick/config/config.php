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

// Add custom CSS for slick settings backend view
if (TL_MODE == 'BE')
{
  $GLOBALS['TL_CSS'][] = 'system/modules/e23_slick/assets/css/backend.css|screen';
}

// Define global object for default screensizes and slick settings
// taken from https://github.com/kenwheeler/slick/ (where type boolean/string/int/number)
// 
// overwrite in your system/config/initconfig.php
// 
$GLOBALS['E23_SLICK'] = array
(
  'screensizes' => array
  (
    'standards' => array
    (
      320,
      480,
      576,
      768,
      992,
      1200
    ),
    'alternative' => array
    (
      481,
      641,
      961,
      1025,
      1281
    )
  ),
  'settings' => array
  (
    'accessibility' => 'boolean','adaptiveHeight' => 'boolean','autoplay' => 'boolean','autoplaySpeed' => 'int','arrows' => 'boolean','asNavFor' => 'string','appendArrows' => 'string','appendDots' => 'string','prevArrow' => 'string','nextArrow' => 'string','centerMode' => 'boolean','centerPadding' => 'string','cssEase' => 'string','dots' => 'boolean','dotsClass' => 'string','draggable' => 'boolean','fade' => 'boolean','focusOnSelect' => 'boolean','easing' => 'string','edgeFriction' => 'int','infinite' => 'boolean','initialSlide' => 'int','lazyLoad' => 'string','mobileFirst' => 'boolean','pauseOnFocus' => 'boolean','pauseOnHover' => 'boolean','pauseOnDotsHover' => 'boolean','respondTo' => 'string','rows' => 'int','slide' => 'string','slidesPerRow' => 'int','slidesToShow' => 'int','slidesToScroll' => 'int','speed' => 'int','swipe' => 'boolean','swipeToSlide' => 'boolean','touchMove' => 'boolean','touchThreshold' => 'int','useCSS' => 'boolean','useTransform' => 'boolean','variableWidth' => 'boolean','vertical' => 'boolean','verticalSwiping' => 'boolean','rtl' => 'boolean','waitForAnimate' => 'boolean','zIndex' => 'number'
  ),
  'events' => array
  (
    'afterChange', 'beforeChange', 'breakpoint', 'destroy', 'edge', 'init', 'reInit', 'setPosition', 'swipe', 'lazyLoaded', 'lazyLoadError'
  )
);
$GLOBALS['E23_SLICK']['expert'] = array_values
(
  array_diff
  (
    array_keys($GLOBALS['E23_SLICK']['settings']),
    array('autoplay','slidesToShow','slidesToScroll','infinite','arrows','dots','lazyLoad')
  )
);
$GLOBALS['E23_SLICK']['responsive'] = array_values
(
  array_diff
  (
  $GLOBALS['E23_SLICK']['expert'],
  array('mobileFirst')
  )
);

/**
 * BACK END MODULES
 *
 */
array_insert($GLOBALS['BE_MOD']['content'], count($GLOBALS['BE_MOD']['content']), array
(
'e23_slick' => array
	(
		'tables'      => array('tl_e23_slick', 'tl_e23_slick_items'),
		'icon'        => 'system/modules/e23_slick/assets/images/slick.png'
	)

)
);


/**
 * CONTENT ELEMENTS
 *
 */
array_insert($GLOBALS['TL_CTE'], count($GLOBALS['TL_CTE']), array
(
  'e23_slick' => array(
    'e23_slick_gallery'       => 'ContentElementSlickGallery',
    'e23_slick_start'         => 'ContentElementSlickStart',
  	'e23_slick_stop'          => 'ContentElementSlickStop',
    'e23_slick_item_start'    => 'ContentElementSlickItemStart',
    'e23_slick_item_stop'     => 'ContentElementSlickItemStop'
  )
));


/**
 * WRAPPER ELEMENTS
 *
 */
$GLOBALS['TL_WRAPPERS']['start'][] = 'e23_slick_start';
$GLOBALS['TL_WRAPPERS']['stop'][] = 'e23_slick_stop';
$GLOBALS['TL_WRAPPERS']['start'][] = 'e23_slick_item_start';
$GLOBALS['TL_WRAPPERS']['stop'][] = 'e23_slick_item_stop';



$GLOBALS['TL_ASSETS']['SLICK'] = '1.6.0';

/*
* for backwards php < 5.5.0 compatibility
 */
if(!function_exists('boolval'))
{
    /**
     * Get the boolean value of a variable
     *
     * @param mixed The scalar value being converted to a boolean.
     * @return boolean The boolean value of var.
     */
    function boolval($var)
    {
        return !! $var;
    }
}

