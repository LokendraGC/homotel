<?php 
// Register the custom form tag when CF7 is initialized
add_action( 'wpcf7_init', 'custom_select_room' );

function custom_select_room() {
    // Add a new form tag "select_room" that will call 'custom_select_room_handler' when used
    wpcf7_add_form_tag( 'select_room', 'custom_select_room_handler' );
}

function custom_select_room_handler(){

    // Query for the custom post type 'room'
	$rooms_args = array(
		'post_type'         => 'room',
		'posts_per_page'    => -1,
		'post_status'       => 'publish',
	);

	// Initialize $html before the query check
	$html = '<select name="your_room[]" class="room-type form-control">';
	// $html .= '<option disabled selected data-src ="">Select Room</option>';

	if( $room_datas = get_posts( $rooms_args )){

		foreach( $room_datas as $post ):
			setup_postdata( $post );
			$price = get_field('room_price',$post->ID);
			$guest = get_field('room_capacity',$post->ID);
			$per_what = get_field('per_what',$post->ID);

			// Get the room image
			$image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );

			// Build the option with room details
			$html .= '<option value="' . esc_attr($post->post_title) . '" data-src="' . esc_url($image[0]) . '">'
			. esc_html($post->post_title) . " | " . esc_html( $price ) . " " . esc_html( $per_what ) . " | " . esc_html( $guest ) 
			. '</option>';

		endforeach;
		wp_reset_postdata();
	} else {
		// If no rooms are found
		$html .= '<option disabled>No Rooms available</option>';
	}

	$html .= '</select>';

	return $html;

}
