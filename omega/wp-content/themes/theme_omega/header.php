<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <title>Title</title>
    <link href="<?php echo get_template_directory_uri() . '/css/style.css'; ?>" rel="stylesheet">
</head>
<body>
<header class="header-desktop" id="header-scroll">
    <div class="inner">
        <div class="logo">
            <?php
            $custom_logo_id = get_theme_mod('custom_logo');
            $logo = wp_get_attachment_image_src($custom_logo_id, 'full');

            if (has_custom_logo()) {
                echo '<a href="/">' . '<img src="' . esc_url($logo[0]) . '" alt="' . get_bloginfo('name') . '"> ' . '</a>';
            } else {
                echo '<a href="/">' . get_bloginfo('name') . '</a>';
            }
            ?>
        </div>
        <nav class="nav-menu">
            <ul>
                <li><a href="/error.html">What we do</a></li>
                <li><a href="/error.html">Our work</a></li>
                <li><a href="/error.html">Seo insights</a></li>
                <li><a href="/error.html">About us</a></li>
            </ul>
        </nav>
    </div>
</header>
<aside class="mobile-menu" id="menu-open">
    <div class="burger">
        <div class="strip burger-strip">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
    <nav class="nav-menu">
        <ul>
            <li><a href="/error.html">What we do</a></li>
            <li><a href="/error.html">Our work</a></li>
            <li><a href="/error.html">Seo insights</a></li>
            <li><a href="/error.html">About us</a></li>
        </ul>
    </nav>
</aside>
<main>