<?php
get_header();

if (have_posts()) {
  while(have_posts()) {
    the_post();
    the_title();
    the_content();
  }
} ?>
    <div class="hero">
        <h3 class="hero__address">
            <i class="fa-solid fa-location-dot"></i> <?php the_field('hero_address'); ?>
        </h3>
        <h2 class="hero__title">
            <?php the_field('hero_title'); ?>
        </h2>
        <p class="hero__text">
            <?php the_field('hero_text'); ?>
        </p>
        <button class="hero__btn">
            <?php the_field('hero_btn'); ?>
        </button>
        <div class="hero__img">
            <!-- <?php echo print_r(get_field('hero_img')['sizes']) ?> -->
            <img src="<?php echo esc_url(get_field('hero_img')['url']) ?>" alt="" class="hero__img-img">
        </div>
    </div>

    <section class="section section-1">
        <div class="section-1__container">
            <h2 class="section-1__container__title">
                <?php the_field('section_1_title'); ?>
            </h2>
            <p class="section-1__container__text">
                <?php the_field('section_1_text'); ?>
            </p>
            <button class="section-1__container__btn">
                <?php the_field('section_1_btn'); ?>
            </button>
        </div>
        <div class="section-1__img">
            <img src="<?php echo esc_url(get_field('section_1_img')['url']) ?>" alt="" class="section-1__img-img">
        </div>

    </section>

    <section class="section section-2">
        <span class="elementor-divider"></span>
        <h2 class="section-2__title">
            <?php the_field('section_2_title') ?>
        </h2>
        <p class="section-2__text">
            <?php the_field('section_2_text') ?>
        </p>
    </section>

    <section class="section section-3">
        <span class="elementor-divider"></span>
        <?php
        if ( have_rows('section_3')) : ?>
            <h2 class="section-3__title">
                <?php the_field('section_3_title') ?>
            </h2> <?php
            while( have_rows('section_3')) : the_row(); ?>
            <div class="section-3__elem">
                <h3 class="section-3__elem-title">
                    <?php echo get_sub_field('section_3_elem_title'); ?>
                </h3>
                <p class="section-3__elem-text">
                    <?php echo get_sub_field('section_3_elem_text'); ?>
                </p> 
            </div> <?php   
            endwhile;
        endif;?>
    </section>

    <section class="section section-4">
        <?php
        if ( have_rows('section_4')) :
            while( have_rows('section_4')) : the_row(); ?>
            <div class="section-4__elem">
                <div class="section-4__elem-img">
                    <img src="<?php echo esc_url(get_sub_field('section_4_elem_img')['url']) ?>" alt="" class="section-4__img-img">
                </div>            
                <h3 class="section-4__elem-title">
                    <?php echo get_sub_field('section_4_elem_title'); ?>
                </h3>
                    <?php 
                    if(have_rows('section_4_elem_text')) :
                        while(have_rows('section_4_elem_text')) : the_row(); ?>
                    <div class="section-4__elem-text">
                        <?php echo get_sub_field('section_4_elem_text_content'); ?> 
                    </div>
                    <?php
                    endwhile;
                endif;?>
            </div><?php
            endwhile;
        endif;?>
    </section>

    <section class="section section-5">
        <span class="elementor-divider"></span>
        <h3 class="section-5__title">
            <?php the_field('section_5_title');?>
        </h3>
        <div class="section-5__text">
            <?php the_field('section_5_text');?>
        </div>
    </section>

    <section class="section section-6">
        <span class="elementor-divider"></span>
        <?php echo get_sub_field('section_6_title');
        if(have_rows('section_6')) :
            while(have_rows('section_6')) : the_row(); ?>
                <div class="section-6__img">
                    <img src="<?php echo esc_url(get_sub_field('section_6_img')['url']) ?>" alt="" class="section-6__img-img">
                </div>
                <h3 class="section-6__title">
                    <?php echo get_sub_field('section_6_title'); ?> 
                </h3>
                <button class="section-6__button">
                    <?php echo get_sub_field('section_6_btn'); ?>
                </button>
            <?php
        endwhile; 
        endif ?>
        <div class="section-6__bg"></div>
    </section>

    <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css"
    />
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
    <script>

    document.addEventListener('DOMContentLoaded', () => {
    const swiper = new Swiper('.swiper', {

    // Optional parameters
    direction: 'horizontal',
    slidesPerView: 2,
    spaceBetween: 15,
    // loop: false,
    grid: {
        rows: 2,
    },
    // rows: 2,
    // autoplay: {
    //     delay: 3000,
    //     disableOnInteraction: false,
    // },
    // loopedSlides: 1,

    // If we need pagination
    // pagination: {
    //   el: '.swiper-pagination',
    // },
    });

    });
    </script>

    <div class="swiper section section-7">
        <h2 class="section-7__title">
            <?php the_field('section_7_title'); ?>
        </h2>
        <!-- <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div> -->
        <!-- Additional required wrapper -->
        <div class="swiper-wrapper">
            <!-- Slides -->
            <!-- <?php $slides = get_field('section_7'); ?> -->

            <!-- <div class="swiper-slide"> -->
            <?php 
                if ( have_rows('section_7')): 
                while( have_rows('section_7') ) : the_row(); ?>
                    <div class="swiper-slide section-7__container">
                        <?php 
                        // echo print_r(get_sub_field('slider_img')); 
                        ?>
                        <div class="section-7__img">
                            <img src="<?php echo get_sub_field('section_7_img')['sizes']['medium']; ?>" alt="" class="section-7__img-img">
                        </div>
                        <p class="section-7__text">
                            <?php echo get_sub_field('section_7_text');?>
                        </p>
                    </div> 
                <?php
                endwhile;
            endif;
            ?>
            <!-- </div> -->
        </div>
        <!-- If we need pagination -->
        <!-- <div class="swiper-pagination"></div> -->
    </div>

    <section class="section section-8">
        <?php
        if(have_rows('section_8')) :
            while(have_rows('section_8')) : the_row(); ?>
            <h3 class="section-8__title">
                <?php echo get_sub_field('section_8_title');?>
            </h3>
            <p class="section-8__text">
                <?php echo get_sub_field('section_8_text'); ?>
            </p>
            <button class="section-8__button">
                <?php echo get_sub_field('section_8_btn'); ?>
            </button>
            <img src="<?php echo esc_url(get_sub_field('section_8_img')['url']) ?>" alt="" class="section-8__img">
        <?php 
            endwhile; 
        endif ?>

    </section>

    <section class="section section-9">
        <span class="elementor-divider"></span>
        <h3 class="section-9__title">
            <?php the_field('section_9_title'); ?>
        </h3>
        <p class="section-9__text">
            <?php the_field('section_9_text'); ?>
        </p>
    </section>

    <section class="section section-10">
    <?php
        if(have_rows('section_10')) :
            while(have_rows('section_10')) : the_row(); ?>
            <h3 class="section-10__title">
                <?php echo get_sub_field('section_10_title');?>
            </h3>
            <p class="section-10__text">
                <?php echo get_sub_field('section_10_text'); ?>
            </p>
            <button class="section-10__button">
                <?php echo get_sub_field('section_10_btn'); ?>
            </button>
            <img src="<?php echo esc_url(get_sub_field('section_10_img')['url']) ?>" alt="" class="section-10__img">
        <?php 
            endwhile; 
        endif ?>
    </section>

    <section class="section section-11">
        <?php
        if(have_rows('section_11')) :
            while(have_rows('section_11')) : the_row(); ?>
            <div class="section-11__img">
                <img src="<?php echo esc_url(get_sub_field('section_11_img')['url']) ?>" alt="" class="section-11__img-img">
            </div>
            <!-- <img src="<?php echo get_theme_file_uri() ?>" alt=""> -->
            <!-- <?php echo print_r(get_sub_field('section_11_img')); ?> -->
            <?php endwhile; 
        endif ?>
    </section>

    <section class="section section-12">
            <div class="section-12__title-container">
                <div class="section-12__title">
                    Szukasz pracy w IT i marketingu?
                </div>
                <div class="section-12__text-1">
                    Dołącz do naszego zespołu Sintra Poland
                </div>
            </div>
            <div class="section-12__text-container">
                <div class="section-12__text-2">
                    Zobacz ofert na:
                </div>
                <div class="section-12__btn-1">
                <img src="<?php echo get_theme_file_uri('/assets/img/justjoinit.png'); ?>" alt="">
                </div>
                <div class="section-12__text-3">
                    lub
                </div>
                <div class="section-12__btn-2">
                    <img src="<?php echo get_theme_file_uri('/assets/img/rocketjobs.png'); ?>" alt=""> <span>RocketJobs</span>
                </div>
                <div class="section-12__img">
                    <img src="<?php echo get_theme_file_uri('/assets/img/megaphone.png'); ?>" alt="" class="section-12__img-img">
                </div>
            </div>
    </section>
<?php
get_footer();
?>