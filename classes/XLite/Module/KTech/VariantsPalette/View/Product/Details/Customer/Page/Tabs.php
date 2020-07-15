<?php
// vim: set ts=4 sw=4 sts=4 et:

namespace XLite\Module\KTech\VariantsPalette\View\Product\Details\Customer\Page;


class Tabs extends \XLite\View\Product\Details\Customer\Page\Tabs implements \XLite\Base\IDecorator
{
	/**
	 * Get cache parameters
	 *
	 * @return array
	 */
	protected function getCacheParameters()
	{
		$params = parent::getCacheParameters();

		return $params;
	}
}