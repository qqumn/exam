<?php

get_header(); ?>
    <div class="container-elastic">
    <section id="hero">
        <?php echo do_shortcode('[WPRS-SLIDER]'); ?>
        <div class="welcome-block">
            <span><?php _e('Welcome', 'ghquiz'); ?></span>
            <h1><?php _e('Business plus', 'ghquiz'); ?></h1>
            <p><?php _e('Lorem Ipsum is simply dummy text of the printing and typesetting industry
Lorem Ipsum has been the industry\'s standard dummy text ever.', 'ghquiz'); ?></p>
            <a href="#" class="read-more-hero"><?php _e('Read More', 'ghquiz'); ?></a>
        </div>
    </section>
    <section id="about-us" class="about-us">
        <div class="container">
            <h2 class="section-title">
                <?php _e('About us', 'ghquiz'); ?>
            </h2>
            <span class="section-description">
                <?php _e('Our short story', 'ghquiz'); ?>
            </span>
            <div class="page-info">
                <p><?php echo get_theme_mod('about-us-text', ''); ?></p>
                <a href="#" class="read-more"> <?php _e('Read more', 'ghquiz'); ?></a>
            </div>
        </div>
    </section>
    <section id="services" class="services">
        <div class="container">
            <h2 class="section-title">
                <?php _e('Services', 'ghquiz'); ?>
            </h2>
            <span class="section-description">
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
                                <div class="sevice-info">
                                    <div class="service-title">
                                        <a href="<?php the_permalink(); ?>"></a><?php the_title(); ?>
                                    </div>
                                    <div class="service-text">
                                        <?php the_content(); ?>
                                    </div>
                                </div>
                            </li>
                        <?php endwhile; ?>
                    </ul>
                    <?php
                endif; ?>
                <?php wp_reset_query(); ?>
                <a href="" class="view-more"><?php _e('View More', 'ghquiz') ?></a>
            </div>
        </div>
    </section>
    <section id="clients" class="clients">
        <div class="container">
            <h2 class="section-title">
                <?php _e('Clients', 'ghquiz'); ?>
            </h2>
        <span class="section-description">
            <?php _e('Whats our client says', 'ghquiz'); ?>
        </span>
            <div class="clients-container">
                <?php $query = new WP_Query(array('post_type' => 'clients', 'posts_per_page' => 4)); ?>
                <?php if ($query->have_posts()) : ?>
                    <ul class="clients-list">
                        <?php while ($query->have_posts()) : $query->the_post(); ?>
                            <li <?php post_class(); ?>>
                                <p class="client-text">
                                    <?php the_content(); ?>
                                </p>
                                <div class="client-meta">
                                    <div class="client-image">
                                        <?php if (has_post_thumbnail()) {
                                            the_post_thumbnail();
                                        } ?>
                                    </div>
                                    <div class="client-info">
                                        <h2 class="client-name">
                                            <?php the_title(); ?>
                                        </h2>
                                        <span class="client-desc">
                                            <?php echo get_post_meta( get_the_ID(), 'profession', true); ?>
                                        </span>
                                    </div>
                                </div>
                            </li>
                        <?php endwhile; ?>
                    </ul>
                    <?php
                endif; ?>
                <?php wp_reset_query(); ?>
            </div>
        </div>
    </section>
    <section class="news">
        <div class="container">
            <h2 class="section-title">
                <?php _e('News', 'ghquiz'); ?>
            </h2>
        <span class="section-description">
            <?php _e('From our blog', 'ghquiz'); ?>
        </span>
            <div class="service-container">
                <?php $query = new WP_Query(array('post_type' => 'post', 'posts_per_page' => 4)); ?>
                <?php $full_post = false; ?>
                <?php if ($query->have_posts()) : ?>
                    <ul class="news-list">
                        <?php while ($query->have_posts()) : $query->the_post(); ?>
                            <?php if ($full_post == false) { ?>
                                <li <?php post_class('main-news'); ?>>
                                    <div class="news-info">
                                        <a class="posted-date" href="<?php the_permalink(); ?>"><span class="day"><?php the_time('j'); ?></span><?php the_time('F-Y'); ?></a>
                                        <a class="comments-icon" href="<?php the_permalink(); ?>"><span class="fa fa-comments-o"></span><?php comments_number( 'No com', '1 Com', '% Coms' ); ?>.</a>
                                        <a class="view-icon" href="<?php the_permalink(); ?>"><span class="fa fa-eye"></span>19 Views</a>
                                    </div>
                                    <div class="post-info">
                                        <div class="post-image"><?php if (has_post_thumbnail()) { the_post_thumbnail(); } ?></div>
                                        <h3 class="post-title">
                                            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                        </h3>
                                        <div class="post-content">
                                            <?php echo wp_trim_words(get_the_content(), 30); ?>
                                        </div>
                                    </div>
                                </li>
                                <?php $full_post = true ?>
                            <?php } else { ?>
                                <li <?php post_class(); ?>>
                                    <h3 class="post-title">
                                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                    </h3>
                                    <a class="posted-date" href="<?php the_permalink(); ?>"><?php the_time('j-F-Y'); ?></a>
                                    <div class="post-content">
                                        <?php echo wp_trim_words(get_the_content(), 20); ?>
                                    </div>
                                </li>
                            <?php } ?>
                        <?php endwhile; ?>
                        <a class="read-more" href="<?php the_permalink(); ?>">
                            <?php echo __('View more', 'text_domain'); ?>
                        </a>
                    </ul>
                    <?php
                endif; ?>
                <?php wp_reset_query(); ?>
            </div>
        </div>
    </section>
    <section id="partners" class="partners">
        <div class="container">
            <h2 class="section-title">
                <?php _e('Partners', 'ghquiz'); ?>
            </h2>
            <span class="section-description">
                <?php _e('Our Great Partners', 'ghquiz'); ?>
            </span>
            <div class="partners-container">
                <?php $query = new WP_Query(array('post_type' => 'partners', 'posts_per_page' => 4)); ?>
                <?php if ($query->have_posts()) : ?>
                    <ul class="partners-list">
                        <?php while ($query->have_posts()) : $query->the_post(); ?>
                            <li <?php post_class(); ?>>
                                <div class="partners-text">
                                    <?php the_content(); ?>
                                </div>
                                <div class="partners-meta">
                                    <div class="client-image">
                                        <?php if (has_post_thumbnail()) {
                                            the_post_thumbnail();
                                        } ?>
                                    </div>
                                </div>
                            </li>
                        <?php endwhile; ?>
                    </ul>
                    <?php
                endif; ?>
                <?php wp_reset_query(); ?>
            </div>
        </div>
    </section>
<?php
get_footer();