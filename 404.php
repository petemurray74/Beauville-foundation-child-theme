<?php get_header(); ?>
			
			<div id="content">

				<div id="inner-content" class="row clearfix">
			
					<div id="main" class="large-6 medium-6 columns first clearfix" role="main">

						<article id="post-not-found" class="hentry clearfix">
						
							<header class="article-header">
								<h1><?php _e("Page Not Found", "jointstheme"); ?></h1>
							</header> <!-- end article header -->
					
							<section class="entry-content">
								
                                <h3><?php _e("Visit these popular pages", "jointstheme"); ?></h3>
								<ul>
								<li><?php _e("<a href='/'>Home</a>", "jointstheme"); ?></li>
								<li><?php _e("<a href='http://www.beauvillearts.com/musical-theatre-beauville'>Musical Theatre @ Beauville</a>", "jointstheme"); ?></li>
								<li><?php _e("<a href='http://www.beauvillearts.com/rock-academy'>Rock Academy</a>", "jointstheme"); ?></li>
								<li><?php _e("<a href='http://www.beauvillearts.com/hip-hop-and-commercial-dance'>Hip Hop and Commcercial Dance</a>", "jointstheme"); ?></li>
								<li><?php _e("<a href='http://www.beauvillearts.com/advanced-songwriting-studio-recording'>Advanced Songwriting & Studio Recording</a>", "jointstheme"); ?></li>
								
								</ul>
								
							</section> <!-- end article section -->

							<section class="search">
							<h3><?php _e("Or search", "jointstheme"); ?></h3>
							    <p><?php get_search_form(); ?></p>
							</section> <!-- end search section -->
						
							<footer class="article-footer">
							</footer> <!-- end article footer -->
					
						</article> <!-- end article -->
			
					</div> <!-- end #main -->

				</div> <!-- end #inner-content -->
    
			</div> <!-- end #content -->

<?php get_footer(); ?>