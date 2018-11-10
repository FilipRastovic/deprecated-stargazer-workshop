<?php
/**
 * Template Name: Home Page
 *
 * @package stargazer-workshop
 */

get_header();
?>


Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias laboriosam porro beatae dolorem repellat, optio assumenda at cupiditate reiciendis quia, commodi quibusdam ratione illo, quam vitae est ipsam perspiciatis architecto!
<h2>Recent Posts</h2>
<ul>
<?php
    $args = array( 'numberposts' => '5' );
    $recent_posts = wp_get_recent_posts( $args );

    foreach( $recent_posts as $recent ){
		echo 
		'<li> ' . get_the_post_thumbnail($recent["ID"],'thumbnail') . '
		<a href="' . get_permalink($recent["ID"]) . '" title="Look '.esc_attr($recent["post_title"]).'" >' .   $recent["post_title"].'</a> 
		</li> ';
    }
?>
</ul>






<?php
get_sidebar();
get_footer();
