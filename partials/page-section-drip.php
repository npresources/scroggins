<div id="drip" class="drip">
    <div class="row">
        <div class="small-12 columns">
            <h2 class="block-title">STAY IN THE KNOW</h2>
            <div class="social">

                <?php echo do_shortcode('[instagram-feed]'); ?>

                <div class="row">
                    <div class="medium-6 columns">
                        <div class="clearfix">
                            <a class="instagram-button social-button" href="https://www.instagram.com/clayscroggins" target="_blank">
                                <img src="<?php echo get_template_directory_uri() ?>/assets/images/instagram-logo.png" class="social-logo">
                                <h4 class="social-name">@clayscroggins</h4>
                            </a>
                        </div>
                    </div>
                    <div class="medium-6 columns">
                        <div class="clearfix">
                            <a class="twitter-button social-button" href="https://twitter.com/clayscroggins" target="_blank">
                                <img src="<?php echo get_template_directory_uri() ?>/assets/images/twitter-logo.png" class="social-logo">
                                <h4 class="social-name">@clayscroggins</h4>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div id="newsletter" class="newsletter">
                <div class="row">
                    <div class="small-12 medium-6 columns">
                        <h4 class='title'>NEWSLETTER</h4>
                        <p>If you’d like to learn more about what I'm up to, you can join the email list to receive special announcements and updates.</p>
                    </div>
                    <div class="small-12 medium-6 columns">
                        <div class="form">
                            <form id="if-form" data-abide novalidate
                            accept-charset="UTF-8" action="https://hs353.infusionsoft.com/app/form/process/eef73b183b6fc6bb9e06712d5985951d" class="infusion-form" method="POST" target="if-frame">
                                <input name="inf_form_xid" type="hidden" value="eef73b183b6fc6bb9e06712d5985951d" />
                                <input name="inf_form_name" type="hidden" value="Homepage" />
                                <input name="infusionsoft_version" type="hidden" value="1.65.0.44" />
                                <div class="infusion-field">
                                    <label for="inf_field_Email">Email *</label>
                                    <input class="infusion-field-input-container" id="inf_field_Email" name="inf_field_Email" type="text" required />
                                    <span class="form-error">Please enter an email address.</span>
                                </div>
                                <div class="clearfix">
                                    <input id="if-submit" type="submit" class="submit-button float-right" value="Submit" />
                                </div>
                            </form>
                            <iframe name="if-frame" id="if-frame" width="0" height="0" src=""></iframe>
                            <script type="text/javascript" src="https://hs353.infusionsoft.com/app/webTracking/getTrackingCode"></script>
                            <div id="if-success" class="callout success hide">
                                <p>Thanks for signing up.</p>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>