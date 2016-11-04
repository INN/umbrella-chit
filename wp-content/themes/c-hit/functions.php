<?php
function chit_register_sidebars() {
	register_sidebar( array(
		'name' => 'About Page Sponsors',
		'id' => 'about-sponsors',
		'description' => 'The right rail on the about page',
		'before_widget' => '',
		'after_widget' => '',
		'before_title' => '',
		'after_title' => '',
	) );
}
add_action( 'widgets_init', 'chit_register_sidebars' );

//allow admins to add users without requiring email confirmation
function auto_activate_users($user, $user_email, $key, $meta){
  wpmu_activate_signup($key);
  return false;
}
add_filter( 'wpmu_signup_user_notification', 'auto_activate_users', 10, 4);
add_filter( 'wpmu_signup_user_notification', '__return_false' );

function chit_append_podcast_icon( $title, $id = null ) {

   if( has_tag('podcast', $id ) && !is_feed() ){
       return $title . ' <span class="icon icon-headphones"></span>';
   }
    return $title;
}
add_filter( 'the_title', 'chit_append_podcast_icon', 10, 2 );
