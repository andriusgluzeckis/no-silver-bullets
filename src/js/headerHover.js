class Hover {
    constructor(hover) {
        this.hover = hover;
        this.index = this.hover.dataset.id;
        this.dispalyElement = document.querySelector(`.js-hover-${this.index}`);
        this.isVideo = this.dispalyElement.tagName == 'VIDEO';
        console.log(this.dispalyElement.tagName);
        if (this.dispalyElement) {
            this.hover.addEventListener('mouseenter', event => {
                event.preventDefault();
                this.hover.classList.toggle('z-30');
                if (this.isVideo) {
                    // this.dispalyElement.src = this.dispalyElement.dataset.src;
                    // this.dispalyElement.setAttribute('autoplay', 'true');
                    
                    playVideo(this.dispalyElement);
                }
                // this.dispalyElement.classList.toggle('opacity-0');
                this.dispalyElement.classList.toggle('opacity-100');
            }); 
            this.hover.addEventListener('mouseleave', event => {
                event.preventDefault();
                this.hover.classList.toggle('z-30');

                if (this.isVideo) {
                    pauseVideo(this.dispalyElement);
                    // this.dispalyElement.nextElementSibling.src = '';
                }
                // this.dispalyElement.classList.toggle('opacity-0');
                this.dispalyElement.classList.toggle('opacity-100');
            }); 
        }

        async function playVideo(dispalyElement) {
            try {
              await  dispalyElement.play();
            } catch (err) {
              console.log(err);
            }
        }

        async function pauseVideo(dispalyElement) {
            try {
              await  dispalyElement.pause();
            } catch (err) {
              console.log(err);
            }
        }
    }


}

export default class Hovers {
    constructor() {
        const headerHoverElements = document.querySelectorAll('.js-header-hover');
        if (headerHoverElements) {
            this.headerHoverList = [...headerHoverElements].map(item => new Hover(item));
        }
    }
}