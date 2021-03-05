<?php
get_header();

$section_groups = wp_hyperspace::get_ordered_home_page_section_groups();
?>

<section id="sidebar">
    <div class="inner">
        <?php echo wp_hyperspace::create_nav_list($section_groups, true); ?>
    </div>
</section>

<div id="wrapper">

    <section id="main" class="wrapper">
        <div class="inner">
            <?php
            // Start the Loop.
            global $post;
            while ( have_posts() ) : the_post();

                $excerpt = $post->post_excerpt;

                ?>

                <h1 class="major"><?php the_title(); ?></h1>

                <?php if( $excerpt ) { ?>
                    <h4><?php echo $excerpt; ?></h4>
                <?php }; ?>

                <div class="main-image"><?php the_post_thumbnail(); ?></div>


                <?php

                the_content();

            endwhile;
            ?>
        </div>
    </section>

</div>

<?php get_footer(); ?>
