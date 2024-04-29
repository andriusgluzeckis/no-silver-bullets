import Swiper from 'swiper/core';
import AOS from 'aos';
import { Fancybox } from '@fancyapps/ui/dist/fancybox/fancybox.esm.js';

import Scroll from './js/scroll';
import Menu from './js/menu';
import Sliders from './js/sliders';
import './js/animations';

window.THEME_NAME = {
  scroll: new Scroll(),
  menu: new Menu(),
  sliders: new Sliders(),
};

window.addEventListener('load', () => {
  AOS.init();
  console.log('loaded');
});

// Promise.all(Array.from(document.images).filter(img => !img.complete).map(img => new Promise(resolve => { img.onload = img.onerror = resolve; }))).then(() => {
//   console.log('images finished loading');
// });

