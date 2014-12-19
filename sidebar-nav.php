	<div class= "sidebar-nav-wrap"><?php if ( is_active_sidebar( 'sidebar-nav' ) ) : ?>

		<?php dynamic_sidebar( 'sidebar-nav' ); ?>

	<?php else : ?>

	<!-- This content shows up if there are no widgets defined in the backend. -->
						
	<div class="alert help">
		<p><?php _e("Please activate some Widgets.", "jointstheme");  ?></p>
	</div>

	<?php endif; ?>
    </div>