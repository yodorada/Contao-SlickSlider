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
 * Run in a custom namespace, so the class can be replaced
 */
namespace eins23\Slick;

class ContentElementSlick extends \ContentElement
{

	/**
	 * Template
	 * @var string
	 */
	protected $strTemplate;


	/**
	 * Config
	 * @var array
	 */
	protected $configArr;
	
	/**
	 * Parse the template
	 *
	 * @return string
	 */
	public function generate()
	{
		return parent::generate();
	}

	
	/**
	 * Compile the current element
	 */
	protected function addSlick()
	{

		$slickConfig = "";
		$slick = $this->id;
		$this->Template->slick = $slick;

		// if slick configuration was selected
		// 
		if($this->e23_slick_use_config && $this->e23_slick_config) {
			$this->import('E23Slick');

			// load configuration
			$conf = E23SlickModel::findById($this->e23_slick_config);

			// check for responsive configurations
			$subconf = E23SlickItemsModel::findByPid($this->e23_slick_config);


			if($conf!==null) {
				
				$slickConfig = " ".\StringUtil::generateAlias($conf->title);

				if($conf->useSlickEvents) {
					// add JS template with slick event callbacks
					$jsEventTemplate = new \FrontendTemplate($conf->slickEventsTpl);
					$jsEventTemplate->slick = $slick;
					$this->Template->slickEvents = $jsEventTemplate->parse();
				}
				


				// process expert settings
				$expSettings = $this->E23Slick->mapValuesToKeyTypeExpert(deserialize($conf->settings));


				// add JS template with slick config
				$jsTemplate = new \FrontendTemplate('ce_slick_js');
				$jsTemplate->slick = $slick;
				$this->configArr = $conf->row();
				$jsTemplate->mainSettings = $this->E23Slick->makeSettingArray($this->configArr, $expSettings);


				if($subconf!==null) {
					// add responsive config to JS template
					$subSettings = array();
					while($subconf->next()) {
						// process expert settings
						$expSettings = $this->E23Slick->mapValuesToKeyTypeExpert(deserialize($subconf->settings));
						$subconfigRow = $subconf->row();
						$subconfScreenSize = ($subconfigRow['type']=='predefined'?$subconf->screensize:$subconf->screensizeCustom);
						$subSettings[$subconfScreenSize] = $this->E23Slick->makeSettingArray($subconfigRow, $expSettings);
					}
					ksort($subSettings);
					$jsTemplate->subSettings = $subSettings;
				}

				// parese JS template and add to $strTemplate
				$this->Template->slickSettings = $jsTemplate->parse();
			}
		}

		$this->Template->slickConfig = $slickConfig;
	}

	
	/**
	 * Compile the content element
	 */
	protected function compile() {
		return parent::compile();
	}
}