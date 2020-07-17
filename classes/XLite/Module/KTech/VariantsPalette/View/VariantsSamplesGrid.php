<?php

namespace XLite\Module\KTech\VariantsPalette\View;

/**
 * @ListChild (list="product.details.page.image", weight="30", zone="customer")
 */
class VariantsSamplesGrid extends \XLite\View\AView
{
	protected function getDefaultTemplate()
	{
		return 'modules\KTech\VariantsPalette\product\variants_samples_grid.twig';
	}

	protected function isVisible() {
		return parent::isVisible()
			&& $this->getProduct()->hasVariants();
	}

	/**
	 * @return mixed|null
	 */
	protected function getVariantsSamples()
	{
		$variants = $this->getProduct()->getVariants();
		$samples  = array();

		foreach ($variants as $variant) {
			$sample = array();
			$sample['image'] = $variant->getImage();

			foreach ($variant->getValues() as $option) {
				$sample['optionids'] .= $option->getId() . ' ';
			}

			$sample['optionids'] = trim($sample['optionids']);

			$sample['title'] = $option->asString();

			$samples[] = $sample;

		}

		return $samples;
	}
}
