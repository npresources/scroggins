;(function( $ ) {
	'use strict';

	/**
	 * Determines if the specified email address is valid.
	 *
	 * @param  string  email The email address to evaluate.
	 * @return boolean       True if the email appears valid; otherwise, false.
	 */
	var _validate_email = function( email ) {

    	var email_regex = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;

		return email_regex.test( email );
	};

	/**
	 * Determines if the event form is invalid based on if the input fields are
	 * populated.
	 *
	 * @return TODO
	 */
	var _invalid_form = function() {
		console.log( 'invalid-form' );
		$( '.infusion-field-input-container' ).each(function() {

			// Attempt to validate the email form.
			if ( 'inf_field_Email' === $( this ).attr( 'id' ) ) {
				var result = _validate_email( $( this ).val() );
				console.log( result );
			}
		});

		return true;
	};

	/**
	 * Hides any errors that are currently visible to show the user the form is being
	 * submitted.
	 */
	var _hide_errors = function() {
		// TODO
	}

	/**
	 * Displays the error messages from Foundation in the markup if the input
	 * for the given element isn't valid.
	 */
	var _display_errors = function() {
		console.log( 'This is when errors will be displayed.' );
	};

	$(function() {

		$( '#submit-event' ).on( 'click', function( evt ) {
			console.log( 'clicked' );
			if ( _invalid_form() ) {

				evt.preventDefault();
				_display_errors();
			} else {
				_hide_errors();
			}
		})
	});
})( jQuery );