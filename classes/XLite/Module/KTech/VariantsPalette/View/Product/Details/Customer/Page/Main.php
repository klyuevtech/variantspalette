<?php
// vim: set ts=4 sw=4 sts=4 et:

namespace XLite\Module\KTech\VariantsPalette\View\Product\Details\Customer\Page;

/**
 * @Decorator\Depend ("XC\ProductVariants")
 */
class Main extends \XLite\View\Product\Details\Customer\Page\Main implements \XLite\Base\IDecorator
{
	/**
	 * Get JS files
	 *
	 * @return array
	 */
	public function getJSFiles()
	{
		return array_merge(
			parent::getJSFiles(),
			[ 'modules/KTech/VariantsPalette/product/controller.js' ]
		);
	}

	public function getCSSFiles()
	{
		return array_merge(
			parent::getCSSFiles(),
			[ 'modules/KTech/VariantsPalette/product/style.css' ]
		);
	}

}
