export default class Menu {
    constructor() {
        this.menuTriggers = document.querySelectorAll('.js-menu-trigger');
        this.menu = document.querySelector('.js-menu');
        this.activeClass = 'menu-active';
        this.inActiveClass = 'menu-inactive';

        this.isOpen = false;
        
        if (this.menuTriggers) {
            // this.menuTriggersList = [...this.menuTriggers].map(item => new ToggleMenu(item));
            this.menuTriggers.forEach(item => {
                item.addEventListener('click', event => {

                    event.preventDefault();

                    if (! this.isOpen) { // if closed
                        this.isOpen = true;
                        if (this.menu.classList.contains(this.inActiveClass) && ! this.menu.classList.contains(this.activeClass)) {
                            this.menu.classList.remove(this.inActiveClass);
                            this.menu.classList.add(this.activeClass);
                        }
                    } else {  // if opened
                        if (this.menu.classList.contains(this.activeClass) && ! this.menu.classList.contains(this.inActiveClass)) {
                            this.menu.classList.add(this.inActiveClass);
                            this.menu.classList.remove(this.activeClass);
                        }
                        this.isOpen = false;
                    }
                });
            });
        }
    }
}