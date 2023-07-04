<?php /* Template Name: about */ ?>

<?php get_header('about'); ?>
  <section class="about-info">
        <div class="about-info__inner">
          <div class="about-info__content">
          <?php the_field('content-text'); ?>
          </div>
          <div class="about-info__img">
            <img
              src=" <?php the_field('photo-you'); ?>"
              alt=""
            />
          </div>
        </div>
      </section>
      <footer class="about-info__contact">
        <h1 class="about-info__title">CONTACTS</h1>
        <p class="about-info__sub-title">
          Make-up artist <?php the_field('name-about'); ?>
        </p>
        <div class="about-info__link">
          <img
            src="<?php bloginfo('template_url'); ?>/assets/images/icon/mess.svg"
            alt="messages"
          />
          <div class="about-info__messages">
          <a
              target="blank"
              href="mailto:<?php the_field('email'); ?>"
              ><?php the_field('email'); ?></a
            >
          </div>
        </div>
        <div class="about-info__social">
          <div class="about-info__social-item">
            <a
              target="_blank"
              href="<?php the_field('telegram-link'); ?>"
            >
              <img
                src="<?php bloginfo('template_url'); ?>/assets/images/social/Telegram-about.svg"
                alt="Telegram"
              />
            </a>
          </div>
          <div class="about-info__social-item">
            <a
              target="_blank"
              href="<?php the_field('link-instagram'); ?>"
            >
              <img
                src="<?php bloginfo('template_url'); ?>/assets/images/social/Ins-about.svg"
                alt="Instagram"
            /></a>
          </div>
          <div class="about-info__social-item">
            <a
              target="_blank"
              href="<?php the_field('link-facebook'); ?>"
            >
              <img
                src="<?php bloginfo('template_url'); ?>/assets/images/social/Faceb.svg"
                alt="Facebook"
              />
            </a>
          </div>
        </div>
      </footer>
    </div>


<?php get_footer(); ?>