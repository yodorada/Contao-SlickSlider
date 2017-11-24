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
 * Table tl_e23_slick_items
 */

$GLOBALS['TL_DCA']['tl_e23_slick_items'] = array
(

	// Config
	'config' => array
	(
		'dataContainer'               => 'Table',
		'enableVersioning'            => true,
		'switchToEdit'                => true,
		'ptable'											=> 'tl_e23_slick',
		'sql' => array
		(
			'keys' => array
			(
				'id' => 'primary',
				'pid' => 'index'
			)
		),
		'oncut_callback' => array
		(
			array('tl_e23_slick_items', 'logModification')
		),
		'ondelete_callback' => array
		(
			array('tl_e23_slick_items', 'logModification')
		),
		'onsubmit_callback' => array
		(
			array('tl_e23_slick_items', 'logModification')
		)
	),

	// List
	'list' => array
	(
		'sorting' => array
		(
			'mode'                    => 4,
			'fields'                  => array('title'),
			'headerFields'            => array('title', 'author'),
			'child_record_callback'   => array('tl_e23_slick_items', 'listItemData'),
      		'panelLayout'             => 'sort,filter;search,limit'
		),
		'label' => array
		(
			'fields'                  => array('title'),
			'showColumns'=>false,
			'format'                  => '%s'
		),
		'global_operations' => array
		(
			
			
			'all' => array
			(
				'label'               => &$GLOBALS['TL_LANG']['MSC']['all'],
				'href'                => 'act=select',
				'class'               => 'header_edit_all',
				'attributes'          => 'onclick="Backend.getScrollOffset();" accesskey="e"'
			)
		),
		'operations' => array
		(
			'edit' => array
			(
				'label'               => &$GLOBALS['TL_LANG']['tl_e23_slick_items']['edit'],
				'href'                => 'act=edit',
				'icon'                => 'edit.gif'
			),
			'copy' => array
			(
				'label'               => &$GLOBALS['TL_LANG']['tl_e23_slick_items']['copy'],
				'href'                => 'act=copy',
				'icon'                => 'copy.gif'
			),
			'delete' => array
			(
				'label'               => &$GLOBALS['TL_LANG']['tl_e23_slick_items']['delete'],
				'href'                => 'act=delete',
				'icon'                => 'delete.gif',
				'attributes'          => 'onclick="if(!confirm(\'' . $GLOBALS['TL_LANG']['MSC']['deleteConfirm'] . '\'))return false;Backend.getScrollOffset()"'
			),
			'show' => array
			(
				'label'               => &$GLOBALS['TL_LANG']['tl_e23_slick_items']['show'],
				'href'                => 'act=show',
				'icon'                => 'show.gif'
			)
		)
	),

	// Edit
	'edit' => array
	(
		'buttons_callback' => array()
	),

	// Palettes
	'palettes' => array
	(
		'__selector__'                => array('type','autoplay'),
		'default'                     => '{type_legend},type',
		'predefined'                     => '{type_legend},type;{title_legend},title,author;{screensize_legend},screensize;{config_legend},autoplay,slidesToShow,slidesToScroll,infinite,arrows,dots;{expert_legend},settings;{unslick_legend},unslick',
		'customized'                     => '{type_legend},type;{title_legend},title,author;{screensize_legend},screensizeCustom;{config_legend},autoplay,slidesToShow,slidesToScroll,infinite,arrows,dots;{expert_legend},settings;{unslick_legend},unslick',
	),

	// Subpalettes
	'subpalettes' => array
	(
		'autoplay' => 'autoplaySpeed'
	),

	// Fields
	'fields' => array
	(
		'id' => array
		(
			'sql'                     => "int(10) unsigned NOT NULL auto_increment"
		),
		'pid' => array
		(
			'foreignKey'              => 'tl_e23_slick.title',
			'sql'                     => "int(10) unsigned NOT NULL default '0'",
			'relation'                => array('type'=>'belongsTo', 'load'=>'eager')
		),
		'tstamp' => array
		(
			'sql'                     => "int(10) unsigned NOT NULL default '0'"
		),
		'sorting' => array
		(
			'sql'                     => "int(10) unsigned NOT NULL default '0'"
		),
		'title' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_e23_slick_items']['title'],
			'sorting'                 => true,
			'inputType'               => 'text',
			'search'                  => true,
			'eval'                    => array('mandatory'=>true, 'decodeEntities'=>true, 'maxlength'=>255),
			'sql'                     => "varchar(255) NOT NULL default ''"
		),
		
		'type' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_e23_slick_items']['type'],
			'default'                 => 'predefined',
			'inputType'               => 'select',
			'options'                 => array('predefined','customized'),
			'reference'								=> &$GLOBALS['TL_LANG']['tl_e23_slick_items']['type_reference'],
			'eval'                    => array('mandatory'=>true, 'submitOnChange'=>true, 'maxlength'=>255),
			'sql'                     => "varchar(255) NOT NULL default ''"
		),
		
		'author' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_e23_slick_items']['author'],
			'default'                 => BackendUser::getInstance()->id,
			'search'                  => true,
			'inputType'               => 'select',
			'foreignKey'              => 'tl_user.name',
			'eval'                    => array('doNotCopy'=>true, 'mandatory'=>true, 'chosen'=>true, 'includeBlankOption'=>true, 'tl_class'=>'w50'),
			'sql'                     => "int(10) unsigned NOT NULL default '0'",
			'relation'                => array('type'=>'hasOne', 'load'=>'eager')
		),

		'screensize' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_e23_slick_items']['screensize'],
			'sorting'                 => true,
			'inputType'               => 'select',
			'options'									=> $GLOBALS['E23_SLICK']['screensizes'],
			'reference'									=> $GLOBALS['TL_LANG']['tl_e23_slick_items']['screensizes_reference'],
			'eval'                    => array('mandatory'=>true, 'chosen' => true, 'tl_class' => 'long'),
			'sql'                     => "varchar(255) NOT NULL default ''"
		),
		'screensizeCustom' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_e23_slick_items']['screensizeCustom'],
			'inputType'               => 'text',
			'eval'                    => array('mandatory'=>true, 'rgxp'=>'natural', 'maxlength'=>255),
			'sql'                     => "varchar(255) NOT NULL default ''"
		),

		'autoplay' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_e23_slick_items']['autoplay'],
			'inputType'               => 'checkbox',
			'eval'                    => array('submitOnChange'=>true, 'doNotCopy'=>true),
			'sql'                     => "char(1) NOT NULL default ''"
		),
		'autoplaySpeed' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_e23_slick_items']['autoplaySpeed'],
			'inputType'               => 'text',
			'default'               	=> '3000',
			'eval'                    => array('mandatory'=>true, 'rgxp'=>'natural', 'maxlength'=>255),
			'sql'                     => "varchar(255) NOT NULL default ''"
		),
		'slidesToShow' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_e23_slick_items']['slidesToShow'],
			'default'                 => 1,
			'inputType'               => 'select',
			'options'									=> range(1,20),
			'eval'                    => array('mandatory'=>true, 'chosen'=>true, 'tl_class'=>'clr w50'),
			'sql'                     => "int(10) unsigned NOT NULL default '0'"
		),
		'slidesToScroll' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_e23_slick_items']['slidesToScroll'],
			'default'                 => 1,
			'inputType'               => 'select',
			'options'									=> range(1,20),
			'eval'                    => array('mandatory'=>true, 'chosen'=>true, 'tl_class'=>'w50'),
			'sql'                     => "int(10) unsigned NOT NULL default '0'"
		),
		'infinite' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_e23_slick_items']['infinite'],
			'inputType'               => 'checkbox',
			'eval'                    => array('tl_class' => 'clr m12'),
			'sql'                     => "char(1) NOT NULL default ''"
		),
		'arrows' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_e23_slick_items']['arrows'],
			'inputType'               => 'checkbox',
			'default'                 => 1,
			'eval'                    => array('tl_class' => 'm12 w50'),
			'sql'                     => "char(1) NOT NULL default ''"
		),
		'dots' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_e23_slick_items']['dots'],
			'inputType'               => 'checkbox',
			'eval'                    => array('tl_class' => 'm12 w50'),
			'sql'                     => "char(1) NOT NULL default ''"
		),

		'unslick' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_e23_slick_items']['unslick'],
	    'inputType'								=> 'checkbox',
	    'eval'										=> array('tl_class'=>'clr m12'),
	    'sql'											=> "char(1) NOT NULL default ''",
		),
		'settings' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_e23_slick_items']['settings'],
			'inputType'               => 'multiColumnWizard',
			'eval' => array('tl_class' => 'clr',
				'buttons' => array('up' => false, 'down' => false),
				'columnFields' => array
					(
						'settings_key' => array
						(
							'label'                 => &$GLOBALS['TL_LANG']['tl_e23_slick_items']['settings_key'],
							'inputType'             => 'select',
							'options'								=> $GLOBALS['E23_SLICK']['responsive'],
							'eval' 									=> array('style'=>'width:250px','includeBlankOption' => true,'chosen' => true)
						),
						'settings_value' => array
						(
							'label'									=> &$GLOBALS['TL_LANG']['tl_e23_slick_items']['settings_value'],
							'inputType'							=> 'text',
							'eval'                  => array('style'=>'width:300px')
						),
					)
			),
			'sql'                     => "blob NULL"
		)
		
	)
);


