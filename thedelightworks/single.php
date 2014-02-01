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
					</div>
				</div> <!-- close title -->
				<?php if (current_user_can('administrator')) { ?>
				<div class="editlink" style="font-size: 0.8em; text-align: center;">
					<a href="/wp-admin/post.php?post=<?php the_ID(); ?>&action=edit" target="_blank">
						Edit this post
					</a>
				</div>
				<?php } ?>
			</div><!-- close postHead -->

			<div class="postContent">
				<?php the_content('More... &raquo'); ?>
				<?php //if( has_tag('Everyday') || has_tag('commentable')  || has_tag('Guest Post')) { ?>
				<a name="comments">&nbsp;</a>
				<?php comments_template(); ?>
				<?php //} else { ?>
				<!-- div id="indexcomments-<?php the_ID(); ?>" class="museo">
					Please <a href="mailto:nda@thedelightworks.com">email me</a> if you have any questions or comments about this post!
				</div -->
				<?php //} ?>
				<div class="postnavigation">
					<?php previous_post_link('&laquo; <strong>%link</strong>'); ?>
					<?php next_post_link('&sect; <strong>%link</strong> &raquo;'); ?>
				</div>
				<!-- ?php comments_template(); ? -->
		</div>
		</div><!-- Close post -->
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

<?php get_footer(); ?>