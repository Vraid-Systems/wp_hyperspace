<?php
$template_dir = get_template_directory_uri();
?>

    <footer id="footer" class="wrapper style1-alt">
        <div class="inner">
            <?php dynamic_sidebar(__( 'Footer widget', wp_hyperspace::type_name )); ?>
        </div>
    </footer>

    <script src="<?php echo $template_dir; ?>/assets/js/jquery.min.js"></script>
    <script src="<?php echo $template_dir; ?>/assets/js/jquery.scrollex.min.js"></script>
    <script src="<?php echo $template_dir; ?>/assets/js/jquery.scrolly.min.js"></script>
    <script src="<?php echo $template_dir; ?>/assets/js/browser.min.js"></script>
    <script src="<?php echo $template_dir; ?>/assets/js/breakpoints.min.js"></script>
    <script src="<?php echo $template_dir; ?>/assets/js/util.js"></script>
    <script src="<?php echo $template_dir; ?>/assets/js/main.js"></script>

    <?php wp_footer(); ?>

    </body>

</html>
