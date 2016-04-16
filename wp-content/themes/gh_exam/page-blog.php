<?php
/**
 * Template Name: blog
 */

get_header(); ?>
    <div class="wrapper">
        <div class="blog-page">
            <div class="page-info">
                <h2> <?php the_title(); ?></h2>
                <p> <?php echo get_page($page)->post_content;  ?></p>
                <?php echo get_the_post_thumbnail(); ?>
            </div>

            <?php $query = new WP_Query(array('post_type' => 'post', 'posts_per_page' => 4)); ?>

            <?php if ($query->have_posts()) : ?>
                <ul class="blog-posts-list">
                    <?php while ($query->have_posts()) : $query->the_post(); ?>
                        <li <?php post_class(); ?>>
                            <div class="user-avatar">
                                <?php echo get_avatar( $query); ?>
                                <a class="posted-date" href="<?php the_permalink(); ?>"> Posted by <?php the_author(); ?> , <?php the_time('F- j- Y'); ?></a>
                            </div>
                            <h3 class="post-title"><a href="<?php the_permalink(); ?>"></a><?php the_title(); ?></h3>
                            <div class="post-image"><?php if (has_post_thumbnail()) { the_post_thumbnail(); } ?></div>
                            <div class="post-content">
                                <?php echo wp_trim_words(get_the_content(), 100); ?>
                                <a class="read-more" href="<?php the_permalink(); ?>">
                                    <?php echo __('Read more', 'text_domain'); ?>
                                </a>
                            </div>
                        </li>
                    <?php endwhile; ?>
                </ul>
                <?php
            endif; ?>
            <?php wp_reset_query(); ?>
        </div>
    </div>
<?php
get_footer();