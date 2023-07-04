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
    <div class="container--portfolio">
      <header class="header">
        <div>
          <div class="wrap-menu">
            <div class="menu-wrapper--portfolio">
              <div class="hamburger-menu"></div>
            </div>
          </div>
          <div class="header__top">
            <nav class="nav">
              <ul class="nav-inner">
                <div class="nav-item">
                  <a
                    class="nav-item__link"
                    href="<?php echo get_permalink(8); ?>"
                    ><li>Main</li></a
                  >
                </div>
                <div class="nav-item nav-item--active">
                  <a
                    class="nav-item__link"
                    href="<?php echo get_permalink(196); ?>"
                  >
                    <li>Portfolio</li></a
                  >
                </div>
                <div class="nav-item">
                  <a
                    class="nav-item__link"
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
        </div>
      </header>