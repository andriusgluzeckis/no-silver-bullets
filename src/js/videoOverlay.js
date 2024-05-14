import { Fancybox } from '@fancyapps/ui/';
// import '@fancyapps/ui/dist/fancybox/fancybox.css';
/**
 * Students Awards
 */
export default class VideoOverlay {

    constructor() {
        this.videoOverlayTrigger = document.querySelector('.js-video-overlay-trigger');
        this.videoOverlay = document.querySelector('.js-video-overlay');

        Fancybox.bind('[data-fancybox]', {
            Html : {
                videoTpl : `<video width="1920" class="!w-full !h-auto !max-w-none fancybox__html5video" loop playsinline controls controlsList="nodownload" poster="{{poster}}">
                    <source src="{{src}}" type="{{format}}" />Sorry, your browser doesn't support embedded videos.</video>`
                },
                videoRatio: '16 / 9'
          });

          this.buttons = document.querySelectorAll('.js-scroll-to-form');

          [...this.buttons].forEach(button => {
              button.addEventListener('click', event => {
                  event.preventDefault();

                  console.log('click');
                  
                  const scrollTarget = document.querySelector('.js-contact-form');
                  const scrollTargetOffset = scrollTarget.getBoundingClientRect().top + window.scrollY;
                  console.log(scrollTargetOffset);

                  window.scrollTo({
                      top: scrollTargetOffset,
                      behavior: 'smooth'
                  });
              });
          });
    }
}