<?php get_header(); ?>

	<?php include (TEMPLATEPATH . '/featured-posts.php'); ?>

	<div class="clearfix"></div>

	<div id="content">

		<div id="posts">

			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

				<div class="single-post" id="post-<?php the_ID(); ?>"> 

					<div class="single-post-image"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>"><?php get_first_image(); ?></a></div>
					<div class="single-post-text">

						<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h2>
						<div class="single-post-content"><?php limits2(200, ""); ?></div>

						<div class="meta">
							Published on: <span><?php the_time('M d Y'); ?></span><br />
							By: <span><?php the_author() ?></span><br />
							<?php comments_popup_link('Leave a Comment', '1 Comment', '% Comments'); ?>
						</div><!--meta-->

					</div><!-- single-post-text -->
					<div class="clearfix"></div>

				</div><!-- single-post -->

				<?php endwhile; ?>

				<div class="posts-navigation">
					<div class="posts-navigation-next"><?php next_posts_link('Older Posts &raquo;') ?></div>
					<div class="posts-navigation-prev"><?php previous_posts_link('&laquo; Newer Posts') ?></div>
					<div class="clearfix"></div>
				</div>

			<?php endif; ?>

		</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
