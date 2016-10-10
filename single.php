<?php get_header(); get_template_part( 'partials/mytemplate' ); ?>

<body>
<main class="content">

    <?php get_sidebar(); ?>

    <div class="inner">

        <div class="posts">
            <?php the_post(); ?>
            <?php the_title( '<h1>', '</h1>' ); ?>
            <?php the_content(); ?>

        </div>
    </div>

    <?php get_footer(); ?>

</main>

