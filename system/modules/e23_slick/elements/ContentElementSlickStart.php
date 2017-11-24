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

class ContentElementSlickStart extends ContentElementSlick
{

    /**
     * Template
     * @var string
     */
    protected $strTemplate = 'ce_slick_start';

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
    protected function compile()
    {
        if (TL_MODE == 'BE') {
            $this->strTemplate = 'be_wildcard';

            /** @var \BackendTemplate|object $objTemplate */
            $objTemplate = new \BackendTemplate($this->strTemplate);

            $this->Template = $objTemplate;
            $this->Template->title = $this->headline;

            return;
        }

        $this->addSlick();

    }

}
