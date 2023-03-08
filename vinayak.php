<? php
/*
* Plugin Name: vinayak
* Plugin URI: https://thewebdecor.in
* Author: Vinayak
* Author URI: https://thewebdecor.in
* Description:Simple Post Like & Dislike System
*/

function my_publish_send_mail(){
    global $post;
    $author = $post->post_author; /* Post author ID. */
    $name = get_the_author_meta( 'display_name', $author );
    $email = get_the_author_meta( 'user_email', $author );
    $title = $post—>post_title;
    $permalink = get_permalink( $ID );
    $edit = get_edit_post_link( $ID, '' );
    $to[] = sprintf( '&s <%s>', $name, $email );
    $subject = sprintf( 'Published: %s', $title );
    $message = sprintf ('Congratulations, %s! Your article “%s” has been published.' . "\n\n", $name, $title );
    $message .= sprintf( 'View: %s', $permalink );
    $headers[] = '';
    wp_mail( $to, $subject, $message, $headers );
}
add_action( 'publish_post', 'my_publish_send_mail' );
    
    
    
    // function my_like_filter_example( $words ) {
    // return 10;
    // }
    // add_filter('excerpt_length', 'my_like_filter_example');
    
