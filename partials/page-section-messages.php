<div id="messages" class="messages">

    <div class="row">
        <div class="small-12 columns">
            <h2 class="block-title">Messages</h2>

            <div class="row small-up-1 medium-up-3">
                <div class="column column-block">
                    <a href="https://player.vimeo.com/video/213907960" class="video-modal-button" data-open="videoModal">
                        <div class="video-container grow-container">
                            <img class="grow" src="<?php echo get_template_directory_uri() ?>/assets/images/white-noise.jpg">
                            <img class="play-button" src="<?php echo get_template_directory_uri() ?>/assets/images/play_button.png">
                        </div>
                        <h5>White Noise</h5>
                    </a>
                    <h6>FEBRUARY 5, 2017</h6>
                    <p>Life is filled with a lot of noise; it’s everywhere and it’s all the time. Too often, the noise you control is masking the noise that is controlling you. If you’re willing to turn down the white noise, you might be surprised what you’ll hear.</p>
                </div>
                <div class="column column-block">
                    <a href="https://player.vimeo.com/video/213078234" class="video-modal-button" data-open="videoModal">
                        <div class="video-container grow-container">
                            <img class="grow" src="<?php echo get_template_directory_uri() ?>/assets/images/honest-to-god.jpg">
                            <img class="play-button" src="<?php echo get_template_directory_uri() ?>/assets/images/play_button.png">
                        </div>
                        <h5>Honest to God</h5>
                    </a>
                    <h6>APRIL 3, 2016</h6>
                    <p>Our most healthy relationships are our most honest relationships. Is God okay with full honesty? In this message, Clay unpacks an overview of King David's collection of Psalms to discover that God doesn't just tolerate our honesty, he celebrates it. </p>
                </div>
                <div class="column column-block">
                    <a href="https://player.vimeo.com/video/212805308" class="video-modal-button" data-open="videoModal">
                        <div class="video-container grow-container">
                            <img class="grow" src="<?php echo get_template_directory_uri() ?>/assets/images/bad-blood.jpg">
                            <img class="play-button" src="<?php echo get_template_directory_uri() ?>/assets/images/play_button.png">
                        </div>
                        <h5>Bad Blood</h5>
                    </a>
                    <h6>SEPTEMBER 27, 2015</h6>
                    <p>Have you ever had a great relationship go bad or a bad relationship that became even worse? In this message, Clay suggests a secret to finding peace about difficult relationships, even when finding peace seems impossible.</p>
                </div>
            </div>
        </div>
    </div>
    
    <div class="reveal" id="videoModal" data-reveal>
        <div id="videoModalContainer" class='embed-container'>
        </div>
        <button class="close-button" data-close aria-label="Close modal" type="button">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>

    <script>
        jQuery('.video-modal-button').on('click', function(event) {
            event.preventDefault();
            built_iframe = '<iframe src="'+ event.currentTarget.href +'?autoplay=1&title=0&byline=0&portrait=0" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>'
            jQuery('#videoModalContainer').html(built_iframe);
        });

        jQuery('#videoModal').on('closed.zf.reveal', function(){ 
            jQuery('#videoModalContainer').html('');
        });
    </script>
</div>