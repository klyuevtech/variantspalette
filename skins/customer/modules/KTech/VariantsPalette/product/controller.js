/* vim: set ts=2 sw=2 sts=2 et: */

/**
 * Product details controller
 *
 * Copyright (c) 2011-present Qualiteam software Ltd. All rights reserved.
 * See https://www.x-cart.com/license-agreement.html for license details.
 */

/**
 * Controller
 */

ProductDetailsView.prototype.processVariantImageAsGallery = (function(data) {
  let cached_function = ProductDetailsView.prototype.processVariantImageAsGallery;

  return function(data) {

// This is commented to prevent main image changing on variant image click.
//      cached_function.apply(this, arguments); // use .apply() to call it

      if (data && _.isObject(data)) {
        let elm = this.base.find('img.variant-sample-image');
        
        if (elm) {
          elm.attr('width', data.main.w)
          .attr('height', data.main.h)
          .attr('src', data.main.url)
          .attr('srcset', data.main.srcset)
          .attr('alt', data.main.alt)
          .css({width: data.main.w + 'px', height: data.main.h + 'px'});
        }
      }
    };
})();

function selectVariantBySample(optionValToSelect) {
  jQuery('select.form-control').each( function() {
    let selectElement = this;
    let selectOptions = selectElement.options;

    for (let opt, j = 0; opt = selectOptions[j]; j++) {
      if (opt.value == optionValToSelect) {
          selectElement.selectedIndex = j;
          jQuery(selectElement).change();
          break;
      }
    }
  } );
}

jQuery(document).ready( function () {
    jQuery('div.variants-samples-item img').on('click', function() {
      options = this.dataset.optionids.split(' ');
      options.forEach( function(option) {
        selectVariantBySample(option);
      } );
    } );
  } );