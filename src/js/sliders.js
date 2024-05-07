import Swiper from 'swiper/bundle';

class ClientsSlider {
    constructor(clientsSliderWrapper) {
        if (! clientsSliderWrapper) {
            return false;
        }

        this.clientsSliderWrapper = clientsSliderWrapper;
        console.log(this.clientsSliderWrapper);
        this.clientsSliderElement = this.clientsSliderWrapper.querySelector('.swiper');
        
        this.clientsSlider = new Swiper(this.clientsSliderElement, {
            forceLoop: true,
            loop: true,
            freeMode: true,
            spaceBetween: 80,
            grabCursor: true,
            slidesPerView: 2,
            loop: true,
            autoplay: {
                delay: 0,
                disableOnInteraction: true
            },
            autoHeight: false,
            freeMode: true,
            speed: 3000,
            freeModeMomentum: false,
            breakpoints: {
                768: {
                    slidesPerView: 4,
                },
                1024: {
                    slidesPerView: 6,
                },
                1200: {
                    slidesPerView: 8,
                }
            }
        });
    }
}

class CaseStudiesSlider {
    constructor(sliderWrapper) {
        this.sliderWrapper = sliderWrapper;
        this.sliderElement = this.sliderWrapper.querySelector('.js-case-studies-slider');

        this.buttonPrev = this.sliderWrapper.querySelector('.js-slider-prev');
        this.buttonNext = this.sliderWrapper.querySelector('.js-slider-next');

        this.slider = new Swiper(this.sliderElement, {
            slidesPerView: 1,
            loop: true,
            speed: 300,
            pagination: {
                el: '.js-slider-pagination',
                type: 'bullets',
                clickable: true
            },
            navigation: {
                nextEl: this.buttonNext,
                prevEl: this.buttonPrev,
            },
            breakpoints: {
                '768': {
                    slidesPerView: 2,
                    spaceBetween: 30,
                }
            }
        });
    }
}
class WorkSliderNavigation {
    constructor(navItem, closeAllNavItems, slider) {
        this.navItem = navItem;
        this.closeAllNavItems = closeAllNavItems;
        this.slider = slider;

        this.navItem.addEventListener('click', event => {
            event.preventDefault();
            this.index = event.target.dataset.index;
            this.slider.slideToLoop(this.index, 300, null);
            this.closeAllNavItems();
            this.active();
        });
    }

    active() {
        this.navItem.classList.add('bg-yellow');
        this.navItem.classList.remove('bg-primary-color');
    }

    close() {
        this.navItem.classList.remove('bg-yellow');
        this.navItem.classList.add('bg-primary-color');
    }
}

class WorkSlider {
    constructor(sliderWrapper) {
        this.sliderWrapper = sliderWrapper;
        this.sliderElement = this.sliderWrapper.querySelector('.js-slider-content');
        this.navigationItems = this.sliderWrapper.querySelectorAll('.js-slider-nav-item');

        this.slider = new Swiper(this.sliderElement, {
            slidesPerView: 1,
            loop: false,
            speed: 300,
            effect: 'fade',
            fadeEffect: {
              crossFade: true
            },
            allowTouchMove: false,
        });

        this.navigationItemsList = [...this.navigationItems].map(item => new WorkSliderNavigation(item, () => this.disableNav(), this.slider)); 
    }

    disableNav() {
        this.navigationItemsList.forEach(trigger => trigger.close());
    }
}

export default class Sliders {
    constructor() {
        this.clientsSliderWrapper = document.querySelector('.js-clients-slider');
        if (this.clientsSliderWrapper) {
            this.clientsSliderConstructor = new ClientsSlider(this.clientsSliderWrapper);
        }

        this.caseStudiesSliderWrapper = document.querySelector('.js-case-studies-wrapper');
        if (this.caseStudiesSliderWrapper) {
            this.caseStudiesSliderConstructor = new CaseStudiesSlider(this.caseStudiesSliderWrapper);
        }

        this.workSliderWrapper = document.querySelector('.js-work-sliders-wrapper');
        if (this.workSliderWrapper) {
            this.workSliderConstructor = new WorkSlider(this.workSliderWrapper);
        }
    }
}