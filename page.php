<?php get_header(); get_template_part( 'partials/mytemplate' ); ?>

<body>
<main class="content">

    <?php get_sidebar(); ?>

    <?php the_post(); ?>

    <div class="inner">
        <?php if (have_posts()): while (have_posts()): the_post(); ?>

                <?php the_title( '<h1>', '</h1>' ); ?>
                <?php the_content(); ?>

        <?php endwhile; endif; ?>
        <?php get_sidebar(); ?>
        <?php comments_template(); ?>
    </div>

    <?php get_footer(); ?>

</main>

