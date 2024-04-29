/**
 * Contact us
 */
export default class Scroll {
    /**
     * Constructor.
     */
    constructor() {
        this.oldScrollY = window.scrollY;
        this.menuTrigger = document.querySelector('.js-menu-trigger');
        this.isScrollDown = false;
        this.delay = 150;

        window.addEventListener('scroll', event => {
            this.checkScrollDirection(event);
            
            if (this.isScrollDown) {
                if (! this.menuTrigger.classList.contains('opacity-0')) {
                    setTimeout(event => {
                        this.menuTrigger.classList.add('opacity-0');
                        this.menuTrigger.classList.add('pointer-events-none');
                    }, this.delay);
                }
            } else {
                if (this.menuTrigger.classList.contains('opacity-0')) {
                    setTimeout(event => {
                        this.menuTrigger.classList.remove('opacity-0');
                        this.menuTrigger.classList.remove('pointer-events-none');
                    }, this.delay);
                } 
            }
        });
    }

    /**
     * checkScrollDirection on window el scroll event
     * actions relatet on 
     * @param {event} event 
     */
    checkScrollDirection(event) {
        if (this.oldScrollY < window.scrollY) {
            this.isScrollDown = true;
        } else {
            this.isScrollDown = false;
        }
        this.oldScrollY = window.scrollY;
    }
}