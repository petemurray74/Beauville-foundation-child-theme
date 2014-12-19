<?php
/*
Template Name: Three columns
*/
?>

<?php get_header(); ?>
			
			<div id="content" class="main-content">
			
				<div id="inner-content" class="row clearfix">
			
				    <div id="main" class="large-6 medium-6 large-push-3 medium-push-3 columns first clearfix" role="main">

					    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					
					    	<?php get_template_part( 'partials/loop', 'page' ); ?>
					    					
					    <?php endwhile; else : ?>
					
					   		<?php get_template_part( 'partials/content', 'missing' ); ?>

					    <?php endif; ?>
	
				    </div> <!-- end #main -->
					<div id="subnav" class="large-3 large-pull-6 medium-3 medium-pull-6 columns clearfix" role="main">
					<?php get_sidebar('nav'); ?>
					</div> <!-- end #subnav -->
    
				    <?php get_sidebar(); ?>
				    
				</div> <!-- end #inner-content -->
    
			</div> <!-- end #content -->

<?php get_footer(); ?>
