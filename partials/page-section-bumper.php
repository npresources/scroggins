<div id="event-bumper" class="video-banner large-12 medium-12 small-12">
    <video id="event-bumper-video" src="<?php echo get_template_directory_uri() ?>/assets/video/event-promo.mp4" poster="<?php echo get_template_directory_uri() ?>/assets/images/video-still.jpg" preload="auto">
	</video>
</div><!-- #event-bumper -->
<script>
;jQuery(document).ready(function($) {
    $("#event-bumper-video").hover(
        function toggleControls() {
            if (this.hasAttribute("controls")) {
                this.removeAttribute("controls");
            } else {
                this.setAttribute("controls", "controls");
            }
        }
    );
});
</script>
