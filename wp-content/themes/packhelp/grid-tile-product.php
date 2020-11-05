<div class="cell">
    <img class="thumbnail" src="https://placehold.it/450x250">
    <h5>Other Product <small>$22</small></h5>
    <p>In condimentum facilisis porta. Sed nec diam eu diam mattis viverra. Nulla fringilla, orci ac
        euismod semper, magna diam.</p>
    <?php switch($args['button']['type']) {
    	case 'buynow':
		    printf('<a href="#" class="button expanded %s">Buy Now</a>', $args['button']['style']);
		    break;
		case 'readmore':
			printf('<a href="#" class="button expanded %s">See more</a>', $args['button']['style']);
			break;
    } ?>
</div>