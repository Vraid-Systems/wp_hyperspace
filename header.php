<!DOCTYPE HTML>
<?php
$blog_title = get_bloginfo('name');
$template_dir = get_template_directory_uri();
?>
<html <?php language_attributes(); ?>>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black" />

    <title><?php echo $blog_title; ?></title>

    <link href="<?php echo $template_dir; ?>/assets/css/main.css" rel="stylesheet" />
    <noscript><link rel="stylesheet" href="<?php echo $template_dir; ?>/assets/css/noscript.css" /></noscript>

    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
