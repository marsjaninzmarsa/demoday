<!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>

<head>

    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="profile" href="https://gmpg.org/xfn/11">

    <?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

<!-- Start Top Bar -->
<div class="title-bar" data-responsive-toggle="mainNavigation" data-hide-for="medium">
    <div class="title-bar-left">
        <button class="menu-icon" type="button" data-toggle="mainNavigation"></button>
        <div class="title-bar-title">Menu</div>
    </div>
    <div class="title-bar-right">
        <img src="https://placehold.it/130x38&text=LOGO" alt="company logo">
    </div>
</div>

<div class="top-bar" id="mainNavigation">
    <div class="top-bar-left">
        <ul class="menu vertical medium-horizontal">
            <li class="hide-for-small-only"><img src="https://placehold.it/130x38&text=LOGO" alt="company logo"></li>
            <li><a href="#">Home</a></li>
            <li><a href="#">Shop</a></li>
            <li><a href="#">Blog</a></li>
        </ul>
    </div>
</div>
<!-- End Top Bar -->