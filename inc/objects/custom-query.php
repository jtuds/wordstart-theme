<?php // Set up the query. This one gets posts which are children of the current post/page ('post_parent' => $post->ID)
	$types      = array('post_type_name_to_query');
	$args     	= array('post_type'=>$types,'posts_per_page'=>-1, 'orderby'=>'menu_order', 'order'=>'ASC', 'post_parent' => $post->ID);
	$query      = new WP_Query($args); 
?>

<?php // Set up the query loop
	if($query->have_posts()): ?>
		<?php while($query->have_posts()): $query->the_post(); ?>

		<!-- Do stuff here -->

		<?php endwhile; ?>
	<?php endif; ?>
<?php wp_reset_postdata(); ?>