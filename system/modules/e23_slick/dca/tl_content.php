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

$GLOBALS['TL_DCA']['tl_content']['config']['onload_callback'][] = array('tl_content_e23_slick', 'showJsLibraryHint');

$GLOBALS['TL_DCA']['tl_content']['palettes']['e23_slick_start'] = '{type_legend},type,headline;{slickconfig_legend},e23_slick_use_config;{expert_legend:hide},guests,cssID,space';
$GLOBALS['TL_DCA']['tl_content']['palettes']['e23_slick_stop'] = '{type_legend},type';
$GLOBALS['TL_DCA']['tl_content']['palettes']['e23_slick_item_start'] = '{type_legend},type,headline;{expert_legend:hide},guests,cssID,space';
$GLOBALS['TL_DCA']['tl_content']['palettes']['e23_slick_item_stop'] = '{type_legend},type';

$GLOBALS['TL_DCA']['tl_content']['palettes']['__selector__'][] = 'e23_slick_use_config';
$GLOBALS['TL_DCA']['tl_content']['subpalettes']['e23_slick_use_config'] = 'e23_slick_config';

$GLOBALS['TL_DCA']['tl_content']['palettes']['e23_slick_gallery'] = '{type_legend},type,headline;{source_legend},multiSRC;{slickconfig_legend},e23_slick_use_config;{protected_legend:hide},protected;{expert_legend:hide},guests,cssID,space;{invisible_legend:hide},invisible,start,stop';

/**
 * Add fields to tl_content
 */
$GLOBALS['TL_DCA']['tl_content']['fields']['multiSRC']['load_callback'][] = array('tl_content_e23_slick', 'setMultiSrcFlags');
            
$GLOBALS['TL_DCA']['tl_content']['fields']['e23_slick_config'] = array
(
    'label' => &$GLOBALS['TL_LANG']['tl_content']['e23_slick_config'],
    'exclude' => true,
    'inputType' => 'select',
    'foreignKey' => 'tl_e23_slick.title',
    'eval' => array('mandatory' => true, 'chosen' => true, 'includeBlankOption' => true, 'tl_class' => 'clr m12'),
    'sql' => "smallint(5) NOT NULL",
);

$GLOBALS['TL_DCA']['tl_content']['fields']['e23_slick_use_config'] = array
(
    'label' => &$GLOBALS['TL_LANG']['tl_content']['e23_slick_use_config'],
    'inputType' => 'checkbox',
    'eval' => array('submitOnChange' => true),
    'sql' => "char(1) NOT NULL default ''",
);

/**
 * Provide miscellaneous methods that are used by the data configuration array.
 *
 * @author EINS[23].TV, 2017
 */
class tl_content_e23_slick extends Backend
{

    /**
     * Import the back end user object
     */
    public function __construct()
    {
        parent::__construct();
        $this->import('BackendUser', 'User');
    }

    /**
     * Show a hint if a JavaScript library needs to be included in the page layout
     *
     * @param object
     */
    public function showJsLibraryHint($dc)
    {
        if ($_POST || Input::get('act') != 'edit') {
            return;
        }

        // Return if the user cannot access the layout module (see #6190)
        if (!$this->User->hasAccess('themes', 'modules') || !$this->User->hasAccess('layout', 'themes')) {
            return;
        }

        $objCte = ContentModel::findByPk($dc->id);

        if ($objCte === null) {
            return;
        }

        switch ($objCte->type) {
            case 'e23_slick_start':
            case 'e23_slick_gallery':
                Message::addInfo(sprintf($GLOBALS['TL_LANG']['tl_content']['includeSlickLibs'], 'j_slick'));
                break;

        }
    }



    /**
     * Dynamically add flags to the "multiSRC" field
     *
     * @param mixed         $varValue
     * @param DataContainer $dc
     *
     * @return mixed
     */
    public function setMultiSrcFlags($varValue, DataContainer $dc)
    {
        if ($dc->activeRecord)
        {
            switch ($dc->activeRecord->type)
            {
                case 'e23_slick_gallery':
                    $GLOBALS['TL_DCA'][$dc->table]['fields'][$dc->field]['eval']['isGallery'] = true;
                    $GLOBALS['TL_DCA'][$dc->table]['fields'][$dc->field]['eval']['extensions'] = Config::get('validImageTypes');
                    break;

            }
        }

        return $varValue;
    }
}
