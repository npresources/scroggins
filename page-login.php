<?php
/**
 * Template Name: Login
 *
 * This template is used to capture visitor email addresses before they are directed to
 * the event page.
 *
 * @package Scroggins
 * @since   Scroggins 1.4.0
 */
?>

<?php get_header(); ?>

<?php if ( isset( $_GET['loggedin'] ) ) { ?>
	<div id="video-container">
		<div class="row">
			<div class="medium-12 columns">
				<video src="<?php echo get_template_directory_uri() ?>/assets/video/event-promo.mp4" preload="auto" controls>
			</div><!-- .columns -->
		</div><!-- .row -->
	</video>
	</div><!-- #video-container -->
<?php } else { ?>
	<div id="login-container" class="page-container">
		<div class="row">
			<div id="login-image" class="medium-6 columns">
				<p>
					<img class='login-image' src="<?php echo get_template_directory_uri() ?>/assets/images/how-to-lead-login.jpg">
				</p>
			</div><!-- #login-image -->
			<div id="login-form" class="medium-6 columns">
				<h2>JOIN LIVE BROADCAST</h3>
				<h3>WEDNESDAY, MAY 17, 2017 1PM - 3PM (10AM PDT)</h3>
				<div class="form">
					<form id="if-form" accept-charset="UTF-8" action="https://hs353.infusionsoft.com/app/form/process/1560770db22c437218fd3baa76a9731e" class="infusion-form" method="POST" target="if-frame">
						<input name="inf_form_xid" type="hidden" value="1560770db22c437218fd3baa76a9731e" />
						<input name="inf_form_name" type="hidden" value="Event Show Up" />
						<input name="infusionsoft_version" type="hidden" value="1.65.0.58" />
						<div class="infusion-field">
							<label for="inf_field_FirstName">First Name *</label>
							<input class="infusion-field-input-container" id="inf_field_FirstName" name="inf_field_FirstName" type="text" required />
							<span class="form-error">Your first name is required</span>
						</div>
						<div class="infusion-field">
							<label for="inf_field_LastName">Last Name *</label>
							<input class="infusion-field-input-container" id="inf_field_LastName" name="inf_field_LastName" type="text" required />
							<span class="form-error">Your last name is required</span>
						</div>
						<div class="infusion-field">
							<label for="inf_field_Email">Email *</label>
							<input class="infusion-field-input-container" id="inf_field_Email" name="inf_field_Email" type="text" required />
							<span class="form-error">A valid email address is required</span>
						</div>
						<div class="infusion-field">
							<label for="inf_custom_ZipCode">Zip Code</label>
							<input class="infusion-field-input-container" id="inf_custom_ZipCode" name="inf_custom_ZipCode" type="text" required />
							<span class="form-error">A valid zip code is required</span>
						</div>
						<div class="clearfix">
							<input id="if-submit" type="submit"
							class="submit-button login-button" value="Login" />
						</div>
					</form>
					<script type="text/javascript" src="https://hs353.infusionsoft.com/app/webTracking/getTrackingCode"></script>
					<iframe name="if-frame" id="if-frame" width="0" height="0" src=""></iframe>
					<div id="if-success" class="callout success hide">
						<p>
							Thank you! You'll be redirected to the event page momentarily.
							<span id="redirect"></span>
						</p>
					</div><!-- #if-success -->
				</div><!-- .form -->
			</div><!-- #login-form -->
		</div><!-- .row -->
		<div class="row">
			<div id="event-byline" class="medium-12 columns">
				<p>
					One of the greatest myths of leadership is that you must be in charge in order to lead. Great leaders don't buy it. Great leaders lead with or without the authority
					to lead.
				</p>
			</div><!-- .columns -->
		<div class="row">
			<?php get_template_part('partials/page-section-speakers'); ?>
		</div><!-- .row -->
	</div><!-- .container -->
<?php } ?>

<?php get_footer(); ?>