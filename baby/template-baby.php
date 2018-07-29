<?php
/**
 *
 * Template Name: Baby
 *
 * @package storefront
 */

get_header(); ?>

    <main id="main" class="site-main" role="main">

<?php
$args = array( 'post_type' => 'baby', 'posts_per_page' => 10 );
$the_query = new WP_Query( $args );
?> <?php if ( $the_query->have_posts() ) : ?>

    <div class="price-graphic">
        <div class="graphic">
            <a href="<?php echo get_home_url().'?page_id=79'?>">Grafik</a>
        </div>
        <div class="graphic">
            <a href="<?php echo get_home_url().'?page_id=132'?>">Cennik</a>
        </div>
    </div>
    <div class="posts">

        <div class="prices">

        </div>
        <div class="news-text">
        <h1>Aktualnosci</h1>
        </div>
    <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

                <div class="post">

        <h2><?php the_title(); ?></h2>
                    <?php the_post_thumbnail(); ?>
                    <p><?php the_excerpt(); ?></p>
                    <div class="button">
                    <a href="<?php the_permalink(); ?>">Czytaj...</a>
                    </div>
                </div>

        <?php wp_reset_postdata(); ?>
                <?php endwhile; ?>
    </div>
        <?php endif; ?>



    </main>
<?php
get_footer();
