<?php for ($i=0; $i < $args['limit'] ; $i++) { 
	get_template_part('grid-tile', $args['type'], $args);
}