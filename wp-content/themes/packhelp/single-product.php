<?php get_header(); ?>
<?php the_post(); ?>

<br>
<article class="grid-container">
    <div class="grid-x grid-margin-x">
        <div class="medium-6 cell">
            <img class="thumbnail" src="https://placehold.it/650x350">
        </div>
        <div class="medium-6 large-5 cell large-offset-1">
            <h3><?php the_title(); ?></h3>
            <div class="content"><?php the_content(); ?></div>

            <label>Size
                <?php $sizes = get_field('sizes'); if($sizes) : ?>
                    <select id="product-size">
                        <?php foreach ($sizes as $size):
                            printf('<option value="%s" data-factor="%s">%s</option>', $size->slug, get_field('factor', $size), $size->name);
                        endforeach; ?>
                    </select>
                <?php endif; ?>
            </label>

            <div class="grid-x">
                <div class="small-3 cell">
                    <label for="middle-label" class="middle">Quantity</label>
                </div>
                <div class="small-9 cell">
                    <input type="number" step="1" id="quantity" placeholder="One fish two fish">
                </div>
            </div>

            <h4>Product price: <strong id="price-label" data-price="<?= $price = get_field('price');?>">$<?= $price;?></strong></h4>

            <a href="#" class="button large expanded">Buy Now</a>

            <h6>Share this product:</h6>
            <div class="small secondary expanded button-group">
                <a href="#" class="button">Facebook</a>
                <a href="#" class="button">Twitter</a>
            </div>
        </div>
    </div>

    <hr>

    <h3>Other products:</h3>
    <div class="grid-x grid-margin-x medium-up-2 large-up-4">
        <?php get_template_part( 'grid', '', ['limit' => 8, 'type' => 'product', 'button' => ['style' => 'hollow', 'type' => 'buynow'] ] ); ?>
    </div>

    <hr>

</article>

<?php get_footer(); ?>