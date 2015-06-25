<?php get_header(); ?>
			
			<div id="content">

				<div id="inner-content" class="row clearfix">
			
					<div id="main" class="large-6 medium-6 columns first clearfix" role="main">

						<article id="post-not-found" class="hentry clearfix">
						
							<header class="article-header">
								<h1><?php _e("Page Not Found", "jointstheme"); ?></h1>
							</header> <!-- end article header -->
					
							<section class="entry-content">
								<h3><?php _e("We couldn't find the page you were looking for. Try a search or return to the <a style='text-decoration:underline' href='/'>home page</a>", "jointstheme"); ?></h3>
                                <h3><?php _e("", "jointstheme"); ?></h3>
							</section> <!-- end article section -->

							<section class="search">
							    <p><?php get_search_form(); ?></p>
							</section> <!-- end search section -->
						
							<footer class="article-footer">
							</footer> <!-- end article footer -->
					
						</article> <!-- end article -->
			
					</div> <!-- end #main -->

				</div> <!-- end #inner-content -->
    
			</div> <!-- end #content -->

<?php get_footer(); ?>