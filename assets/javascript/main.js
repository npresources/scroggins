jQuery(document).ready(function(){
  jQuery('.menu-button').on('click', function () {
      var menu = jQuery('.nav').slideToggle(400);
      jQuery(this).toggleClass('active');

      jQuery(window).resize(function(){
          var w = jQuery(window).width();
          if(w > 320 && menu.is(':hidden')) {
              menu.removeAttr('style');
          }
      });
  });

  jQuery(document).foundation();
});

/**
 * Handles all form submissions for submitting emails to InfusionSoft.
 *
 * @param $ A reference to the jQuery object.
 */
var scroggins_infusionsoft_handler = function( $ ) {

    // If there's no submit button, then we just duck out.
    if ( 0 === $( '#if-submit' ).length ) {
        return;
    }

    // Otherwise, we handle when the button is clicked.
    $( '#if-submit' ).on( 'click', function( evt ) {

        var should_return = false;
        $( '.infusion-field-input-container[required]' ).each(function() {

            if ( 0 === $.trim( $( this ).val() ).length ) {
                should_return = true;
            }
        });

        if ( should_return ) {
            return;
        }

        if ( ! should_return ) {

            $( '#if-form' ).hide();
            $( '#if-success' )
                .removeClass( 'hide' )
                .show();
        }
    });
};

/**
 * Bootstrap the InfusionSoft handler.
 */
(function( $ ) {

    $(function() {
        scroggins_infusionsoft_handler( $ );
    });
})( jQuery );