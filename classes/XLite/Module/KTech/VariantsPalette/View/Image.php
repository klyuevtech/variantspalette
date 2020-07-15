<?php
// vim: set ts=4 sw=4 sts=4 et:

namespace XLite\Module\KTech\VariantsPalette\View;

/**
 * Image
 * @Decorator\Depend ("XC\ProductVariants")
 */
class Image extends \XLite\View\Image implements \XLite\Base\IDecorator
{
	/**
	 * Allowed properties names
	 *
	 * @var array
	 */
	protected $allowedProperties = [
		'className'   => 'class',
		'id'          => 'id',
		'onclick'     => 'onclick',
		'style'       => 'style',
		'onmousemove' => 'onmousemove',
		'onmouseup'   => 'onmouseup',
		'onmousedown' => 'onmousedown',
		'onmouseover' => 'onmouseover',
		'onmouseout'  => 'onmouseout',
		'dataId'      => 'data-id',
	];

}