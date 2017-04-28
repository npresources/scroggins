<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */
?>

<?php get_header(); ?>
<section class="four-oh-four page-container">
    <div class="row">
        <div class="medium-5 columns">
            <img src="<?php echo get_template_directory_uri() ?>/assets/images/missing-scroggins.jpg" class='missing-pic'>
        </div>
        <div class="medium-7 columns">
            <div class="body">
                <h2>Nothing to See Here</h2>
                <p>
                    Somehow I haven't been able to anticipate you showing up on this page so I didn't add anything for you to see here. However, there is a plethora of content elsewhere so it's probably best to head back to the safety of the home page.
                </p>
                <a href="/" class="submit-button">Back to Safety</a>
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>