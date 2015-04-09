<?php get_header(); ?>

			<div id="content">

				<div id="inner-content" class="wrap clearfix">

					<div id="main" class="wrap clearfix" role="main">
						<div id="main-container" class="twelvecol clearfix">
							<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

								<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix ninecol centered'); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">

									<header class="article-header">
										<div class="post-meta">
											<p>#</p>
											<div id="meta">
												<h1><?php echo the_ID();?></h1>
											</div>
										</div>
										<h1 class="h2"><?php the_title(); ?></h1>
									</header> <!-- end article header -->

									<section class="entry-content clearfix" itemprop="articleBody">
										<?php the_content(); ?>
									</section> <!-- end article section -->

									<footer class="article-footer">
										<?php the_tags('<p class="tags"><span class="tags-title">' . __('Tags:', 'bonestheme') . '</span> ', ', ', '</p>'); ?>

									</footer> <!-- end article footer -->

									<?php comments_template(); ?>

								</article> <!-- end article -->

							<?php endwhile; ?>

							<?php else : ?>

								<article id="post-not-found" class="hentry clearfix">
										<header class="article-header">
											<h1><?php _e("Oops, Post Not Found!", "bonestheme"); ?></h1>
										</header>
										<section class="entry-content">
											<p><?php _e("Uh Oh. Something is missing. Try double checking things.", "bonestheme"); ?></p>
										</section>
										<footer class="article-footer">
												<p><?php _e("This is the error message in the single.php template.", "bonestheme"); ?></p>
										</footer>
								</article>

							<?php endif; ?>
						</div>
					</div> <!-- end #main -->

				</div> <!-- end #inner-content -->

			</div> <!-- end #content -->

<?php get_footer(); ?>