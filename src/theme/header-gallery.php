<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div class="header--bg_gallery">
<header class="header--bg_gallery">
  <div class="content header--front">
    <a href="/" class="logo">
      <svg
          xmlns="http://www.w3.org/2000/svg"
          xmlns:xlink="http://www.w3.org/1999/xlink"
          width="177px" height="53px">
        <text kerning="auto" font-family="MyriadPro" fill="rgb(0, 0, 0)" font-size="40px" x="0px" y="35px">
          <tspan font-size="40px" font-family="Pacifico" fill="#776550">Fago&#32;Pino</tspan>
        </text>
      </svg>
    </a>
    <nav>
      <ul>
        <?php $menu = wp_get_nav_menu_items('header-main'); ?>
        <?php foreach ($menu as $item): ?>
          <li class="<?= get_the_ID() == $item->object_id ? 'active' : '' ?>"><a href="<?= $item->url ?>"> <?= $item->title ?></a></li>
        <?php endforeach; ?>
      </ul>
    </nav>
    <div class="contact">
      <a href="tel:+79994674466"> 8 999 467 44 66</a>
    </div>
  </div>
</header>
