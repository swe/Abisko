<?php get_header(); ?>
<body>
<main class="content">

    <?php get_sidebar(); ?>

    <?php the_post(); ?>

    <div class="inner">
        <div class="post-body">
            <div class="post-text">
                <h3 class="post-header"><?php the_title(); ?></h3>

                <?php the_content(); ?>

            </div>

            <div class="post-img">
                <div class="fix">
                    <?php echo get_the_post_thumbnail( $id, 'medium', array('class' => 'wp-post-image') ); ?>

                    <p class="img-header">

                    </p>

                </div>
            </div>

        </div>

        <div class="post-footer">
            <a href="../../blog" class="button">Back to all posts</a>
        </div>
    </div>

    <?php get_footer(); ?>

</main>
