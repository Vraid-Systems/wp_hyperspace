<?php
get_header();

$section_groups = wp_hyperspace::get_ordered_home_page_section_groups();

$uri = $_SERVER['REQUEST_URI'] ;
$decoded_uri = urldecode($uri);
$escaped_html_uri = esc_html($decoded_uri);

if($uri !== $decoded_uri ) $uri_is_encoded = true;
?>

<section id="sidebar">
    <div class="inner">
        <?php echo wp_hyperspace::create_nav_list($section_groups, false); ?>
    </div>
</section>

<div id="wrapper">

    <section id="main" class="wrapper">
        <div class="inner">
            <h1 class="major">404</h1>
            <p>The requested resource
                <code>
                    <?php
                    echo $escaped_html_uri;
                    ?>
                </code>
                does not exist. <br/>
                Please use one of these links:
            </p>
            <?php echo wp_hyperspace::create_nav_list($section_groups, false); ?>
        </div>
    </section>

</div>

<?php get_footer(); ?>
