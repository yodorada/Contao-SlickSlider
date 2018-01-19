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
$GLOBALS['TL_LANG']['tl_yodorada_slick_items']['type'] = array('Typ', 'Wählen Sie hier den Typ der Responsiven Konfiguration.');
$GLOBALS['TL_LANG']['tl_yodorada_slick_items']['title'] = array('Titel', 'Wählen Sie hier den Titel der Responsive Konfiguration.');
$GLOBALS['TL_LANG']['tl_yodorada_slick_items']['author'] = array('Autor', 'Wählen Sie hier den Autor der Responsive Konfiguration.');
$GLOBALS['TL_LANG']['tl_yodorada_slick_items']['screensize'] = array('Bildschirmgrösse', 'Wählen Sie hier die Bildschirmgrösse, ab der die Responsive Konfiguration in Kraft tritt.');
$GLOBALS['TL_LANG']['tl_yodorada_slick_items']['screensizeCustom'] = array('Bildschirmgrösse', 'Bestimmen Sie hier die Bildschirmgrösse, ab der die Responsive Konfiguration in Kraft tritt.');

$GLOBALS['TL_LANG']['tl_yodorada_slick_items']['settings'] = array('Slick Responsive Einstellung', 'Die Erklärungen entnehmen Sie bitte der Webseite: <a href="https://github.com/kenwheeler/slick/" target="_blank">https://github.com/kenwheeler/slick/</a>. Boolean Werte bitte mit "1" oder "0" angeben.');
$GLOBALS['TL_LANG']['tl_yodorada_slick_items']['settings_value'] = array('Wert', '');
$GLOBALS['TL_LANG']['tl_yodorada_slick_items']['settings_key'] = array('Einstellung', '');

$GLOBALS['TL_LANG']['tl_yodorada_slick_items']['autoplay'] = array('Automatisches Abspielen', 'Markieren für automatisches Abspielen.');
$GLOBALS['TL_LANG']['tl_yodorada_slick_items']['autoplaySpeed'] = array('Abspiel-Geschwindigkeit', 'Geben Sie hier die Geschwindigkeit in Millisekunden an (Standard 3000).');
$GLOBALS['TL_LANG']['tl_yodorada_slick_items']['slidesToShow'] = array('Anzahl Slides', 'Wählen Sie hier die Anzahl der angezeigten Slides.');
$GLOBALS['TL_LANG']['tl_yodorada_slick_items']['slidesToScroll'] = array('Slides zum Scrollen', 'Wählen Sie hier die Anzahl der gescrollten Slides.');
$GLOBALS['TL_LANG']['tl_yodorada_slick_items']['infinite'] = array('Unendliche Schleife', 'Markieren für das Abspielen im Loop.');
$GLOBALS['TL_LANG']['tl_yodorada_slick_items']['arrows'] = array('Navigations-Pfeile', 'Markieren für die Anzeige von Navigations-Pfeilen.');
$GLOBALS['TL_LANG']['tl_yodorada_slick_items']['dots'] = array('Navigations-Punkte', 'Markieren für die Anzeige von Navigations-Punkten.');

$GLOBALS['TL_LANG']['tl_yodorada_slick_items']['unslick'] = array('Aufheben', 'Markieren, falls Slick bei dieser Bildschirmgrösse aufgehoben werden soll.');

/**
 * Legend
 */
$GLOBALS['TL_LANG']['tl_yodorada_slick_items']['type_legend'] = 'Typ';
$GLOBALS['TL_LANG']['tl_yodorada_slick_items']['title_legend'] = 'Titel';
$GLOBALS['TL_LANG']['tl_yodorada_slick_items']['config_legend'] = 'Slick Standard-Einstellung';
$GLOBALS['TL_LANG']['tl_yodorada_slick_items']['expert_legend'] = 'Slick Experten-Einstellung';
$GLOBALS['TL_LANG']['tl_yodorada_slick_items']['unslick_legend'] = 'Slick aufheben';
$GLOBALS['TL_LANG']['tl_yodorada_slick_items']['screensize_legend'] = 'Breakpoint Einstellung';

/**
 * Reference
 */
$GLOBALS['TL_LANG']['tl_yodorada_slick_items']['type_reference'] = array
    (
    'predefined' => 'Vorgegebene Breakpoint Auswahl',
    'customized' => 'Eigene Breakpoint Angabe',
);
$GLOBALS['TL_LANG']['tl_yodorada_slick_items']['screensizes_reference'] = array
    (
    '320' => 'Smartphones Portrait-Modus (max. 320px Breite)',
    '480' => 'extra kleine Smartphones (max. 480px Breite)',
    '576' => 'kleine Smartphones (max. 576px Breite)',
    '768' => 'Smartphones und Tablets (max. 768px Breite)',
    '992' => 'mittelgrosse Geräte, Desktops (max. 992px Breite)',
    '1200' => 'grosse und Breitbild-Geräte (max. 1200px Breite)',

    '481' => 'Portrait E-Reader, kleine Tablets (max. 481px Breite)',
    '641' => 'Portrait Tablets/iPad, Landscape E-Reader/Phones (max. 641px Breite)',
    '961' => 'Tablet, Landscape iPad, Lo-Res Laptops und Desktops (max. 961px Breite)',
    '1025' => 'Grosse Landscape Tablets, Laptops und Desktops (max. 1025px Breite)',
    '1281' => 'Hi-Res Laptops und Desktops (max. 1281px Breite)',

    'standards' => 'Standard Breakpoints',
    'alternative' => 'Alternative Breakpoints',
);

/**
 * Buttons
 */
$GLOBALS['TL_LANG']['tl_yodorada_slick_items']['show'] = array('Details', 'Details');
$GLOBALS['TL_LANG']['tl_yodorada_slick_items']['new'] = array('Neue Responsive Einstellung', 'Eine neue Responsive Einstellung erstellen');
$GLOBALS['TL_LANG']['tl_yodorada_slick_items']['edit'] = array('Bearbeiten', 'Responsive Einstellung ID %s bearbeiten');
$GLOBALS['TL_LANG']['tl_yodorada_slick_items']['editheader'] = array('Bearbeiten', 'Slick-Konfiguration bearbeiten');
$GLOBALS['TL_LANG']['tl_yodorada_slick_items']['copy'] = array('Kopieren', 'Responsive Einstellung ID %s kopieren');
$GLOBALS['TL_LANG']['tl_yodorada_slick_items']['delete'] = array('Löschen', 'Responsive Einstellung ID %s löschen');
