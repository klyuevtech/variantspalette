<?php
// vim: set ts=4 sw=4 sts=4 et:

/**
 * Copyright (c) 2011-present Qualiteam software Ltd. All rights reserved.
 * See https://www.x-cart.com/license-agreement.html for license details.
 */

namespace XLite\Module\KTech\VariantsPalette\View\Product\AttributeValue\Customer;

/**
 * Attribute value (Select)
 * @Decorator\Depend ("XC\ProductVariants")
 */
class Select extends \XLite\View\Product\AttributeValue\Customer\Select  implements \XLite\Base\IDecorator
{
	/**
	 * @return string
	 */
	protected function getPlaceholderOptionLabel()
	{
		return static::t('Please select option');
	}

	/**
	 * @return array
	 */
	protected function getSelectAttributes()
	{
		return array_merge(
			parent::getSelectAttributes(),
			array()
		);
	}

	/**
	 * Get attribute type
	 *
	 * @return string
	 */
	protected function getAttributeType()
	{
		return \XLite\Model\Attribute::TYPE_SELECT;
	}

}
