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
 * Run in a custom namespace, so the class can be replaced
 */
namespace Yodorada\Slick;

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
        if ($this->yodorada_slick_use_config && $this->yodorada_slick_config) {
            $this->import('YodoradaSlick');

            // load configuration
            $conf = YodoradaSlickModel::findById($this->yodorada_slick_config);

            // check for responsive configurations
            $subconf = YodoradaSlickItemsModel::findByPid($this->yodorada_slick_config);

            if ($conf !== null) {

                $slickConfig = " " . \StringUtil::generateAlias($conf->title);

                if ($conf->useSlickEvents) {
                    // add JS template with slick event callbacks
                    $jsEventTemplate = new \FrontendTemplate($conf->slickEventsTpl);
                    $jsEventTemplate->slick = $slick;
                    $this->Template->slickEvents = $jsEventTemplate->parse();
                }

                // process expert settings
                $expSettings = $this->YodoradaSlick->mapValuesToKeyTypeExpert(deserialize($conf->settings));

                // add JS template with slick config
                $jsTemplate = new \FrontendTemplate('ce_slick_js');
                $jsTemplate->slick = $slick;
                $this->configArr = $conf->row();
                $jsTemplate->mainSettings = $this->YodoradaSlick->makeSettingArray($this->configArr, $expSettings);

                if ($subconf !== null) {
                    // add responsive config to JS template
                    $subSettings = array();
                    while ($subconf->next()) {
                        // process expert settings
                        $expSettings = $this->YodoradaSlick->mapValuesToKeyTypeExpert(deserialize($subconf->settings));
                        $subconfigRow = $subconf->row();
                        $subconfScreenSize = ($subconfigRow['type'] == 'predefined' ? $subconf->screensize : $subconf->screensizeCustom);
                        $subSettings[$subconfScreenSize] = $this->YodoradaSlick->makeSettingArray($subconfigRow, $expSettings);
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
    protected function compile()
    {
        return parent::compile();
    }
}
