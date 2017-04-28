<?php
/**
 * Template Name: About
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?>

<?php get_header(); ?>

<section class="about page-container">
    <div class="row">
        <div class="small-6 medium-4 columns">
            <a href="/"><img src="<?php echo get_template_directory_uri() ?>/assets/images/about.jpg" class='about-pic'></a>
        </div>
        <div class="small-12 medium-8 columns">
            <div class="body">
                <?php 
                    while ( have_posts() ) : the_post();
                        the_content();
                    endwhile;
                ?>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
