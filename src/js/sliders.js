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
        this.sliderElement = sliderWrapper.querySelector('.js-case-studies-slider');

        this.slider = new Swiper(this.sliderElement, {
            
        });
    }
}

export default class Sliders {
    constructor() {
        this.clientsSliderWrapper = document.querySelector('.js-clients-slider');
        this.clientsSliderConstructor = new ClientsSlider(this.clientsSliderWrapper);
    }
}