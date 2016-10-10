<?php get_header(); ?>

    <body>

<main class="content">

    <div class="wrapper"  id="fadein" style="display: none;">

        <?php get_sidebar(); ?>

        <div class="inner">

            <div class="intro">
                <p>
                    Hello — I am a dreamer, web developer, designer, and musician.
                    My home is in Stockholm, Sweden, but I live in awesome
                    Moscow, Russia with my girlfriend. This site contains some of my
                    recent work and writing — primarily focused on coding and design,
                    or movies and music.
                </p>
                <p>
                    I work with great people in <a href="http://drinkmilkdesign.com">Drink Milk! Studio</a>
                    as the main web developer. More than coffee I love to listen to music. You can find me
                    and my playlists on <a href="http://instagram.com/iamalleksy">Spotify</a>. Sometimes I
                    post photos to <a href="http://instagram.com/iamalleksy">Instagram</a>, some short
                    thoughts to <a href="https://twitter.com/iamalleksy">Twitter</a>, sample code to
                    <a href="https://github.com/swe">GitHub</a>.
                    <!-- and some design works to <a href="https://www.behance.net/iamalleksy">Behance</a>-->
                </p>
                <p>
                    Thanks for visiting!
                </p>
                <img src="<?php echo get_template_directory_uri(); ?>/img/sign.png">
            </div>
            <div class="posts">
                <h3>Recent posts</h3>

                <?php get_template_part('loop'); ?>

                <a href="blog" class="button">All posts</a>

            </div>

        </div>

    </div>
<?php get_footer(); ?>