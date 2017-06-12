<?php
/**
 * Template Name: Book
 *
 * @package Scroggins
 * @since Scroggins 1.1
 */
?>

<?php get_header(); ?>

<div class="small-page-container">
    <?php get_template_part('partials/page-section-resources'); ?>

    <div class="offers">
        <div class="row">
            <div class="medium-4 columns">
                <h2 id="book-callout" class="block-title">Book</h2>
                <p class="scrog-content"><em>How to Lead When You’re Not In Charge</em>
                <br /><br />
                Available everywhere August 22, 2017</p>
                <p><a data-open="signUp" class="scrogg-button">Sign up for updates</a></p>
                <div class="reveal" id="sampleChapter" data-reveal>
                    <h2 class="block-title">Sample Chapter</h2>
                    <div class="form">
                        <form data-ajax-form data-abide novalidate accept-charset="UTF-8"
                        action="https://hs353.infusionsoft.com/app/form/process/afad727d301030c62383abb8e69bf0ac" class="infusion-form" method="POST">
                            <input name="inf_form_xid" type="hidden" value="afad727d301030c62383abb8e69bf0ac" />
                            <input name="inf_form_name" type="hidden" value="Web Form submitted" />
                                <input name="infusionsoft_version" type="hidden" value="1.65.0.42" />
                            <div class="infusion-field">
                                <input class="infusion-field-input-container input-style" id="inf_field_FirstName" name="inf_field_FirstName" type="text" placeholder="First Name" required />
                                <span class="form-error">This is required</span>
                            </div>
                            <div class="infusion-field">
                                <input class="infusion-field-input-container input-style" id="inf_field_LastName" name="inf_field_LastName" type="text" placeholder="Last Name" required />
                                <span class="form-error">This is required</span>
                            </div>
                            <div class="infusion-field">
                                <input class="infusion-field-input-container input-style" id="inf_field_Email" name="inf_field_Email" type="email"
                                       placeholder="Email" required pattern="email"/>
                                <span class="form-error">A valid email address is required</span>
                            </div>
                            <div class="infusion-submit">
                                <input type="submit" value="SIGN UP FOR THE SAMPLE CHAPTER" class="submit-button" />
                            </div>
                        </form>
                        <script type="text/javascript" src="https://hs353.infusionsoft.com/app/webTracking/getTrackingCode"></script>
                    </div><!-- .form -->
                    <button class="close-button" data-close aria-label="Close modal" type="button">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>
            <div class="medium-4 columns">
                <h2 class="block-title">Find your influence score</h2>
                <p class="scrog-content">
                    Learning how to lead when you're not in charge requires influence. Take this 20 question online assesssment and find your influence score.
                </p>
                <p><a href="https://influencescore.typeform.com/to/usCZVm" class="scrogg-button" target="_blank">Take Assessment</a></p>
            </div>
            <div class="medium-4 columns">
                <h2 id="events-callout" class="block-title">Events</h2>
                <p class="scrog-content">
                    Join Clay at one of his upcoming events.
                </p>
                <p><a href="/event" class="scrogg-button">"How To Lead" Event</a></p>
            </div>
        </div>
    </div>

    <div class="about">
        <div class="row">
            <div class="medium-12 columns">
                <h2 class="block-title">ABOUT CLAY</h2>
                <p>As lead pastor of North Point Community Church, Clay Scroggins provides visionary and directional leadership for the local church staff and congregation. Clay holds a degree in industrial engineering from Georgia Tech as well as a master’s degree and a doctorate with an emphasis in online church from Dallas Theological Seminary. He lives in Forsyth County, Georgia, with his wife, Jenny, and their four children.</p>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>
