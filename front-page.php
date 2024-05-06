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
        <h2 class="section-2__title">
            <?php the_field('section_2_title') ?>
        </h2>
        <p class="section-2__text">
            <?php the_field('section_2_text') ?>
        </p>
    </section>

    <section class="section section-3">
        <?php
        if ( have_rows('section_3')) : ?>
            <h2 class="section-3__title">
                <?php the_field('section_3_title') ?>
            </h2> <?php
            while( have_rows('section_3')) : the_row(); ?>
            <h3 class="section-3__elem-title">
                <?php echo get_sub_field('section_3_elem_title'); ?>
            </h3>
            <p class="section_3__elem-text">
                <?php echo get_sub_field('section_3_elem_text'); ?>
            </p> <?php   
            endwhile;
        endif;?>
    </section>

    <section class="section section-4">
        <?php
        if ( have_rows('section_4')) :
            while( have_rows('section_4')) : the_row(); ?>
            <h3 class="section-4__elem-title">
                <?php echo get_sub_field('section_4_elem_title'); ?>
            </h3>
                <?php 
                if(have_rows('section_4_elem_text')) :
                    while(have_rows('section_4_elem_text')) : the_row(); ?>
                <p class="section_4__elem-text">
                    <?php echo get_sub_field('section_4_elem_text_content'); ?> 
                </p>
                <?php
                    endwhile;
                endif;
            endwhile;
        endif;?>
    </section>

    <section class="section section-5">
        <h3 class="section-5__title">
            <?php the_field('section_5__title');?>
        </h3>
        <div class="section-5__text">
            <?php the_field('section_5__text');?>
        </div>
    </section>

    <section class="section section-6">
        <?php echo get_sub_field('section_6_title');
        if(have_rows('section_6')) :
            while(have_rows('section_6')) : the_row(); ?>
                <h3 class="section-6__title">
                    <?php echo get_sub_field('section_6_title'); ?> 
                </h3>
                <button class="section-6__button">
                    <?php echo get_sub_field('section_6_btn'); ?>
                </button>
            <?php
        endwhile; 
        endif ?>
    </section>

    <section class="section section-7">
        <h2 class="section-7__title">
            <?php the_field('section_7_title'); ?>
        </h2> <?php
        if(have_rows('section_7')) :
            while(have_rows('section_7')) : the_row(); ?>
            <p class="section-7__text">
                <?php echo get_sub_field('section_7_text');?>
            </p>
        <?php endwhile; 
        endif ?>
    </section>

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
        <?php 
            endwhile; 
        endif ?>
    </section>

    <section class="section section-9">
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
        <?php 
            endwhile; 
        endif ?>
    </section>

    <section class="section section-11">
        <?php
        if(have_rows('section_10')) :
            while(have_rows('section_10')) : the_row(); ?>
            <img src="<?php echo get_theme_file_uri() ?>" alt="">
            <?php echo print_r(get_sub_field('section_11_img')); ?>
            <?php endwhile; 
        endif ?>
    </section>
</div>
<?php
get_footer();
?>