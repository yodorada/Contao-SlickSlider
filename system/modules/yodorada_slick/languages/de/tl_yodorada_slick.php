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
$GLOBALS['TL_LANG']['tl_yodorada_slick']['title'] = array('Titel', 'Wählen Sie hier den Titel der Slick Konfiguration.');
$GLOBALS['TL_LANG']['tl_yodorada_slick']['author'] = array('Autor', 'Wählen Sie hier den Autor der Slick Konfiguration.');

$GLOBALS['TL_LANG']['tl_yodorada_slick']['settings'] = array('Slick Konfiguration', 'Die Erklärungen entnehmen Sie bitte der Webseite: <a href="http://kenwheeler.github.io/slick/" target="_blank">http://kenwheeler.github.io/slick/</a>. Boolean Werte bitte mit "1" (true) oder "0" (false) angeben.');
$GLOBALS['TL_LANG']['tl_yodorada_slick']['settings_value'] = array('Wert', '');
$GLOBALS['TL_LANG']['tl_yodorada_slick']['settings_key'] = array('Slick Einstellung', '');

$GLOBALS['TL_LANG']['tl_yodorada_slick']['autoplay'] = array('Automatisches Abspielen', 'Markieren für automatisches Abspielen.');
$GLOBALS['TL_LANG']['tl_yodorada_slick']['autoplaySpeed'] = array('Abspiel-Geschwindigkeit', 'Geben Sie hier die Geschwindigkeit in Millisekunden an (Standard 3000).');
$GLOBALS['TL_LANG']['tl_yodorada_slick']['slidesToShow'] = array('Anzahl Slides', 'Wählen Sie hier die Anzahl der angezeigten Slides.');
$GLOBALS['TL_LANG']['tl_yodorada_slick']['slidesToScroll'] = array('Slides zum Scrollen', 'Wählen Sie hier die Anzahl der gescrollten Slides.');
$GLOBALS['TL_LANG']['tl_yodorada_slick']['infinite'] = array('Unendliche Schleife', 'Markieren für das Abspielen im Loop.');
$GLOBALS['TL_LANG']['tl_yodorada_slick']['arrows'] = array('Navigations-Pfeile', 'Markieren für die Anzeige von Navigations-Pfeilen.');
$GLOBALS['TL_LANG']['tl_yodorada_slick']['dots'] = array('Navigations-Punkte', 'Markieren für die Anzeige von Navigations-Punkten.');

$GLOBALS['TL_LANG']['tl_yodorada_slick']['useLazyLoad'] = array('LazyLoad aktivieren', 'Markieren um LazyLoad zu aktivieren. Nur möglich bei der Verwendung von "Slick Bildergalerie".');
$GLOBALS['TL_LANG']['tl_yodorada_slick']['lazyLoad'] = array('LazyLoad', '"ondemand" lädt ein Slider-Bild, sobald es in den sichtbaren Bereich geschoben wird, "progressive" lädt ein Bild nach dem anderen, wenn die Seite geladen wird.');

$GLOBALS['TL_LANG']['tl_yodorada_slick']['useSlickEvents'] = array('Slick Events', 'Markieren um auf Slick Events zu reagieren.');
$GLOBALS['TL_LANG']['tl_yodorada_slick']['slickEventsTpl'] = array('Slick Event Template', 'Wählen Sie hier das entsprechende JavaScript Event Template aus.');

/**
 * Info Message
 */
$GLOBALS['TL_LANG']['tl_yodorada_slick']['includeSlickEventTpl'] = 'Bitte erstellen Sie eine Kopie des Templates \'<em>%s</em>\' unter einem anderen Namen (z.B. <em>%s</em>), bearbeiten darin die JavaScript-Funktionen und wählen dieses dann unter "' . $GLOBALS['TL_LANG']['tl_yodorada_slick']['slickEventsTpl'][0] . '" aus.';

/**
 * Legend
 */
$GLOBALS['TL_LANG']['tl_yodorada_slick']['title_legend'] = 'Titel';
$GLOBALS['TL_LANG']['tl_yodorada_slick']['config_legend'] = 'Slick Standard-Einstellung';
$GLOBALS['TL_LANG']['tl_yodorada_slick']['expert_legend'] = 'Slick Experten-Einstellung';
$GLOBALS['TL_LANG']['tl_yodorada_slick']['events_legend'] = 'Slick Events-Einstellung';

/**
 * Buttons
 */
$GLOBALS['TL_LANG']['tl_yodorada_slick']['show'] = array('Details', 'Details');
$GLOBALS['TL_LANG']['tl_yodorada_slick']['new'] = array('Neue Slick-Konfiguration', 'Eine neue Slick-Konfiguration erstellen');
$GLOBALS['TL_LANG']['tl_yodorada_slick']['edit_items'] = array('Bearbeiten', 'Responsive Einstellungen dieser Slick-Konfiguration ID %s bearbeiten');
$GLOBALS['TL_LANG']['tl_yodorada_slick']['edit'] = array('Bearbeiten', 'Slick-Konfiguration ID %s bearbeiten');
$GLOBALS['TL_LANG']['tl_yodorada_slick']['editheader'] = array('Bearbeiten', 'Slick-Konfiguration ID %s bearbeiten');
$GLOBALS['TL_LANG']['tl_yodorada_slick']['copy'] = array('Kopieren', 'Slick-Konfiguration ID %s kopieren');
$GLOBALS['TL_LANG']['tl_yodorada_slick']['delete'] = array('Löschen', 'Slick-Konfiguration ID %s löschen');
