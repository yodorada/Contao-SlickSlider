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

class ContentElementSlickItemStop extends \ContentElement
{

    /**
     * Template
     * @var string
     */
    protected $strTemplate = 'ce_slick_item_stop';

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
        }
    }

}
