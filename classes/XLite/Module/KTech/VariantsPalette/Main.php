<?php
namespace XLite\Module\KTech\VariantsPalette;

abstract class Main extends \XLite\Module\AModule
{
	/**
	 * Author name
	 *
	 * @return string
	 */
	public static function getAuthorName()
	{
		return 'KTech';
	}

	/**
	 * Module name
	 *
	 * @return string
	 */
	public static function getModuleName()
	{
		return 'Variants Palette';
	}

	/**
	 * Get module major version
	 *
	 * @return string
	 */
	public static function getMajorVersion()
	{
		return '5.4';
	}

	/**
	 * Module version
	 *
	 * @return string
	 */
	public static function getMinorVersion()
	{
		return 0;
	}

	/**
	 * Module description
	 *
	 * @return string
	 */
	public static function getDescription()
	{
		return 'Displays palette of variants images.';
	}
}

