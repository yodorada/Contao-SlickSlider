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
 * Table tl_yodorada_slick
 */
$GLOBALS['TL_DCA']['tl_yodorada_slick'] = array
    (

    // Config
    'config' => array
    (
        'dataContainer' => 'Table',
        'enableVersioning' => true,
        'switchToEdit' => true,
        'ctable' => array('tl_yodorada_slick_items'),
        'sql' => array
        (
            'keys' => array
            (
                'id' => 'primary',
            ),
        ),
        'oncut_callback' => array
        (
            array('tl_yodorada_slick', 'logModification'),
        ),
        'ondelete_callback' => array
        (
            array('tl_yodorada_slick', 'logModification'),
        ),
        'onsubmit_callback' => array
        (
            array('tl_yodorada_slick', 'logModification'),
        ),
        'onload_callback' => array
        (
            array('tl_yodorada_slick', 'showJsSlickEventHint'),
        ),
    ),

    // List
    'list' => array
    (
        'sorting' => array
        (
            'mode' => 2,
            'fields' => array('title'),
            'flag' => 1,
            'headerFields' => array('title'),
            'panelLayout' => 'sort,filter;search,limit',
        ),
        'label' => array
        (
            'fields' => array('title'),
            'showColumns' => false,
            'format' => '%s',
        ),
        'global_operations' => array
        (

            'all' => array
            (
                'label' => &$GLOBALS['TL_LANG']['MSC']['all'],
                'href' => 'act=select',
                'class' => 'header_edit_all',
                'attributes' => 'onclick="Backend.getScrollOffset();" accesskey="e"',
            ),
        ),
        'operations' => array
        (
            'edit' => array
            (
                'label' => &$GLOBALS['TL_LANG']['tl_yodorada_slick']['edit_items'],
                'href' => 'table=tl_yodorada_slick_items',
                'icon' => 'system/modules/yodorada_slick/assets/images/responsive.png',
            ),
            'editheader' => array
            (
                'label' => &$GLOBALS['TL_LANG']['tl_yodorada_slick']['editheader'],
                'href' => 'act=edit',
                'icon' => 'header.gif',
            ),
            'copy' => array
            (
                'label' => &$GLOBALS['TL_LANG']['tl_yodorada_slick']['copy'],
                'href' => 'act=copy',
                'icon' => 'copy.gif',
            ),
            'delete' => array
            (
                'label' => &$GLOBALS['TL_LANG']['tl_yodorada_slick']['delete'],
                'href' => 'act=delete',
                'icon' => 'delete.gif',
                'attributes' => 'onclick="if(!confirm(\'' . $GLOBALS['TL_LANG']['MSC']['deleteConfirm'] . '\'))return false;Backend.getScrollOffset()"',
            ),
            'show' => array
            (
                'label' => &$GLOBALS['TL_LANG']['tl_yodorada_slick']['show'],
                'href' => 'act=show',
                'icon' => 'show.gif',
            ),
        ),
    ),

    // Edit
    'edit' => array
    (
        'buttons_callback' => array(),
    ),

    // Palettes
    'palettes' => array
    (
        '__selector__' => array('autoplay', 'useSlickEvents', 'useLazyLoad'),
        'default' => '{title_legend},title,author;{config_legend},autoplay,slidesToShow,slidesToScroll,arrows,dots,infinite,useLazyLoad;{expert_legend},settings;{events_legend},useSlickEvents',
    ),

    // Subpalettes
    'subpalettes' => array
    (
        'autoplay' => 'autoplaySpeed',
        'useSlickEvents' => 'slickEventsTpl',
        'useLazyLoad' => 'lazyLoad',
    ),

    // Fields
    'fields' => array
    (
        'id' => array
        (
            'sql' => "int(10) unsigned NOT NULL auto_increment",
        ),
        'tstamp' => array
        (
            'sql' => "int(10) unsigned NOT NULL default '0'",
        ),
        'sorting' => array
        (
            'sql' => "int(10) unsigned NOT NULL default '0'",
        ),
        'title' => array
        (
            'label' => &$GLOBALS['TL_LANG']['tl_yodorada_slick']['title'],
            'sorting' => true,
            'inputType' => 'text',
            'search' => true,
            'eval' => array('mandatory' => true, 'decodeEntities' => true, 'maxlength' => 255),
            'sql' => "varchar(255) NOT NULL default ''",
        ),

        'author' => array
        (
            'label' => &$GLOBALS['TL_LANG']['tl_yodorada_slick']['author'],
            'default' => BackendUser::getInstance()->id,
            'search' => true,
            'inputType' => 'select',
            'foreignKey' => 'tl_user.name',
            'eval' => array('doNotCopy' => true, 'mandatory' => true, 'chosen' => true, 'includeBlankOption' => true, 'tl_class' => 'w50'),
            'sql' => "int(10) unsigned NOT NULL default '0'",
            'relation' => array('type' => 'hasOne', 'load' => 'eager'),
        ),

        'autoplay' => array
        (
            'label' => &$GLOBALS['TL_LANG']['tl_yodorada_slick']['autoplay'],
            'inputType' => 'checkbox',
            'eval' => array('submitOnChange' => true, 'doNotCopy' => true),
            'sql' => "char(1) NOT NULL default ''",
        ),
        'autoplaySpeed' => array
        (
            'label' => &$GLOBALS['TL_LANG']['tl_yodorada_slick']['autoplaySpeed'],
            'inputType' => 'text',
            'default' => '3000',
            'eval' => array('mandatory' => true, 'rgxp' => 'natural', 'maxlength' => 255),
            'sql' => "varchar(255) NOT NULL default ''",
        ),
        'slidesToShow' => array
        (
            'label' => &$GLOBALS['TL_LANG']['tl_yodorada_slick']['slidesToShow'],
            'default' => 1,
            'inputType' => 'select',
            'options' => range(1, 20),
            'eval' => array('mandatory' => true, 'chosen' => true, 'tl_class' => 'clr w50'),
            'sql' => "int(10) unsigned NOT NULL default '0'",
        ),
        'slidesToScroll' => array
        (
            'label' => &$GLOBALS['TL_LANG']['tl_yodorada_slick']['slidesToScroll'],
            'default' => 1,
            'inputType' => 'select',
            'options' => range(1, 20),
            'eval' => array('mandatory' => true, 'chosen' => true, 'tl_class' => 'w50'),
            'sql' => "int(10) unsigned NOT NULL default '0'",
        ),
        'infinite' => array
        (
            'label' => &$GLOBALS['TL_LANG']['tl_yodorada_slick']['infinite'],
            'inputType' => 'checkbox',
            'eval' => array('tl_class' => 'clr m12'),
            'sql' => "char(1) NOT NULL default ''",
        ),
        'arrows' => array
        (
            'label' => &$GLOBALS['TL_LANG']['tl_yodorada_slick']['arrows'],
            'inputType' => 'checkbox',
            'default' => 1,
            'eval' => array('tl_class' => 'm12 w50'),
            'sql' => "char(1) NOT NULL default ''",
        ),
        'dots' => array
        (
            'label' => &$GLOBALS['TL_LANG']['tl_yodorada_slick']['dots'],
            'inputType' => 'checkbox',
            'eval' => array('tl_class' => 'm12 w50'),
            'sql' => "char(1) NOT NULL default ''",
        ),
        'useLazyLoad' => array
        (
            'label' => &$GLOBALS['TL_LANG']['tl_yodorada_slick']['useLazyLoad'],
            'inputType' => 'checkbox',
            'eval' => array('submitOnChange' => true, 'tl_class' => 'clr m12'),
            'sql' => "char(1) NOT NULL default ''",
        ),
        'lazyLoad' => array
        (
            'label' => &$GLOBALS['TL_LANG']['tl_yodorada_slick']['lazyLoad'],
            'default' => 'ondemand',
            'inputType' => 'select',
            'options' => array('ondemand', 'progressive'),
            'reference' => $GLOBALS['TL_LANG']['tl_yodorada_slick']['lazyLoad_reference'],
            'eval' => array('mandatory' => true, 'chosen' => true, 'tl_class' => 'w50'),
            'sql' => "varchar(20) NOT NULL default ''",
        ),

        'settings' => array
        (
            'label' => &$GLOBALS['TL_LANG']['tl_yodorada_slick']['settings'],
            'inputType' => 'multiColumnWizard',
            'save_callback' => array(array('YodoradaSlick', 'slickSettingsSaveCallback')),
            'eval' => array(

                'columnFields' => array
                (
                    'settings_key' => array
                    (
                        'label' => &$GLOBALS['TL_LANG']['tl_yodorada_slick']['settings_key'],
                        'inputType' => 'select',
                        'options' => $GLOBALS['YODORADA_SLICK']['expert'],
                        'eval' => array('style' => 'width:250px', 'includeBlankOption' => true, 'chosen' => true),
                    ),
                    'settings_value' => array
                    (
                        'label' => &$GLOBALS['TL_LANG']['tl_yodorada_slick']['settings_value'],
                        'inputType' => 'text',
                        'eval' => array('style' => 'width:300px'),
                    ),
                ),
            ),
            'sql' => "blob NULL",
        ),
        'useSlickEvents' => array
        (
            'label' => &$GLOBALS['TL_LANG']['tl_yodorada_slick']['useSlickEvents'],
            'inputType' => 'checkbox',
            'eval' => array('submitOnChange' => true, 'tl_class' => 'clr m12'),
            'sql' => "char(1) NOT NULL default ''",
        ),
        'slickEventsTpl' => array
        (
            'label' => &$GLOBALS['TL_LANG']['tl_yodorada_slick']['slickEventsTpl'],
            'default' => 'slick_events_default',
            'exclude' => true,
            'inputType' => 'select',
            'options_callback' => array('tl_yodorada_slick', 'getSlickEventTemplates'),
            'eval' => array('tl_class' => 'w50'),
            'sql' => "varchar(32) NOT NULL default ''",
        ),

    ),
);

