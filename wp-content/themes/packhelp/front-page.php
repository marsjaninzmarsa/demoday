<?php get_header(); ?>
<?php the_post(); ?>

<div class="callout large">
    <div class="row column text-center">
        <h1><?= get_field('header_title'); ?></h1>
        <p class="lead"><?= get_field('header_subtitle'); ?></p>
        <?php while( have_rows('header_buttons') ) : the_row(); $link = get_sub_field('link');
            printf('<a href="%s" target="%s" class="button large %s">%s</a>' . "\n", esc_url($link['url'] ?: '#'), $link['target'], get_sub_field('style'), $link['title']);
        endwhile; ?>
    </div>
</div>


<article class="grid-container">

    <?php the_content(); ?>

    <hr>

    <?php if(have_rows('numbers') ) : ?>
        <div class="row column">
            <ul class="vertical medium-horizontal menu expanded text-center">
                <?php while( have_rows('numbers') ) : the_row(); ?>
                    <li><a href="<?= esc_url(get_sub_field('link') ?: '#'); ?>">
                        <div class="stat"><?= get_sub_field('quantity'); ?></div>
                        <span><?= get_sub_field('description'); ?></span>
                    </a></li>
                <?php endwhile; ?>
            </ul>
        </div>
    <?php endif; ?>

    <hr>

    <div class="row column">
        <h3>Our Recent Work</h3>
    </div>

    <div class="grid-x grid-margin-x small-up-1 medium-up-3">
        <div class="cell">
            <img class="thumbnail" src="https://placehold.it/450x250">
            <h5>Other Product <small>$22</small></h5>
            <p>In condimentum facilisis porta. Sed nec diam eu diam mattis viverra. Nulla fringilla, orci ac
                euismod semper, magna diam.</p>
            <a href="#" class="button hollow expanded">Buy Now</a>
        </div>
        <div class="cell">
            <img class="thumbnail" src="https://placehold.it/450x250">
            <h5>Other Product <small>$22</small></h5>
            <p>In condimentum facilisis porta. Sed nec diam eu diam mattis viverra. Nulla fringilla, orci ac
                euismod semper, magna diam.</p>
            <a href="#" class="button hollow expanded">Buy Now</a>
        </div>
        <div class="cell">
            <img class="thumbnail" src="https://placehold.it/450x250">
            <h5>Other Product <small>$22</small></h5>
            <p>In condimentum facilisis porta. Sed nec diam eu diam mattis viverra. Nulla fringilla, orci ac
                euismod semper, magna diam.</p>
            <a href="#" class="button hollow expanded">Buy Now</a>
        </div>
        <div class="cell">
            <img class="thumbnail" src="https://placehold.it/450x250">
            <h5>Other Product <small>$22</small></h5>
            <p>In condimentum facilisis porta. Sed nec diam eu diam mattis viverra. Nulla fringilla, orci ac
                euismod semper, magna diam.</p>
            <a href="#" class="button hollow expanded">Buy Now</a>
        </div>
        <div class="cell">
            <img class="thumbnail" src="https://placehold.it/450x250">
            <h5>Other Product <small>$22</small></h5>
            <p>In condimentum facilisis porta. Sed nec diam eu diam mattis viverra. Nulla fringilla, orci ac
                euismod semper, magna diam.</p>
            <a href="#" class="button hollow expanded">Buy Now</a>
        </div>
        <div class="cell">
            <img class="thumbnail" src="https://placehold.it/450x250">
            <h5>Other Product <small>$22</small></h5>
            <p>In condimentum facilisis porta. Sed nec diam eu diam mattis viverra. Nulla fringilla, orci ac
                euismod semper, magna diam.</p>
            <a href="#" class="button hollow expanded">Buy Now</a>
        </div>
        <div class="cell">
            <img class="thumbnail" src="https://placehold.it/450x250">
            <h5>Other Product <small>$22</small></h5>
            <p>In condimentum facilisis porta. Sed nec diam eu diam mattis viverra. Nulla fringilla, orci ac
                euismod semper, magna diam.</p>
            <a href="#" class="button hollow expanded">Buy Now</a>
        </div>
        <div class="cell">
            <img class="thumbnail" src="https://placehold.it/450x250">
            <h5>Other Product <small>$22</small></h5>
            <p>In condimentum facilisis porta. Sed nec diam eu diam mattis viverra. Nulla fringilla, orci ac
                euismod semper, magna diam.</p>
            <a href="#" class="button hollow expanded">Buy Now</a>
        </div>
        <div class="cell">
            <img class="thumbnail" src="https://placehold.it/450x250">
            <h5>Other Product <small>$22</small></h5>
            <p>In condimentum facilisis porta. Sed nec diam eu diam mattis viverra. Nulla fringilla, orci ac
                euismod semper, magna diam.</p>
            <a href="#" class="button hollow expanded">Buy Now</a>
        </div>
    </div>

    <hr>
</article>

<?php get_footer(); ?>