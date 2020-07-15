<?php
// vim: set ts=4 sw=4 sts=4 et:

namespace XLite\Module\KTech\VariantsPalette\View\Product\Details\Customer\Page;

/**
 * Abstract product page
 *
 */
abstract class APage extends \XLite\View\Product\Details\Customer\Page\APage implements \XLite\Base\IDecorator
{
	/**
	 * Process global tab addition into list
	 *
	 * @param                                  $list
	 * @param \XLite\Model\Product\IProductTab $tab
	 */
	protected function applyStaticTabListValue(&$list, $tab)
	{
		parent::applyStaticTabListValue($list, $tab);

		if ($tab->getServiceName() === 'Colors') {
			$list[$tab->getServiceName()] = [
				'list'   => 'product.details.page.tab.samples',
				'weight' => $tab->getPosition(),
			];
		}
	}
}
