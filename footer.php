        <footer class="footer">
            <div class="footer__contact">
                <div class="footer__contact__logo">
                    <img src="<?php bloginfo('template_url')?>/assets/img/coworking-sintra-logo.svg" alt="" class="footer__contact__logo-img">
                </div>
                <div class="footer__contact-info">
                    <div class="footer__contact-info__address">
                        <i class="fa-solid fa-location-dot"></i> <?php the_field('hero_address'); ?>
                    </div>
                    <div class="footer__contact-info__phone">
                        <i class="fa-solid fa-phone"></i>
                        +48 793 902 234
                    </div>
                    <div class="footer__contact-info__mail">
                        <i class="fa-regular fa-envelope"></i>
                        info@sintraconsulting.pl
                    </div>
                </div>
            </div>
            <div class="footer__navigation">
                <div class="footer__navigation__socials">
                    <div class="footer__navigation__socials-FB">
                        <i class="fa-brands fa-facebook-f"></i>
                    </div>
                    <div class="footer__navigation__socials-IG">
                        <i class="fa-brands fa-instagram"></i>
                    </div>
                </div>
                <div class="footer__navigation__list"> <?php
                wp_nav_menu(
                    array(
                        'theme_location' => 'footerMainMenu',
                        'menu_class' => 'footer__navigation__menu-list',
                        'container_class' => 'footer__navigation__menu',
                        'menu_id' => 'nav-footer'
                    )
                ); ?>
                    <div class="footer__navigation__list-copyright">
                        Copyrights &copy 2024
                    </div>
                </div>
            </div>
        </footer>

        </div>
        </div>
    </body>
</html>
