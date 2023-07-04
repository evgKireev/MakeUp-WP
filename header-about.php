<!DOCTYPE html>
<html <?php language_attributes(); ?>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta
      http-equiv="X-UA-Compatible"
      content="IE=edge"
    />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0"
    />
    <title><?php bloginfo('template_description'); ?></title>
    <?php wp_head(); ?>
  </head>
  <body>
    <div class="wrapper-about">
      <header class="header-about">
        <div class="header-about__images">
          <div class="bg"></div>
          <img
            class="header-about__img"
            src="<?php the_field('header-bg-about'); ?>"
            alt=""
          />
        </div>
        <div class="menu-wrapper">
          <div class="hamburger-menu"></div>
        </div>
        <div class="header__top header__top--index">
          <nav class="nav">
            <ul class="nav-inner">
              <div class="nav-item">
                <a
                  class="nav-item__link nav-item__link--index"
                  href="<?php echo get_permalink(8); ?>"
                  ><li>Main</li></a
                >
              </div>
              <div class="nav-item nav-item--index">
                <a
                  class="nav-item__link nav-item__link--index"
                  href="<?php echo get_permalink(196); ?>"
                >
                  <li>Portfolio</li></a
                >
              </div>
              <div class="nav-item nav-item--index nav-item-index--active">
                <a
                  class="nav-item__link nav-item__link--index"
                  href="<?php echo get_permalink(175); ?>"
                  ><li>BIO</li></a
                >
              </div>
            </ul>
          </nav>
          <div class="social">
          <a
            target="_blank"
            href="<?php the_field('telegram-link'); ?>"
            ><div class="social__item">
              <img
                src="<?php bloginfo('template_url'); ?>/assets/images/social/telegram.svg"
                alt="Telegram"
              /></div
          ></a>
          <a
            target="_blank"
            href="<?php the_field('link-instagram'); ?>"
            ><div class="social__item">
              <img
                src="<?php bloginfo('template_url'); ?>/assets/images/social/instagram.svg"
                alt="Instagram"
              /></div
          ></a>
        </div>
        </div>
        <div class="header-about__content">ABOUT ME</div>
        <div class="menu-mobail">
        <nav class="nav-mobail">
          <ul class="nav-inner--mobail">
            <div class="nav-item nav-item--mobail">
              <a
                class="nav-item__link"
                href="<?php echo get_permalink(8); ?>"
                ><li>Main</li></a
              >
            </div>
            <div class="nav-item nav-item--mobail">
              <a
                class="nav-item__link"
                href="<?php echo get_permalink(196); ?>"
              >
                <li>Portfolio</li></a
              >
            </div>
            <div class="nav-item nav-item--mobail nav-item--active">
              <a
                class="nav-item__link"
                href="<?php echo get_permalink(175); ?>"
                ><li>BIO</li></a
              >
            </div>
          </ul>
        </nav>
        <div class="social-mobail">
          CONTACTS
          <div class="social">
            <a
              target="_blank"
              href="<?php the_field('telegram-link'); ?>"
              ><div class="social__item">
                <img
                  src="<?php bloginfo('template_url'); ?>/assets/images/social/telegram.svg"
                  alt="Telegram"
                /></div
            ></a>
            <a
              target="_blank"
              href="<?php the_field('link-instagram'); ?>"
              ><div class="social__item">
                <img
                  src="<?php bloginfo('template_url'); ?>/assets/images/social/instagram.svg"
                  alt="Instagram"
                /></div
            ></a>
          </div>
        </div>
      </div>
      </header>