<section class="events__hero">
    <span class="elementor-divider"></span>
<?php
    if ( have_rows('events_1')) :
        while( have_rows('events_1')) : the_row(); ?>
        <h3 class="events__hero__title">
            <?php echo get_sub_field('events_1_title'); ?>
        </h3>
        <?php 
        if(have_rows('events_1_text')) :?> 
            <div class="events__hero__container"> <?php
            while(have_rows('events_1_text')) : the_row(); ?>
                <div class="events__hero__text">
                    <?php echo get_sub_field('events_1_text_elem'); ?>
                </div> <?php 
            endwhile; ?>
            </div> <?php
        endif; ?>
        <div class="events__hero__btn">
            <?php echo get_sub_field('events_1_btn'); ?>
        </div>
        <div class="events__hero__img" style="background-image:url(<?php echo esc_url(get_sub_field('events_1_img')['url']) ?>);">

        </div> <?php
        endwhile;
    endif;?>
</section>

<section class="section events-2"> <?php
    if ( have_rows('events_2')) :
        while( have_rows('events_2')) : the_row(); ?>
        <h3 class="events-2__title">
            <?php echo get_sub_field('events_2_title'); ?>
        </h3>
        <span class="elementor-divider"></span>
        <?php 
        if(have_rows('events_2_text')) :?> 
            <div class="events-2__container"> <?php
            while(have_rows('events_2_text')) : the_row(); ?>
                <div class="events-2__text">
                    <?php echo get_sub_field('events_2_text_elem'); ?>
                </div> <?php 
            endwhile; ?>
            </div> <?php
        endif; ?>
        <div class="events-2__btn">
            <?php echo get_sub_field('events_2_btn'); ?>
        </div> <?php
        endwhile;
    endif;?>
</section>

<section class="section events-3"> <?php
    if ( have_rows('events_3')) : ?>
        <span class="elementor-divider"></span> <?php
        while( have_rows('events_3')) : the_row(); ?>
        <h3 class="events-3__title">
            <?php echo get_sub_field('events_3_title'); ?>
        </h3>
        <?php 
        if(have_rows('events_3_text')) :?> 
            <div class="events-3__container-text"> <?php
            while(have_rows('events_3_text')) : the_row(); ?>
                <div class="events-3__text">
                    <?php echo get_sub_field('events_3_text_elem'); ?>
                </div> <?php 
            endwhile; ?>
            </div> <?php
        endif;
        if(have_rows('events_3_list')) : ?>
        <div class="events-3__container-list"> <?php
            while(have_rows('events_3_list')) : the_row(); ?>
            <div class="events-3__container-list__elem">
                <?php echo get_sub_field('events_3_list_text'); ?>
            </div>
            <?php
            endwhile; ?>
            </div> <?php
        endif;
        endwhile;
    endif;?>
</section>

<section class="section events-7"> <?php
        if(have_rows('events_7')) :
            while(have_rows('events_7')) : the_row(); ?>
            <div class="events-7__img">
                <img src="<?php echo get_sub_field('events_7_img')['sizes']['medium']; ?>" alt="" class="events-7__img-img">
            </div>
            <?php endwhile; 
        endif ?>
</section>

<section class="section events-4"> <?php
        if(have_rows('events_4')) :
            while(have_rows('events_4')) : the_row(); ?>
            <div class="events-4__container">
                <div class="events-4__container-1">
                    <span class="elementor-divider"></span>
                    <h3 class="events-4__container-1__title">
                        <?php echo get_sub_field('events_4_title');?>
                    </h3>
                    <p class="events-4__container-1__text">
                        <?php echo get_sub_field('events_4_text'); ?>
                    </p>
                </div>
                <img src="<?php echo esc_url(get_sub_field('events_4_img')['url']) ?>" alt="" class="events-4__container__img">
            </div> <?php 
            endwhile; 
        endif ?>
</section>

<section class="section events-5"> <?php
    if ( have_rows('events_5')) :
        while( have_rows('events_5')) : the_row(); ?>
        <span class="elementor-divider"></span>
        <h3 class="events-5__title">
            <?php echo get_sub_field('events_5_title'); ?>
        </h3>
        
        <?php 
        if(have_rows('events_5_text')) :?> 
            <div class="events-5__container"> <?php
            while(have_rows('events_5_text')) : the_row(); ?>
                <div class="events-5__text">
                    <?php echo get_sub_field('events_5_text_elem'); ?>
                </div> <?php 
            endwhile; ?>
            </div> <?php
        endif; ?>
        <div class="events-5__container-btn">
            <div class="events-5__container-btn__img">
                <img src="<?php echo esc_url(get_sub_field('events_5_img')['url']) ?>" alt="" class="events-5__container-btn__img-img">
            </div>
            <div class="events-5__container-btn__btn">
                <span class="events-5__container-btn__plus">+</span>
                <?php echo get_sub_field('events_5_btn'); ?>
            </div> 
        </div><?php
        endwhile;
    endif;?>
</section>

<section class="section events-6"> <?php
    if ( have_rows('events_6')) : ?>
        <div class="events-6__container"> <?php
            while( have_rows('events_6')) : the_row(); ?>
            <span class="elementor-divider"></span>
            <h3 class="events-6__container__title">
                <?php echo get_sub_field('events_6_title'); ?>
            </h3>
            
            <?php 
            if(have_rows('events_6_text')) :?> 
                <div class="events-6__container-text"> <?php
                while(have_rows('events_6_text')) : the_row(); ?>
                    <div class="events-6__container-text__elem">
                        <?php echo get_sub_field('events_6_text_elem'); ?>
                    </div> <?php 
                endwhile; ?>
                </div> <?php
            endif; ?>
        </div>
        <div class="events-6__img">
            <img src="<?php echo esc_url(get_sub_field('events_6_img')['url']) ?>" alt="" class="events-6__img-img">
        </div> <?php
        endwhile;
    endif;?>
</section>