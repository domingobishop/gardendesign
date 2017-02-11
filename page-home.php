<?php
/**
 * Template Name: Home
 *
 */
get_header(); ?>

    <main id="main" class="main" role="main">

        <section id="garden-design">
            <?php while (have_posts()) : the_post(); ?>
            <?php if ( has_post_thumbnail() ) {
                $thumbnail_src = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' );
                $bg_style = 'style="background-image: url(' . $thumbnail_src[0] . ');"';
            } else {
                $bg_style = '';
            }
            $feature_text = get_post_meta($post->ID, 'feature-image-text', true);
            $position = get_post_meta($post->ID, 'feature-image-text-position', true);
            if ($feature_text) {
                $feature_text_str = '<div class="feature-quote">' . $feature_text . '</div>';
            } else {
                $feature_text_str = '';
            }
            ?>
            <div class="banner" role="banner" <?php echo $bg_style; ?>>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6 <?php echo $position; ?>">
                            <?php echo $feature_text_str; ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="testimonial">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-lg-offset-2 text-center">
                            <?php the_excerpt(); ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-lg-offset-2">
                                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                                    <div class="entry-header text-center">
                                        <h1>
                                            <?php the_title(); ?>
                                        </h1>
                                    </div>
                                    <div class="entry-content">
                                        <?php the_content(); ?>
                                    </div>
                                </article>
                            <?php endwhile; ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="garden-consulting">
            <?php
            $your_query = new WP_Query( 'pagename=garden-consulting' );
            while ( $your_query->have_posts() ) : $your_query->the_post();
            if ( has_post_thumbnail() ) {
                $thumbnail_src = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' );
                $bg_style = 'style="background-image: url(' . $thumbnail_src[0] . ');"';
            } else {
                $bg_style = '';
            }
            $feature_text = get_post_meta($post->ID, 'feature-image-text', true);
            if ($feature_text) {
                $feature_text_str = '<div class="feature-quote">' . $feature_text . '</div>';
            } else {
                $feature_text_str = '';
            }
            ?>
            <div class="banner" role="banner" <?php echo $bg_style; ?>>
                <?php echo $feature_text_str; ?>
            </div>
            <div class="content">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-lg-offset-2">
                            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                                <div class="entry-header text-center">
                                    <h2>
                                        <?php the_title(); ?>
                                    </h2>
                                </div>
                                <div class="entry-content">
                                    <?php the_content(); ?>
                                </div>
                            </article>
                            <?php
                                endwhile;
                                wp_reset_postdata();
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="why-choose-us">
            <?php
            $your_query = new WP_Query( 'pagename=why-choose-us' );
            while ( $your_query->have_posts() ) : $your_query->the_post();
            if ( has_post_thumbnail() ) {
                $thumbnail_src = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' );
                $bg_style = 'style="background-image: url(' . $thumbnail_src[0] . ');"';
            } else {
                $bg_style = '';
            } ?>
            <div class="banner" role="banner" <?php echo $bg_style; ?>>
            </div>
            <div class="content blue-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-lg-offset-2">
                            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                                <div class="entry-header text-center">
                                    <h2>
                                        <?php the_title(); ?>
                                    </h2>
                                </div>
                                <div class="entry-content">
                                    <?php the_content(); ?>
                                </div>
                            </article>
                            <?php
                            endwhile;
                            wp_reset_postdata();
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="how-we-work">
            <?php
            $your_query = new WP_Query( 'pagename=how-we-work' );
            while ( $your_query->have_posts() ) : $your_query->the_post();
            if ( has_post_thumbnail() ) {
                $thumbnail_src = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' );
                $bg_style = 'style="background-image: url(' . $thumbnail_src[0] . ');"';
            } else {
                $bg_style = '';
            } ?>
            <div class="banner" role="banner" <?php echo $bg_style; ?>>
            </div>
            <div class="content">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-lg-offset-2">
                            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                                <div class="entry-header text-center">
                                    <h2>
                                        <?php the_title(); ?>
                                    </h2>
                                </div>
                                <div class="entry-content">
                                    <?php the_content(); ?>
                                </div>
                            </article>
                            <?php
                            endwhile;
                            wp_reset_postdata();
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="let-us-create">
            <?php
            $your_query = new WP_Query( 'pagename=let-us-create' );
            while ( $your_query->have_posts() ) : $your_query->the_post();
            if ( has_post_thumbnail() ) {
                $thumbnail_src = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' );
                $bg_style = 'style="background-image: url(' . $thumbnail_src[0] . ');"';
            } else {
                $bg_style = '';
            } ?>
            <div class="banner" role="banner" <?php echo $bg_style; ?>>
            </div>
            <div class="content blue-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-lg-offset-2">
                            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                                <div class="entry-content">
                                    <?php the_content(); ?>
                                </div>
                            </article>
                            <?php
                            endwhile;
                            wp_reset_postdata();
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="contact-us">
            <?php
            $your_query = new WP_Query( 'pagename=contact-us' );
            while ( $your_query->have_posts() ) : $your_query->the_post();
            if ( has_post_thumbnail() ) {
                $thumbnail_src = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' );
                $bg_style = 'style="background-image: url(' . $thumbnail_src[0] . ');"'; ?>
                <div class="banner" role="banner" <?php echo $bg_style; ?>>
                </div>
            <?php } else {
                $bg_style = '';
            } ?>
            <div class="content green-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                                <div class="entry-header">
                                    <h2>
                                        <?php the_title(); ?>
                                    </h2>
                                </div>
                                <div class="entry-content">
                                    <?php the_content(); ?>
                                </div>
                            </article>
                            <?php
                            endwhile;
                            wp_reset_postdata();
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main>

<?php get_footer(); ?>