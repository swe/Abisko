<?php get_header(); ?>

    <body>

<main class="content">

    <div class="wrapper" id="fadein" style="display: none;">

        <?php get_sidebar(); ?>

        <div class="inner">

            <div class="intro">
                <p>
                    Hello — I am a dreamer, web developer, designer, and musician.
                    My home is in Stockholm, Sweden. This site contains some of my
                    recent work and writing — primarily focused on coding and design,
                    or movies and music.
                </p>
                <p>
                    If you want to change this text, go to Appearance -> Editor -> Main Index Template and change all you want.
                </p>
                <p>
                    Or you can create new page and make it index.
                </p>

            </div>
            <div class="posts">
                <h3>Recent posts</h3>

                <?php get_template_part('loop'); ?>

                <a href="blog" class="button">All posts</a>

            </div>

        </div>

    </div>
<?php get_footer(); ?>