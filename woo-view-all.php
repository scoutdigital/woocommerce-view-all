<?php
add_action( 'woocommerce_before_shop_loop', 'woocommerce_show_all', 20 );

//Add link to shop page to view all products
function woocommerce_view_all() {
	global $woocommerce; 
		if (is_paged()) : ?> 
		    <div class="view_all_option"><a href="../?view=all">View All</a></div>
		<?php else: ?>
		   <div class="view_all_option"><a href="?view=all">View All</a></div>
		<?php endif; 
}

//Modify query to view all if link has been clicked
add_action( 'pre_get_posts', 'sd_view_all' );
function sd_view_all( $query ) {
	if($_GET['view'] === 'all'){
		$query->set( 'posts_per_page', '-1' );
		$paged = false;
	}

}
?>