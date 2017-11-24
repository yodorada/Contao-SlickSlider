<?php

/**
 * Contao Open Source CMS
 *
 * Copyright (c) 2005-2016 Leo Feyer
 *
 * @license LGPL-3.0+
 */

namespace eins23\Slick;


/**
 * @package   e23 slick
 * @author    Knut Herrmann, EINS[23].TV
 * @copyright EINS[23].TV, 2017
 */
class E23Slick extends \Backend
{

	/**
	 *  callback for checking and manipulating user input slick setting (preserve unique keys)
	 *
	 * @param string $varValue
	 * @param DataContainer $dc
	 */
		public function slickSettingsSaveCallback($varValue, DataContainer $dc)
		{
			return serialize($this->checkUserInputSlickSettings(deserialize($varValue)));
		}


	/**
	 * map user values to expected types of slick setting
	 *
	 * @param  $confArr array
	 * @param  $expArr array
	 * @return array
	 */
	
	public function makeSettingArray($confArr, $expArr)
	{

		$confArr = $this->unsetConfigElements($confArr);
		$expArr = $this->unsetConfigElements($expArr);

		return array_merge
					(
						array_intersect_key
						(
							$this->mapValuesToKeyTypeDefault($confArr), $GLOBALS['E23_SLICK']['settings']
						),
						$expArr
					);
	}


	/**
	 * unset specific array key/value pairs if not needed
	 *
	 * @param  $confArr array
	 * @return array
	 */
	protected function unsetConfigElements($confArr)
	{
		if(isset($confArr['lazyLoad']) && !$confArr['useLazyLoad']) {
			unset($confArr['lazyLoad']);
		}
		if(isset($confArr['autoplaySpeed']) && !$confArr['autoplay']) {
			unset($confArr['autoplaySpeed']);
		}

		$defaults = array('accessibility' =>	true, 'adaptiveHeight' =>	false, 'autoplay' =>	false, 'autoplaySpeed' =>	3000, 'centerMode' =>	false, 'dots' =>	false, 'draggable' =>	true, 'fade' =>	false, 'arrows' =>	true, 'mobileFirst' =>	false, 'infinite' =>	true, 'initialSlide' =>	0, 'pauseOnFocus' =>	true, 'pauseOnHover' =>	true, 'pauseOnDotsHover' =>	false, 'rows' =>	1, 'slidesPerRow' =>	1, 'slidesToShow' =>	1, 'slidesToScroll' =>	1, 'speed' =>	300, 'swipe' =>	true, 'swipeToSlide' =>	false, 'touchMove' =>	true, 'touchThreshold' =>	5, 'useCSS' =>	true, 'useTransform' =>	true, 'variableWidth' =>	false, 'vertical' =>	false, 'verticalSwiping' =>	false, 'rtl' =>	false, 'waitForAnimate' =>	true, 'zIndex' =>	1000);
		
		foreach ($defaults as $key => $value) {
			if(array_key_exists($key, $confArr) && $confArr[$key]===$value) {
				unset($confArr[$key]);
			}
		}
		return $confArr;
	}

	/**
	 * BACKEND: display user values according to expected types of slick setting
	 *
	 * @param  $arr array
	 * @return array
	 */
	
	public static function displayValuesAccordingToKeyType($key, $value)
	{
		switch($GLOBALS['E23_SLICK']['settings'][$key])
		{
			case "boolean":
			$value = (boolval($value)?'true':'false');
			break;
			case "int":
			case "number":
			$value = intval($value);
			break;
			case "string":
			default:
			$value = '<em>'.strval($value).'</em>';
			break;
		}
		return $value;
	}

	/**
	 * map expert user values to expected types of slick setting
	 *
	 * @param  $arr array
	 * @return array
	 */
	
	public function mapValuesToKeyTypeExpert($arr)
	{
		$mapped = array();
		for ($i=0;$i<count($arr);$i++)
		{
			$key = $arr[$i]['settings_key'];
			$value = $this->getMappedValue($key, $arr[$i]['settings_value']);
			if($value===-1)
			{
				continue;
			}
			$mapped[$key] = $value;
		}
		return $mapped;
	}

	/**
	 * map default user values to expected types of slick setting
	 *
	 * @param  $arr array
	 * @return array
	 */
	
	public function mapValuesToKeyTypeDefault($arr)
	{
		$mapped = array();
		 0;
		foreach($arr as $key => $value)
		{
			if(!array_key_exists($key, $GLOBALS['E23_SLICK']['settings']))
			{
				continue;
			}
			$value = $this->getMappedValue($key, $value);
			if($value===-1)
			{
				continue;
			}
			$mapped[$key] = $value;
		}
		return $mapped;
	}


	/**
	 * map user values to expected types of slick setting
	 *
	 * @param  $key string
	 * @param  $value string
	 * @return bool|int|string
	 */
	
	public function getMappedValue($key, $value)
	{
		
		if(empty($value))
		{
			$value = 0;
		}
		switch($GLOBALS['E23_SLICK']['settings'][$key])
		{
			case "boolean":
			return boolval($value);

			case "int":
			case "number":
			return intval($value);

			case "string":
			return strval($value);

			default:
			return -1;
		}
	}

	/**
	 * map user values to expected types of slick setting
	 *
	 * @param  $arr array
	 * @return array
	 */
	
	public function checkUserInputSlickSettings($arr)
	{
		$used = array();
		$mapped = array();
		for ($i=0;$i<count($arr);$i++)
		{
			$key = $arr[$i]['settings_key'];
			$value = $arr[$i]['settings_value'];

			if(in_array($used) || empty($value))
			{
				continue;
			}
			switch($GLOBALS['E23_SLICK']['settings'][$key])
			{
				case "boolean":
				if(!is_numeric($value) && is_string($value)) {
					$value = ($value=='false'?0:1);
				}
				$value = intval($value);
				break;
				case "int":
				case "number":
				$value = intval($value);
				break;
				case "string":
				default:
				$value = strval($value);
				break;
			}
			$mapped[] = array('settings_key' => $key, 'settings_value' => $value);
			$used[] = $key; 
		}
		return $mapped;
	}
}
