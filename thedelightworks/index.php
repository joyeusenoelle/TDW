	<?php get_header(); ?>

	<!-- The Loop -->

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>



		<div class="post">
			<div class="postHead">
				<div class="title">
					<div id="post-<?php the_ID(); ?>" class="postTitleLeft postinfo">
						<a class="title" href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent link to this post"><?php the_title(); ?></a>
					</div>
					<div id="postinfo-<?php the_ID(); ?>" class="postTitleRight postinfo">
						<span class="postDate"><?php the_date(); ?></span><br />
						<!-- span class="postComments"><?php comments_popup_link(__('Leave a comment'),__('1 comment'),__('% comments')); ?></span -->
					</div>
				</div> <!-- close title -->
			</div><!-- close postHead -->

			<div class="postContent">
				<?php the_content('More... &raquo'); ?>
				<?php //if( has_tag('Everyday') || has_tag('commentable') || has_tag('Guest Post') ) { ?>
				<?php comments_template(); ?>
				<?php //} else { ?>
				<!-- div id="indexcomments-<?php the_ID(); ?>" class="museo">
					Please <a href="mailto:nda@thedelightworks.com">email me</a> if you have any questions or comments about this post!
				</div -->
				<?php // } ?>
			</div>
			<!-- ?php comments_template(); ? -->
		</div><!-- Close post -->
		<?php if (ej_cur_post($wp_query) != ej_num_posts($wp_query)): ?>
		<div class="hrule">&nbsp;</div>
		<?php endif; ?>
	<?php endwhile; else: ?>
			<div class="post">
			<div class="postHead">
				<div class="title">
					<div id="post-none" class="postTitleLeft postinfo">
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


		<div class="postnavigation">
		<?php next_posts_link('&laquo; Previous note'); ?>
		<?php previous_posts_link('| Next note &raquo;'); ?>
		</div>

	<?php get_footer(); ?>