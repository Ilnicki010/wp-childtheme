<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package storefront
 */

get_header(); ?>

        <main id="main" class="site-main" role="main">

            <div class="container">

                    <h1 class="quote">Nasza oferta 🏊‍♂️</h1>

                <div class="box">
                    <a href="<?php echo get_home_url().'?page_id=142'?>">
                    <h1>Baby</h1>
                    <p>Pywanie dla maluchów</p>
                    </a>
                </div>

                <div class="box">
                    <a href="<?php echo get_home_url().'?page_id=144'?>">
                    <h1>Kids</h1>
                    <p>Pylywanie dla starszych dzieci</p>
                    </a>
                </div>
                <div class="box">
                    <a href="<?php echo get_home_url().'?page_id=151'?>">
                    <h1>Dorośli</h1>
                    <p>Zajecia dla doroslych</p>
                    </a>
                </div>
            </div>
        </main><!-- #main -->




<?php
get_footer();
