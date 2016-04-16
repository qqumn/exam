<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Geekhub-exam
 */

get_header(); ?>

    <div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">
            <!-- LOGO -->
            <h1 class="logo-wrapper">
                <a class="logo" href="<?php echo home_url(); ?>">
                    <?php if (get_theme_mod('geekhub_logo')) :
                        echo '<img src="' . esc_url(get_theme_mod('geekhub_logo')) . '">';
                    else:
                        echo get_bloginfo('name') . '<span>' . get_bloginfo('description') . '</span>';
                    endif; ?>
                </a>
            </h1>
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
                            <a class="posted-date" href="<?php the_permalink(); ?>"> Posted on <?php the_date('F j, Y'); ?></a>
                            <a class="feature-image" href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
                            <p class="post-description"><?php echo wp_trim_words(get_the_content(), 100); ?></p>
                            <a class="read-more" href="<?php the_permalink(); ?>">
                                <span class="fa fa-arrow-right"></span>
                                <?php echo __('Read more', 'text_domain'); ?>
                            </a>
                        <?php endwhile;
                    else: ?>
                        <p></p>
                        <?php
                    endif;
                    ?>
                    <div class="pagination">
                        <?php the_post_navigation( array(
                            'next_text' => 'Next post: %title',
                            'prev_text' => 'Previous post: %title',
                        ) );
                        ?>
                    </div>
                </div>
            </div>
            <!--Social media icon-->
            <?php my_social_media_icons(); ?>
            <!--Copyright-->
            <div class="copyright">
            <?php
            if (get_theme_mod('hide_copyright') == '') { ?>
               <span class="design-sign"><?php  echo __('Designed by ', 'text_domain'); ?></span>
                <?php echo get_theme_mod('copyright_year' . '') . ' '; ?>
                <a href="<?php the_permalink(); ?>"><?php echo get_theme_mod('copyright_name', '') . ' '; ?></a>
            <?php }
            ?>
            </div>
        </main><!-- #main -->
    </div><!-- #primary -->

<?php
get_footer();
