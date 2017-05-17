<?php
/**
 * Template Name: Event
 *
 * @package Scroggins
 * @since Scroggins 1.1
 */
?>

<?php get_header(); ?>
<div id="event-container" class="page-container">
	<div id="event" class="scroll-item">
		<div class="row">
			<div class="large-6 columns">
				<?php get_template_part( 'partials/page-section-bumper' ); ?>
			</div><!-- .large-6 -->
			<div class="large-5 columns">
				<h1>HOW TO LEAD WHEN YOU'RE NOT IN CHARGE</h1>
				<p>
					Sorry your missed our online event. Sign up below to stay in the know on other ways
					you can better lead when you're not in charge.
				</p>
				<a id="registration-anchor" href="#registration">
					SIGN-UP FOR UPDATES
				</a>
			</div><!-- .large-5 -->
		</div><!-- .row -->
	</div><!-- #event -->

	<div class="speakers">
		<div class="row">
			<div class="medium-12 small-12 columns">
				<h2 id="speaker-info" class="block-title">
					Learn from Clay and Other<br />Top Church and Business Leaders
				</h2>
			</div>
		</div>
		<div class="row">
			<div class="medium-4 small-12 columns">
				<img src="<?php echo get_template_directory_uri() ?>/assets/images/speakers/andy-stanley.jpg" class="speaker-bio">
				<h2 class="speaker-title">Andy Stanley</h2>
				<p>Andy is the senior pastor and founder of North Point Ministries, which has six churches in the Atlanta area.  He is also a bestselling author.</p>
			</div>
			<div class="medium-4 columns">
				<img src="<?php echo get_template_directory_uri() ?>/assets/images/speakers/louie-giglio.jpg" class="speaker-bio">
				<h2 class="speaker-title">Louie Giglio</h2>
				<p>Louie is the pastor of Passion City Church, located in Atlanta, Georgia. He is also a public speaker, author, and the founder of the Passion Movement.</p>
			</div>
			<div class="medium-4 columns">
				<img src="<?php echo get_template_directory_uri() ?>/assets/images/speakers/frank-blake.jpg" class="speaker-bio">
				<h2 class="speaker-title">Frank Blake</h2>
				<p>A businessman and lawyer, Frank was the chairman and CEO of Home Depot. He also worked for the U.S. Department of Energy and General Electric.</p>
			</div>
		</div>
		<div class="row">
			<div class="medium-4 columns">
				<img src="<?php echo get_template_directory_uri() ?>/assets/images/speakers/shane-todd.jpg" class="speaker-bio">
				<h2 class="speaker-title">Shane Todd</h2>
				<p>Shane has proudly served Chick-fil-A for over 20 years, 17 of which were as an operator in Athens, Georgia.<br />He is also the first Chick-fil-A operator to run the Chick-fil-A food truck.</p>
			</div>
			<div class="medium-4 columns">
				<img src="<?php echo get_template_directory_uri() ?>/assets/images/speakers/melody-dixon.jpg" class="speaker-bio">
				<h2 class="speaker-title">Melody Dixon</h2>
				<p>Melody is the pastor of <a href="https://life.church" target="_blank">Life.Church</a> in Midtown Tulsa, Oklahoma. She has served as a LifeKids pastor and a Host Team pastor at various Life.Church campuses in the Tulsa area.</p>
			</div>
			<div class="medium-4 columns">
				<img src="<?php echo get_template_directory_uri() ?>/assets/images/speakers/tome-dawson.jpg" class="speaker-bio">
				<h2 class="speaker-title">Tome Dawson</h2>
				<p>Tome Dawson serves as the South Tulsa pastor and Tulsa area Leader for <a href="https://life.church" target="_blank">Life.Church</a>. He gives support and oversight to all the <a href="https://life.church" target="_blank">Life.Church</a> locations in the Tulsa metro area.</p>
			</div>
		</div>
	</div><!-- #speakers -->

    <div id="registration" class="row">
		<h2 class="block-title">EVENT REGISTRATION</h2>
        <div class="medium-6 columns">
            <p>One of the greatest myths of leadership is that you must be in charge in order to lead. Great leaders don't buy it. Great leaders lead with or without the authority to lead.</p>
        </div>

		<div class="medium-6 columns">
            <div class="form">
				<form accept-charset="UTF-8" id="if-form"
				action="https://hs353.infusionsoft.com/app/form/process/c84e71ac1d02e8d274383f457b55764f" class="infusion-form" method="POST" target="if-frame">
					<input name="inf_form_xid" type="hidden" value="c84e71ac1d02e8d274383f457b55764f" />
					<input name="inf_form_name" type="hidden" value="Event RSVP" />
					<input name="infusionsoft_version" type="hidden" value="1.65.0.44" />
					<div class="infusion-field">
						<label for="inf_field_FirstName">First Name *</label>
						<input class="infusion-field-input-container input-style" id="inf_field_FirstName" name="inf_field_FirstName" type="text" required />
                        <span class="form-error">This is required</span>
					</div>
					<div class="infusion-field">
						<label for="inf_field_LastName">Last Name *</label>
						<input class="infusion-field-input-container input-style" id="inf_field_LastName" name="inf_field_LastName" type="text" required />
                        <span class="form-error">This is required</span>
					</div>
					<div class="infusion-field">
						<label for="inf_field_Email">Email *</label>
						<input class="infusion-field-input-container input-style" id="inf_field_Email" name="inf_field_Email" type="text" required/>
                        <span class="form-error">A valid email address is required</span>
					</div>
					<div class="infusion-submit">
						<input id="if-submit" type="submit" value="SIGN UP FOR UPDATES" class="submit-button" />
					</div>
					<iframe name="if-frame" id="if-frame" width="0" height="0" src=""></iframe>
				</form>
				<script type="text/javascript" src="https://hs353.infusionsoft.com/app/webTracking/getTrackingCode"></script>
				<div id="if-success" class="callout success hide">
					<p>Thanks for signing up.</p>
				</div>
			</div>
		</div>
    </div><!-- .columns -->
</div>
<?php get_footer(); ?>
