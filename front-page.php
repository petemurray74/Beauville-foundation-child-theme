<?php get_header(); ?>
			
			<div id="content" class="main-content">
			
				<div id="inner-content" class="row clearfix">
			
				    <div id="main" class="large-7 medium-7 columns" role="main">
				    
					    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					
					    	<?php get_template_part( 'partials/loop', 'frontpage' ); ?>
					    					
					    <?php endwhile; else : ?>
					
					   		<?php get_template_part( 'partials/content', 'missing' ); ?>

					    <?php endif; ?>
			
    				</div> <!-- end #main -->
    
				    <?php get_sidebar('front'); ?>
				    
				</div> <!-- end #inner-content -->
    
			</div> <!-- end #content -->

<?php get_footer(); ?>