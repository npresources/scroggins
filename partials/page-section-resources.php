<div id="book" class="book scroll-item">
    <div class="row">
        <div class="medium-push-7 medium-5 columns">
            <img class='book-image' src="<?php echo get_template_directory_uri() ?>/assets/images/book-cover.png">
        </div>

        <div class="medium-6 medium-pull-5 columns">
            <div class="book-info">
                <div class="book-header">
                    <h2 class="book-title"><em>HOW TO LEAD WHEN<br>YOU'RE NOT IN CHARGE</em></h2>
                    <h5 class="book-byline">Available everywhere August 22, 2017</h5>
                </div>

                <div class="book-body">
                    <p>Great leaders lead with or without the authority to lead.</p>
                    <p>Because every road of leadership forks at the intersection of authority and influence, learning to cultivate influence without authority is foundational to navigating culture today.</p>
                    <a href="https://www.amazon.com/How-Lead-When-Youre-Charge/dp/0310531578/" class="scrogg-button" target="_blank">
                        Pre-Order on Amazon
                    </a>
                </div>
                <?php if ( ! is_front_page() ) { ?>
                <div class="book-footer">
                    <div class="row">
                        <div class="medium-6 columns">
                            <div class="reveal" id="signUp" data-reveal>
                                <h2 class="block-title">Sign Up For Updates</h2>
                                <div class="form">
                                    <form id="if-form" accept-charset="UTF-8" action="https://hs353.infusionsoft.com/app/form/process/afad727d301030c62383abb8e69bf0ac" class="infusion-form" method="POST" target="if-frame">
                                        <input name="inf_form_xid" type="hidden" value="afad727d301030c62383abb8e69bf0ac" />
                                        <input name="inf_form_name" type="hidden" value="Book Notification" />
                                        <input name="infusionsoft_version" type="hidden" value="1.65.0.44" />
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
                                                   placeholder="Email" required />
                                            <span class="form-error">A valid email address is required</span>
                                        </div>
                                        <div class="infusion-submit">
                                            <input id="if-submit" type="submit" value="SIGN UP FOR THE NEWSLETTER" class="submit-button" />
                                        </div>
                                    </form>
                                    <iframe name="if-frame" id="if-frame" width="0" height="0" src=""></iframe>
                                    <script type="text/javascript" src="https://hs353.infusionsoft.com/app/webTracking/getTrackingCode"></script>
                                    <div id="if-success" class="callout success hide">
                                        <p>Thanks for signing up.</p>
                                    </div>
                                </div><!-- .form -->
                                <button class="close-button" data-close aria-label="Close modal" type="button">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </div>
</div>