<?php
$template_dir = get_template_directory_uri();
?>

    <footer id="footer" class="wrapper style1-alt">
        <div class="inner">
            <ul class="menu">
                <li>
                    <?php dynamic_sidebar(__( 'Footer widget', wp_hyperspace::type_name )); ?>
                </li>
                <li>
                    Design: <a href="http://html5up.net">HTML5 UP</a>
                </li>
                <li>
                    Images: <a href="https://unsplash.com/@wolfgang_hasselmann">Wolfgang</a>
                </li>
            </ul>
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
