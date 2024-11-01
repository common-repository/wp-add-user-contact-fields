<?php

// Register User Contact Methods
function wpaucf_add_user_contact_methods( $user_contact_method ) {

	$user_contact_method['address'] = __( 'Address', 'wp-add-user-contact-fields' );
	$user_contact_method['city'] = __( 'City', 'wp-add-user-contact-fields' );
	$user_contact_method['country'] = __( 'Country', 'wp-add-user-contact-fields' );
	$user_contact_method['tel'] = __( 'Tel', 'wp-add-user-contact-fields' );
	$user_contact_method['fax'] = __( 'Fax', 'wp-add-user-contact-fields' );
    $user_contact_method['facebook'] = __( 'Facebook Username', 'wp-add-user-contact-fields' );
	$user_contact_method['twitter'] = __( 'Twitter Username', 'wp-add-user-contact-fields' );
	$user_contact_method['gplus'] = __( 'Google Plus ID', 'wp-add-user-contact-fields' );
	$user_contact_method['skype'] = __( 'Skype Username', 'wp-add-user-contact-fields' );

	return $user_contact_method;

}
add_filter( 'user_contactmethods', 'wpaucf_add_user_contact_methods' );
