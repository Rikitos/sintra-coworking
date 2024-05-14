class headerNavigation {
    constructor() {
        console.log('test');
        this.headerContainer = document.querySelector('.header__container');
        this.headerNavigationMenu = document.querySelector('.header__navigation__menu');
        this.hamburgerContainer = document.querySelector('.header__hamburger');
        // this.headerContainer = this.headerContainer.style.backgroundColor = "red";
        this.hamburgerElements = document.querySelectorAll('.hamburger');
        this.hamburgerContainer.addEventListener('click', () => {
            this.showMenu();
            console.log('testing click');
        });
        addEventListener('scroll', () => {
            if (window.scrollY > 0) {
                console.log('scrolling');
                this.headerContainer.classList.add('scrolling');
            } else this.headerContainer.classList.remove('scrolling');
        });
    }
    showMenu() {
        this.headerNavigationMenu.classList.toggle('menu-opened');
        this.hamburgerElements.forEach(hamburger => {
            hamburger.classList.toggle('open');
        });
    }
}
document.addEventListener('DOMContentLoaded', () => {
    
    new headerNavigation();
});