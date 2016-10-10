<?php

/* Template Name: Archive Page */

get_header(); ?>

<main class="content">

    <?php get_sidebar(); ?>

    <div class="inner">

        <div class="posts">

            <h3 class="blog-post">Blog</h3>

            <?php get_template_part('loop-archive'); ?>

        </div>
    </div>

    <?php get_footer(); ?>

</main>