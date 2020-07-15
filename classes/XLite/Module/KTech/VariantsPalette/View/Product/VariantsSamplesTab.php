<?php
// vim: set ts=4 sw=4 sts=4 et:

namespace XLite\Module\KTech\VariantsPalette\View\Product;

/**
 * Reviews tab on product details page
 *
 * @ListChild (list="product.details.page.tab.samples")
 */
class VariantsSamplesTab extends \XLite\View\AView
{
	/**
	 * Define product
	 *
	 * @return \XLite\Model\Product
	 */
	public function getProduct()
	{
		return \XLite\Core\Database::getRepo('XLite\Model\Product')->find($this->getProductId());
	}

	/**
	 * Get a list of CSS files
	 *
	 * @return array
	 */
	public function getCSSFiles()
	{
		$list = parent::getCSSFiles();

		return $list;
	}

	/**
	 * Get a list of JS files
	 *
	 * @return array
	 */
	public function getJSFiles()
	{
		$list = parent::getJSFiles();

		return $list;
	}

	/**
	 * Return widget default template
	 *
	 * @return string
	 */
	protected function getDefaultTemplate()
	{
		return 'modules/KTech/VariantsPalette/product/colors_tab.twig';
	}
}
