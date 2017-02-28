<?php get_header(); ?>

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
    <div class="page-banner" role="banner" <?php echo $bg_style; ?>>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6 <?php echo $position; ?>">
                    <?php echo $feature_text_str; ?>
                </div>
            </div>
        </div>
    </div>
    <main id="main" class="main" role="main">
        <div id="content" class="content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                                <div class="entry-header">
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
    </main>


<?php get_footer(); ?>