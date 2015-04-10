<?php
/*
Template Name: Share your idea
*/
?>

<?php get_header(); ?>

			<div id="content">

				<div id="inner-content" class="wrap clearfix">

						<div id="main" class="clearfix" role="main">
						<div id="main-container" class="tencol clearfix">
							<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
						
							<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article">

								<header class="article-header">

									<h1 class="page-title"><?php the_title(); ?></h1>

								</header> <!-- end article header -->

								<section class="entry-content">
									<?php the_content(); ?>
								</section> <!-- end article section -->

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
												<p><?php _e("This is the error message in the page-custom.php template.", "bonestheme"); ?></p>
										</footer>
									</article>

							<?php endif; ?>	

							<section class="row clearfix">
								<section class="form-container">
									<header>
										<h1 class="form-header">The Form</h1>
										<p>You've made it! Now fill carefully the form</p>
									</header>
									<div class="the-form tencol centered">
										<form>
										<div class="input-group">
											<div class="icon"><i class="icon-user"></i></div>
											<input type="text" placeholder="Name" required>
										</div>
										<div class="input-group">
											<div class="icon"><i class="icon-envelope-alt"></i></div>
											<input type="email" placeholder="Email" required>
										</div>
										<div class="textarea-group">
											<div class="icon"><i class="icon-comment"></i></div>
											<textarea name="missatge" id="missatge" cols="30" rows="10" required></textarea>
										</div>
										<div class="submit-group">
											<button type="submit" id="submit">Send</button>
										</div>
										</form>
									</div>
								</section>
							</section>
						</div>
						</div> <!-- end #main -->

				</div> <!-- end #inner-content -->

			</div> <!-- end #content -->

<?php get_footer(); ?>
