jQuery(function($) {
	var $sizes = $('#product-size');
	var $priceLabel = $('#price-label');
	var $quantity = $('#quantity');

	var basePrice = $priceLabel.data('price');

	var recalc = function() {
		factor = $sizes.find(':selected').data('factor');
		quantity = $quantity.val();

		console.log(factor, quantity, $priceLabel, $sizes);
		if(quantity) {
			$priceLabel.text('$' + basePrice * factor * quantity);
		}
	}


	$sizes.change(recalc);
	$quantity.change(recalc);

	if(($default = $sizes.find('[data-factor=1]')).length) {
		$sizes.val($default.attr('value'));
	}
});