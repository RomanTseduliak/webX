<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">


    <title><?php bloginfo('name')?></title>

    <link href="https://fonts.googleapis.com/css?family=IBM+Plex+Sans:300,400,500,600,700&display=swap"
          rel="stylesheet">

    <link rel="stylesheet" href="libs/flickity/flickity.min.css">

    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url') ?>">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<header class="header">
    <div class="container">
        <div class="header__main">
            <a href="" class="header__logo">
                <img src="<?php bloginfo('template_url')?>/img/logo.png" alt="">
            </a>
            <nav class="nav">
                <ul class="nav__list">
                    <li class="nav__item">
                        <a href="" class="nav__link">How it Works</a>
                    </li>
                    <li class="nav__item">
                        <a href="" class="nav__link">Features</a>
                    </li>
                    <li class="nav__item">
                        <a href="" class="nav__link">Pricing</a>
                    </li>
                    <li class="nav__item">
                        <a href="" class="nav__link">Contact </a>
                    </li>
                </ul>
            </nav>
            <ul class="header__menu">
                <li class="header__menu__item header-tell">
                    <img class="header-tell__img" src="<?php bloginfo('template_url')?>/img/icon-tell.png" alt="">
                    <a href="" class="header__menu__link">1800 1392 5977</a>
                </li>
                <li class="header__menu__item sing-up">
                    <a href="" class="header__menu__link">SIGN UP</a>
                </li>
                <li class="header__menu__item sing-in">
                    <a href="" class="header__menu__link">LOGIN</a>
                </li>
            </ul>
                        <div class="hamb"></div>

        </div>
    </div>
    
</header>