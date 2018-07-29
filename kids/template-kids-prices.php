<?php
/**
 *
 * Template Name: Kids Cennik
 *
 * @package storefront
 */
get_header();
$args = array( 'post_type' => 'prices', 'posts_per_page' => 10 );
$the_query = new WP_Query( $args );
?> <?php if ( $the_query->have_posts()  ) : ?>

    <div class="graphic-all">
        <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
            <?php if( in_category(3)):?>


                <?php $category_id = get_cat_ID( 'kids' );

                // Get the URL of this category
                $category_link = get_category_link( $category_id ); ?>
                <div class="graphic-one">
                    <h2><?php the_field('basen');?></h2>

                    <?php the_field('ceny');?>

                </div>


            <?php endif;?>

            <?php wp_reset_postdata(); ?>
        <?php endwhile; ?>
    </div>

    </div>
<?php endif;
get_footer();?>
