<?php get_header(); ?>
	<img src="http://savepic.net/8028213.png" alt="">
	<div class="wrapper">
		<div class="main-post">
			<?php
			if (have_posts()):
				while (have_posts()):
					the_post();
					?>
					<div class="user-avatar">
						<?php echo get_avatar( $query); ?>
					</div>
					<h3 class="post-title"><a href="<?php the_permalink(); ?>"></a><?php the_title(); ?></h3>
					<a class="posted-date" href="<?php the_permalink(); ?>"> Posted by <?php the_author(); ?> , <?php the_time('F- j- Y'); ?></a>
					<div class="post-image"><?php if (has_post_thumbnail()) { the_post_thumbnail(); } ?></div>
					<div class="post-content">
						<?php echo get_the_content(); ?>
					</div>
				<?php endwhile;
			else: ?>
				<p></p>
				<?php
			endif;
			?>
		</div>
<!--		<div class="social-share">-->
<!--			<div class="comments-block">-->
<!--				<h2 class="block-title">--><?php //echo __('Comments', 'text_domain'); ?><!--</h2>-->
<!--				--><?php //comments_template(); ?>
<!--			</div>-->
<!--		</div>-->
	</div>

<?php get_footer(); ?>