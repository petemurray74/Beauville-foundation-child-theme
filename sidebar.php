	<?php if (is_page_template( 'page-3col.php' )) : ?>
		<div id="sidebar1" class="sidebar large-3 medium-3 columns sidebar-3-pad" role="complementary">
	<?php else : ?>
		<div id="sidebar1" class="sidebar large-4 medium-4 columns sidebar-4-pad" role="complementary">
	<?php endif; ?>	

	<?php if ( is_active_sidebar( 'sidebar1' ) ) : ?>

		<?php dynamic_sidebar( 'sidebar1' ); ?>
		
	<?php endif; ?>	
	
	<?php if ( is_active_sidebar( 'sidebar2' ) ) : ?>

		<?php dynamic_sidebar( 'sidebar2' ); ?>

	<?php endif; ?>

</div>