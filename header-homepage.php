<?php
  get_header();

  $section_groups = wp_hyperspace::get_ordered_home_page_section_groups();
?>
<section id="sidebar">
    <div class="inner">
        <?php echo wp_hyperspace::create_nav_list($section_groups, true); ?>
    </div>
</section>

<div id="wrapper"><?php // start Wrapper

    $section = $section_groups[0]['post'];
    $content = wp_hyperspace::get_excerpt_or_content( $section );
    echo wp_hyperspace::apply_intro_section_template($section->post_name, 'style1 intro',  $content);

?>
