	<?php get_header(); ?>

	<!-- The Loop -->

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<div class="post">
			<div class="postHead">
				<div class="title">
					<div id="post-<?php the_ID(); ?>" class="postTitleLeft postinfo">
						<a class="title" href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent link to this post"><?php the_title(); ?></a>
					</div>
				</div> <!-- close title -->
			</div><!-- close postHead -->

			<div class="postContent">
				<?php the_content('More... &raquo'); ?>
			</div>
		</div><!-- Close post -->
	<?php endwhile; else: ?>
			<div class="post">
			<div class="postHead">
				<div class="title">
					<div id="post-none" class="postTitleLeft postinfo title">
						<a href="<?php bloginfo('url');?>" class="title">Lost at sea?</a>
					</div>
				</div>
			</div>

			<div class="postContent">
				<p>No land in sight!</p>
				<p>Better <a href="<?php bloginfo('url'); ?>">consult the charts</a>!</p>
			</div>
		</div>

	<?php endif; ?>


<?php get_footer(); ?>