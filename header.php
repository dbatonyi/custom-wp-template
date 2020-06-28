<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php wp_head(); ?>
    <title>Mayera</title>
</head>

<body>
    <div id="slideout-menu">
        <ul>
            <li>
                <a href="<?php echo site_url(''); ?>">Kezdőlap</a>
            </li>
            <li>
                <a href="<?php echo site_url('/blog'); ?>">Blog</a>
            </li>
            <li>
                <a href="<?php echo site_url('/about'); ?>">Rólam</a>
            </li>
            <li>
                <div class="searchbox-slide-menu">
                    <?php get_search_form(); ?>
                </div>
            </li>
        </ul>
    </div>

    <nav>
        <div id="logo-img">
            <h3>&lt; Mayera blog &gt;</h3>
        </div>
        <div id="menu-icon">
            <i class="fas fa-bars"></i>
        </div>
        <ul>
            <li>
                <a href="<?php echo site_url(''); ?>"
                <?php if(is_front_page()) echo 'class="active"' ?>
                >Kezdőlap</a>
            </li>
            <li>
                <a href="<?php echo site_url('/blog'); ?>"
                <?php if(get_post_type() == 'post') echo 'class="active"' ?>
                >Blog</a>
            </li>
            <li>
                <a href="<?php echo site_url('/about'); ?>"
                <?php if(is_page('about')) echo 'class="active"' ?>
                >Rólam</a>
            </li>
            <li>
                <div id="search-icon">
                    <i class="fas fa-search"></i>
                </div>
            </li>
        </ul>
    </nav>

    <div id="searchbox">
    <?php get_search_form(); ?>
    </div>

    <?php if(!is_front_page()){ ?>

    <main>

    <?php } ?>