<?php

get_header(); ?>
    <div class="container-elastic">
    <section id="hero">
        <span><?php _e('Welcome', 'ghquiz'); ?></span>
        <h1><?php _e('Business plus', 'ghquiz'); ?></h1>
        <p><?php _e('Lorem Ipsum is simply dummy text of the printing and typesetting industry
Lorem Ipsum has been the industry\'s standard dummy text ever.', 'ghquiz'); ?></p>
        <a href="#"><?php _e('Read More', 'ghquiz'); ?></a>
        <?php echo do_shortcode('[display_flexslider]'); ?>
    </section>
    <section id="about">
        <h2 class="section-heading">
            <?php _e('About us', 'ghquiz'); ?>
        </h2>
<span class="section-post-heading">
<?php _e('Our short story', 'ghquiz'); ?>
</span>
        <div class="about-text">
            <p><?php echo get_theme_mod('about', '') ?></p>
        </div>
    </section>
    <section id="services">
        <h2 class="section-heading">
            <?php _e('Services', 'ghquiz'); ?>
        </h2>
        <span class="section-post-heading">
            <?php _e('What we are doing', 'ghquiz'); ?>
        </span>
        <div class="service-container">
            <?php $query = new WP_Query(array('post_type' => 'services', 'posts_per_page' => 4)); ?>
            <?php if ($query->have_posts()) : ?>
                <ul class="services-list">
                    <?php while ($query->have_posts()) : $query->the_post(); ?>
                        <li <?php post_class(); ?>>
                            <div class="service-icon">
                                <?php if (has_post_thumbnail()) {
                                    the_post_thumbnail();
                                } ?>
                            </div>
                            <div class="service-title">
                                <a href="<?php the_permalink(); ?>"></a><?php the_title(); ?>
                            </div>
                            <div class="service-text">
                                <?php the_content(); ?>
                            </div>
                        </li>
                    <?php endwhile; ?>
                </ul>
                <?php
            endif; ?>
            <?php wp_reset_query(); ?>
        </div>
        <a href="" class="view-more"><?php _e('View More', 'ghquiz') ?></a>
    </section>
    <section id="clients">
        <h2 class="section-heading">
            <?php _e('Clients', 'ghquiz'); ?>
        </h2>
        <span class="section-post-heading">
            <?php _e('Whats our client says', 'ghquiz'); ?>
        </span>
        <div class="service-container">
            <?php $query = new WP_Query(array('post_type' => 'clients', 'posts_per_page' => 4)); ?>
            <?php if ($query->have_posts()) : ?>
                <ul class="clients-list">
                    <?php while ($query->have_posts()) : $query->the_post(); ?>
                        <li <?php post_class(); ?>>
                            <div class="client-text">
                                <?php the_content(); ?>
                            </div>
                            <div class="client-meta">
                                <div class="client-image">
                                    <?php if (has_post_thumbnail()) {
                                        the_post_thumbnail();
                                    } ?>
                                </div>
                                <h2 class="client-name">
                                    <?php the_title(); ?>
                                </h2>
                                <span class="client-desc">
                                    Description
                                </span>
                            </div>
                        </li>
                    <?php endwhile; ?>
                </ul>
                <?php
            endif; ?>
            <?php wp_reset_query(); ?>
        </div>
        <a href="" class="view-more"><?php _e('View More', 'ghquiz') ?></a>
    </section>

    <section class="news">
        <h2 class="section-heading">
            <?php _e('Clients', 'ghquiz'); ?>
        </h2>
        <span class="section-post-heading">
            <?php _e('Whats our client says', 'ghquiz'); ?>
        </span>
        <?php
        if (have_posts()) :

            if (is_home() && !is_front_page()) : ?>
                <header>
                    <h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
                </header>

                <?php
            endif;

            /* Start the Loop */
            while (have_posts()) : the_post();

                /*
                 * Include the Post-Format-specific template for the content.
                 * If you want to override this in a child theme, then include a file
                 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
                 */
                get_template_part('template-parts/content', get_post_format());
                if (has_post_thumbnail()) {
                    the_post_thumbnail();
                }

            endwhile;

            the_posts_navigation();

        else :

            get_template_part('template-parts/content', 'none');

        endif; ?>
    </section>
    <section id="partners">
        <h2 class="section-heading">
            <?php _e('Partners', 'ghquiz'); ?>
        </h2>
        <span class="section-post-heading">
            <?php _e('Our Great Partners', 'ghquiz'); ?>
        </span>
        <div class="service-container">
            <?php $query = new WP_Query(array('post_type' => 'partners', 'posts_per_page' => 4)); ?>
            <?php if ($query->have_posts()) : ?>
                <ul class="clients-list">
                    <?php while ($query->have_posts()) : $query->the_post(); ?>
                        <li <?php post_class(); ?>>
                            <div class="client-text">
                                <?php the_content(); ?>
                            </div>
                            <div class="client-meta">
                                <div class="client-image">
                                    <?php if (has_post_thumbnail()) {
                                        the_post_thumbnail();
                                    } ?>
                                </div>
                                <h2 class="client-name">
                                    <?php the_title(); ?>
                                </h2>
                            </div>
                        </li>
                    <?php endwhile; ?>
                </ul>
                <?php
            endif; ?>
            <?php wp_reset_query(); ?>
        </div>
    </section>
<?php
get_footer();