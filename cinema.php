<?php /* Template Name: cinema */ ?>
<?php get_header('galerey'); ?>

<div class="breadcrumbs">
        <div class="container">
          <a href="<?php echo get_permalink(196); ?>">
            <div class="breadcrumbs__inner">
              <svg
                width="10"
                height="16"
                viewBox="0 0 10 16"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  d="M8.49257 16L0 8L8.49257 0L10 1.42L3.01486 8L10 14.58L8.49257 16Z"
                  fill="#797979"
                />
              </svg>
              Make up for a client
            </div>
          </a>
        </div>
      </div>
      <section class="photos">
        <div class="container">
           <div class="grid-content">
          <?php
            $posts = get_field('photo-gal-cinema');
            if( $posts ): ?>
                <?php foreach( $posts as $key=> $post ): 
                    ?>
                    <div class="grid-content__images">
                          <img
                            id="<?= $key  ?>"
                            class="grid-content__img"
                            src="<?php the_field('card-cinema-big'); ?>"
                            alt="photo"
                        />
                        </div>
                <?php endforeach; ?>
            <?php endif; ?> 
          </div>
        </div>
      </section>
      <section
        class="modal"
        id="content-1"
      >
        <div class="container--portfolio">
          <div class="modal-fotorama">
            <div
              id="fotorama"
              class="fotorama"
              data-width="100%"
              data-ratio="800/600"
              data-minwidth="320"
              data-maxwidth="1250"
              data-minheight="672"
              data-maxheight="100%"
              data-nav="thumbs"
              data-thumbwidth="190"
              data-thumbheight="112"
              data-allowfullscreen="native"
              data-fit="contain"
              data-transition="crossfade"
              data-loop="true"
              data-keyboard="true"
              data-arrows="true"
              data-click="true"
              data-swipe="true"
            >
                <?php
          $posts = get_field('photo-gal-cinema', 310);
          if( $posts ): ?>
              <?php foreach( $posts as $post ): 
                  ?>
                  <img src="<?php the_field('card-cinema-big'); ?>" alt="photo">
              <?php endforeach; ?>
          <?php endif; ?>
            </div>
            <div class="close"></div>
            <div class="pogination"></div>
            <div
              class="link"
              data-shareBtn="sharecontent-1"
            >
              <div class="share-link">
                <div class="share-close"></div>
                <div class="share-link__sicial">
                  <div class="share-link__images copy-link">
                  <img
                      src="<?php bloginfo('template_url'); ?>/assets/images/social/link.svg"
                      alt="telegram"
                    />
                  </div>
                  <div class="share-link__images shere-telegram">
                  <img
                      src="<?php bloginfo('template_url'); ?>/assets/images/social/telegram-share.svg"  
                      alt="telegram"
                    />
                  </div>
                  <div class="share-link__images shere-facebock">
                  <img
                      src="<?php bloginfo('template_url'); ?>/assets/images/social/faceb-share.svg"
                      alt="facebook"
                    />
                  </div>
                  <div class="share-link__images shere-vk">
                  <img
                      src="<?php bloginfo('template_url'); ?>/assets/images/social/vk-share.svg"
                      alt="vk"
                    />
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>

    <div class="menu-mobail">
      <nav class="nav-mobail">
        <ul class="nav-inner--mobail">
          <div class="nav-item nav-item--mobail">
            <a
              class="nav-item__link"
              href="index.html"
              ><li>Main</li></a
            >
          </div>
          <div class="nav-item nav-item--mobail nav-item--active">
            <a
              class="nav-item__link"
              href="portfolio.html"
            >
              <li>Portfolio</li></a
            >
          </div>
          <div class="nav-item nav-item--mobail">
            <a
              class="nav-item__link"
              href="about.html"
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
            href="<?php the_field('telegram-link', 310); ?>"
            ><div class="social__item">
              <img
                src="<?php bloginfo('template_url'); ?>/assets/images/social/telegram.svg"
                alt="Telegram"
              /></div
          ></a>
          <a
            target="_blank"
            href="<?php the_field('link-instagram', 310); ?>"
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

