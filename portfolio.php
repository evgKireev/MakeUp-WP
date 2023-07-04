<?php /* Template Name: portfolio */ ?>
<?php get_header('portfolio'); ?>
    <section class="portfolio">
        <div
          data-btn="content-1"
          class="portfolio__item"
          style="
            background-image: url(<?php the_field('cinema-images'); ?>);
            background-position: center;
            background-size: 100%;
            background-size: cover;
          "
        >
            <a href="<?php echo get_permalink(310); ?>">
            <div class="portfolio-wrap"><h1><?php the_field( 'title-cinema' ); ?></h1></div></a
          >
        </div>
        <div
          data-btn="content-2"
          class="portfolio__item"
          style="
            background-image: url(<?php the_field('hair-images'); ?>);
            background-position: center;
            background-size: 100%;
            background-size: cover;
          "
        >
        <a href="<?php echo get_permalink(387); ?>">
          <div class="portfolio-wrap"><h1><?php the_field('title_hair'); ?></h1></div></a
        >
        </div>
        <div
          data-btn="content-3"
          class="portfolio__item"
          style="
            background-image: url(<?php the_field('art_make-images'); ?>);
            background-position: center;
            background-size: 100%;
            background-size: cover;
          "
        >
        <a href="<?php echo get_permalink(456); ?>">
        <div class="portfolio-wrap">
            <h1><?php the_field( 'title_art' ); ?></h1>
          </div></a
        >
        </div>
        <div
          data-btn="content-4"
          class="portfolio__item"
          style="
            background-image: url(<?php the_field('make-up_for_a_client-images'); ?>);
            background-position: center;
            background-size: 100%;
            background-size: cover;
          "
        >
        <a href="<?php echo get_permalink(223); ?>">
          <div class="portfolio-wrap">
            <h1><?php the_field( 'title_make-up_for_a_client' ); ?></h1>
          </div></a
        >
        </div>
        <div
          data-btn="content-5"
          class="portfolio__item"
          style="
            background-image: url(<?php the_field('face_painting-images'); ?>);
            background-position: center;
            background-size: 100%;
            background-size: cover;
          "
        >
        <a href="<?php echo get_permalink(530); ?>"
          ><div class="portfolio-wrap">
            <h1><?php the_field( 'title_face' ); ?></h1>
          </div></a
        >
        </div>
      </section>
    </div>
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
          <div class="nav-item nav-item--mobail nav-item--active">
            <a
              class="nav-item__link"
              href="<?php echo get_permalink(196); ?>"
            >
              <li>Portfolio</li></a
            >
          </div>
          <div class="nav-item nav-item--mobail">
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
<?php get_footer(); ?>


