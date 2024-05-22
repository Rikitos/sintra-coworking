<div class="rules"> <?php
    if ( have_rows('rules')) :
        while( have_rows('rules')) : the_row(); ?>
        <div class="rules__title-container">
            <span class="elementor-divider"></span>
            <div class="rules__title-container__title">
                <?php echo get_sub_field('rules_title'); ?>
            </div>
            <div class="rules__title-container__text">
                <?php echo get_sub_field('rules_title-text'); ?>
            </div>
        </div>
        <?php endwhile;
    endif; ?>
    <?php 
    if(have_rows('rules_list')) : ?>
    <ol class="rules__text-container"> <?php
        while(have_rows('rules_list')) : the_row(); ?>
            <span class="elementor-divider"></span>
            <li class="rules__text-container__title">
                <?php echo get_sub_field('rules_list_title'); ?>
                <?php 
                if(have_rows('rules_list_ul')) : ?>
                <ul class="rules__text-container__list-ul"> <?php 
                    while(have_rows('rules_list_ul')) : the_row(); ?>
                    <li class="rules__text-container__list-ul__item">
                        <?php echo get_sub_field('rules_list_ul_text');
                        if(get_sub_field('add_another_list')) : ?> <?php
                            if(have_rows('rules_list_ul_list_ul')) : ?>
                            <ul class="rules__text-container__list-ul__list"> <?php
                                while(have_rows('rules_list_ul_list_ul')) : the_row(); ?>
                                <li class="rules__text-container__list-ul__list-ul-text">
                                    <?php echo get_sub_field('rules_list_ul_list_text'); ?>
                                </li><?php
                                endwhile; ?>
                            </ul> <?php
                            endif;
                            if(have_rows('rules_list_ul_list_ol')) : ?>
                            <ol class="rules__text-container__list-ol__list"> <?php
                                while(have_rows('rules_list_ul_list_ol')) : the_row(); ?>
                                <li class="rules__text-container__list-ul__list-ol-text">
                                    <?php echo get_sub_field('rules_list_ul_list_text'); ?>
                                </li><?php
                                endwhile; ?>
                            </ol> <?php
                            endif; 
                        endif; ?>
                    </li> <?php 
                    endwhile; ?>
                </ul> <?php
                endif; ?> <?php 
                if(have_rows('rules_list_ol')) : ?> 
                <ol class="rules__text-container__list-ol"> <?php 
                    while(have_rows('rules_list_ol')) : the_row(); ?>
                    <li class="rules__text-container__list-ol__item">
                        <?php echo get_sub_field('rules_list_ol_text');
                        if(get_sub_field('add_another_list')) : ?> <?php
                            if(have_rows('rules_list_ol_list_ul')) : ?>
                            <ul class="rules__text-container__list-ol__list-ul"> <?php
                                while(have_rows('rules_list_ol_list_ul')) : the_row(); ?>

                                    <li class="rules__text-container__list-ol__list-ul-text">
                                        <?php echo get_sub_field('rules_list_ol_list_text'); ?>
                                    </li><?php

                                endwhile; ?>
                            </ul> <?php
                            endif;
                            if(have_rows('rules_list_ol_list_ol')) : ?>
                            <ol class="rules__text-container__list-ol__list-ol"> <?php
                                while(have_rows('rules_list_ol_list_ol')) : the_row(); ?>
                                <li class="rules__text-container__list-ol__list-ol-text">
                                    <?php echo get_sub_field('rules_list_ol_list_text'); ?>
                                </li><?php
                                endwhile; ?>
                            </ol> <?php
                            endif; 
                        endif;?>
                    </li> <?php 
                    endwhile; ?>
                </ol> <?php
                endif; ?>
            </li><?php 
        endwhile; ?>
    </ol> <?php
    endif;?>

    <section class="section section-10">
        <?php
        if(have_rows('section_10')) :
            while(have_rows('section_10')) : the_row(); ?>
            <div class="section-10__img" style="background-image:url(<?php echo esc_url(get_sub_field('section_10_img')['url']) ?>);">
                <h3 class="section-10__title">
                    <?php echo get_sub_field('section_10_title');?>
                </h3>
                <p class="section-10__text">
                    <?php echo get_sub_field('section_10_text'); ?>
                </p>
                <button class="section-10__button">
                    <?php echo get_sub_field('section_10_btn'); ?>
                </button>
            </div>
        <?php 
            endwhile; 
        endif ?>
    </section>

</div>