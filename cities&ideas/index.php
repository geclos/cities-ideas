<?php get_header(); ?>

			<div id="content">

				<div id="inner-content" class="wrap clearfix">

					<div id="featured" class="row clearfix" role="featured">
						<article class="twelvecol clearfix">
							<h1 class="featured-header">Welcome aboard!</h1>
							<p><span class="highlight">Cities & Ideas</span>, a Barcelona Forum project, is a showcase of good ideas for the future of 
							cities. Its purpose is exploring new ways of development that <span class="highlight">include citizens</span>. Your 
							ideas will be shown to the Mayors, and awards are waiting for the best.<br>
							</p>
							<p class="share"><span class="highlight">We want to hear from you!</span></p>
							<form id="button-container" action="#">
								<input type="submit" value="Share" id="featured-button">
							</form>
						</article>
					</div>

						<div id="main" class="wrap clearfix" role="main">
							
							<div id="main-container" class="tencol clearfix">
								<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

								<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article">

									<header class="article-header">
										<div class="post-meta">
											<p>#</p>
											<div id="meta">
												<h1><?php echo the_ID();?></h1>
											</div>
											<div id="read">
												<p><a href="<?php the_permalink();?>" class="">Read</a></p>
											</div>
										</div>
										<h1 class="h2"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
									</header> <!-- end article header -->

									<section class="entry-content clearfix">
										<p class="excerpt <?php echo the_ID();?>"><?php echo get_the_excerpt(); ?></p>
									</section> <!-- end article section -->

									<footer class="article-footer">
										<div class="article-footer-sociallinks">
											
											<!-- Facebook button -->
											<div class="fb-like" data-href="<?php the_permalink();?>" data-send="false" data-layout="button_count" data-width="450" data-show-faces="true" data-font="arial"></div>
											<!-- end Facebook button-->
											
											<!-- twitter button-->
											<a href="https://twitter.com/share" class="twitter-share-button" data-url="<?php the_permalink();?>" data-text="<?php the_title_attribute();?>">Tweet</a>
											<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>	
											<!--end twitter button-->
										</div>
										<div class="separator"></div>
									</footer> <!-- end article footer -->

									<?php // comments_template(); // uncomment if you want to use them ?>

								</article> <!-- end article -->

								<?php endwhile; ?>

										<?php if (function_exists('bones_page_navi')) { ?>
												<?php bones_page_navi(); ?>
										<?php } else { ?>
												<nav class="wp-prev-next">
														<ul class="clearfix">
															<li class="prev-link"><?php next_posts_link(__('&laquo; Older Entries', "bonestheme")) ?></li>
															<li class="next-link"><?php previous_posts_link(__('Newer Entries &raquo;', "bonestheme")) ?></li>
														</ul>
												</nav>
										<?php } ?>

								<?php else : ?>

										<article id="post-not-found" class="hentry clearfix">
												<header class="article-header">
													<h1 class=""><?php _e("Oops, Post Not Found!", "bonestheme"); ?></h1>
											</header>
												<section class="entry-content">
													<p><?php _e("Uh Oh. Something is missing. Try double checking things.", "bonestheme"); ?></p>
											</section>
											<footer class="article-footer">
													<p><?php _e("This is the error message in the index.php template.", "bonestheme"); ?></p>
											</footer>
										</article>

								<?php endif; ?>
							</div><!-- end #main-container-->
						</div> <!-- end #main -->

				</div> <!-- end #inner-content -->

			</div> <!-- end #content -->

<?php get_footer(); ?>