class tl_yodorada_slick extends Backend
{

    /**
     *  callback for logging
     *
     * This method is triggered when a single item or multiple
     * items are modified (edit/editAll), moved (cut/cutAll), copied or deleted
     * (delete/deleteAll).
     *
     * @param DataContainer $dc
     */
    public function logModification(DataContainer $dc)
    {
        // Return if there is no ID
        if (!$dc->activeRecord) {
            return;
        }

        $action = \Input::get('act');
        $this->log($GLOBALS['TL_LANG']['MOD']['yodorada_slick'][0] . ': Action > ' . strtoupper($action) . ' / Slick > ' . $dc->activeRecord->title, __METHOD__, TL_GENERAL);
    }

    /**
     * Show a hint if user should create a slick event template
     *
     * @param object
     */
    public function showJsSlickEventHint($dc)
    {
        $objCte = YodoradaSlickModel::findByPk($dc->id);

        if ($objCte === null) {
            return;
        }

        if ($objCte->useSlickEvents) {
            Message::addInfo(sprintf($GLOBALS['TL_LANG']['tl_yodorada_slick']['includeSlickEventTpl'], 'slick_events_default', 'slick_events_custom'));
        }
    }

    /**
     * Return all slick event templates as array
     *
     * @return array
     */
    public function getSlickEventTemplates()
    {
        return $this->getTemplateGroup('slick_events_');
    }

}