class tl_e23_slick_items extends Backend {

		
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
		if (!$dc->activeRecord)
		{
			return;
		}

		$this->loadLanguageFile('tl_e23_slick_items');

		$action = \Input::get('act');
		$this->log($GLOBALS['TL_LANG']['MOD']['e23_slick'][0].': Action > '.strtoupper($action).' / Slick item > '.$GLOBALS['TL_LANG']['tl_e23_slick_items']['screensizes_reference'][$dc->activeRecord->screensize], __METHOD__, EINS23);
	}


/**
  * List items 
  * @param array
  * @return string
  */
  public function listItemData($arrRow)
  {
  	$this->loadLanguageFile('tl_e23_slick_items');

  	$arr = array('autoplay','slidesToShow','slidesToScroll','infinite','arrows','dots');
  	for ($i=0;$i<count($arr);$i++)
  	{
			if(empty($arrRow[$arr[$i]]))
			{
				continue;
			}
			$value = E23Slick::displayValuesAccordingToKeyType($arr[$i], $arrRow[$arr[$i]]);
			$key = $GLOBALS['TL_LANG']['tl_e23_slick_items'][$arr[$i]][0];
  		$settings .= '<tr><td>'.$key.'</td><td>'.$value.'</td></tr>';
  	}

  	$settingsArr = deserialize($arrRow['settings']);

  	for ($i=0;$i<count($settingsArr);$i++)
  	{
			$key = $settingsArr[$i]['settings_key'];
			$value = $settingsArr[$i]['settings_value'];
			if(empty($value))
			{
				continue;
			}
			$value = E23Slick::displayValuesAccordingToKeyType($key, $value);
  		$expertSettings .= '<tr><td>'.$key.'</td><td>'.$value.'</td></tr>';
  	}

  	if($arrRow['type']=='customized') {
  		$screensizeTitle = $GLOBALS['TL_LANG']['tl_e23_slick_items']['type_reference'][$arrRow['type']].': max. '.$arrRow['screensizeCustom'].'px';
  	} else {
  		$screensizeTitle = $GLOBALS['TL_LANG']['tl_e23_slick_items']['screensizes_reference'][$arrRow['screensize']];
  	}

   	$return = '<div class="cte_type tl_e23_slick_items" style="color:#666666;font-size:11px;">
   	<h4>'.$screensizeTitle.'</h4><br>'.
   	$GLOBALS['TL_LANG']['tl_e23_slick_items']['config_legend'].':
   	<table class="slick_settings">' . $settings . '</table></div>' . "\n";

   	if(isset($expertSettings))
   	{
			$return .= $GLOBALS['TL_LANG']['tl_e23_slick_items']['expert_legend'].':
	   	<table class="slick_settings">' . $expertSettings . '</table></div>' . "\n";
	   }
	 return $return;
  }



}