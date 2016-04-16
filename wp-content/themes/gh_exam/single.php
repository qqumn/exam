<?php get_header(); ?>
	<img src="http://savepic.net/8028213.png" alt="">
	<div class="wrapper">
		<div class="main-post">
			<?php
			if (have_posts()):
				while (have_posts()):
					the_post();
					?>
					<h2 class="post-title">
						<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
					</h2>
					<a class="posted-date" href="<?php the_permalink(); ?>"><?php echo __('Posted on', 'text_domain'); ?> <?php the_date('F j, Y'); ?></a>
					<a class="feature-image" href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
					<p class="post-description"><?php echo (get_the_content()); ?></p>
				<?php endwhile;
			else: ?>
				<p></p>
				<?php
			endif;
			?>
		</div>
		<div class="social-share">
			<div class="comments-block">
				<h2 class="block-title"><?php echo __('Comments', 'text_domain'); ?></h2>
				<?php comments_template(); ?>
			</div>
		</div>
	</div>

<?php get_footer(); ?>