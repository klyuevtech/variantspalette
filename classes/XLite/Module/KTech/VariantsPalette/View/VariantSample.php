<?php

namespace XLite\Module\KTech\VariantsPalette\View;

/**
 * @ListChild (list="product.details.page.info", weight="50", zone="customer")
 */
class VariantSample extends \XLite\View\AView
{
	protected function getDefaultTemplate()
	{
		return 'modules\KTech\VariantsPalette\product\variant_sample.twig';
	}

	protected function getVariantImage()
	{
		return $this->getProduct()->getVariant()->getImage();
	}

	protected function isVisible() {
		return parent::isVisible()
			&& $this->getProduct()->hasVariants();
	}
}
