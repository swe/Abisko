<?php
$args = array( 'posts_per_page' => 3, 'category' => 1 );

$myposts = get_posts( $args );
foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
    <a href="<?php the_permalink(); ?>" class="blog-post"><h1><?php the_title(); ?></h1><time><?php the_time('F j, Y'); ?></time></a>
<?php endforeach;
wp_reset_postdata();?>