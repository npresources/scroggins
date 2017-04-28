<?php
/**
 * Template Name: Home
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?>

<?php get_header(); ?>
<?php get_template_part('partials/page-section-banner'); ?>
<?php get_template_part('partials/page-section-resources'); ?>
<?php get_template_part('partials/page-section-messages'); ?>
<?php get_template_part('partials/page-section-drip'); ?>
<?php get_footer(); ?>

<script>
    jQuery(document).ready(function(){
        // handle links with @href started with '#' only
        jQuery(document).on('click', '.menu-item>a', function(e) {
            console.log('Clicked a home menu item');
            // target element id
            var id = jQuery(this).attr('href');
            id = id.replace('/','');

            // target element
            var $id = jQuery(id);
            if ($id.length === 0) {
                return;
            }

            // prevent standard hash navigation (avoid blinking in IE)
            e.preventDefault();

            // top position relative to the document
            var header_height = jQuery('.header').outerHeight();
            var pos = $id.offset().top;
            var adjustment = pos - header_height;

            // animated top scrolling
            jQuery('body, html').animate({scrollTop: adjustment});
        });

        // This would need to be handled more elegantly. Need to verify this is the proper UX though.
        jQuery('.header').removeClass("header-active");

        jQuery(window).on('scroll', function () {
            if (jQuery(this).scrollTop() > 10) {
                jQuery('.header').addClass("header-active");

            } else {
                jQuery('.header').removeClass("header-active");
            }
        });
    });
</script>
