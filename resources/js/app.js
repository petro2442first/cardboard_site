import '@fortawesome/fontawesome-free/js/brands';
import '@fortawesome/fontawesome-free/js/solid';
import '@fortawesome/fontawesome-free/js/fontawesome';
;
// import 'normalize.css';
import 'swiper/css';
import 'video.js';




import Swiper, { Navigation, Pagination, Manipulation, Autoplay, Thumbs } from 'swiper';
import InputMask from 'inputmask';
import './catalog.js';

function menu() {
  const menu = document.querySelector('.nav-menu') ?? null;
  if(menu === null) return;
  const burger = document.querySelector('.burger');
  burger.addEventListener('click', e => {
    menu.classList.toggle('show');
    burger.classList.toggle('opened');
  });
}

function videos() {
  const videos = document.querySelectorAll('video');
  videos.forEach(video => {
    video.addEventListener('loadeddata', e => {
      video.classList.add('fade-in');
    })
  });
}

function appHeight() {
  document.documentElement.style.setProperty('--app-height', `${window.innerHeight}px`);
}
function nextBlockButton() {
  const btn = document.querySelector('.next-block-btn') ?? null;
  if(btn === null) return;
  btn.addEventListener('click', e => {
    e.preventDefault();
    document.querySelector(btn.getAttribute('href')).scrollIntoView({
      behavior: 'smooth',
    })
  });
}

function contactForm() {
  const form = document.querySelector('.contact-form') ?? null;
  if(form === null) return;

  const inputGroups  = document.querySelectorAll('.contact-form__group, .checkout__input') ?? null;
  if(inputGroups === null) return;

  inputGroups.forEach(group => {
    const input = group.querySelector('input');
    const label = group.querySelector('label');
    input.addEventListener('focusin', e => {
      label.classList.add('focus');
    });
    input.addEventListener('focusout', e => {
      if(input.value == '')
      label.classList.remove('focus');
    })
    input.addEventListener('change', e => {
      label.classList.add('focus');
    })
  });
}

function gallery() {
  const gallery = document.querySelector('.full-gallery') ?? null;
  if(gallery == null) return;
  const openBtns = document.querySelectorAll('.gallery__view-btn');
  openBtns.forEach(btn => {
    btn.addEventListener('click', e => {
      if(window.innerWidth < 768) {
        gallery.style.top = `${btn.getBoundingClientRect().y}px`;
        setTimeout(() => {
          gallery.classList.add('show');
          document.querySelector('.wrapper').classList.add('scale-out');
        }, 500);
      } else {
        gallery.classList.add('show');
      }
      document.body.style.overflow = 'hidden';
      const images = gallery.querySelectorAll('img');
      images.forEach(img => {

        img.addEventListener('click', openGalleryViewer.bind(img, event, images));
        if(img.complete) {
          img.parentElement.classList.add('loaded');
        } else {
          img.addEventListener('load', e => {
            img.parentElement.classList.add('loaded');
          });
        }
      });
    });
  });
  const closeBtn = gallery.querySelector('.full-gallery__close-btn');
  closeBtn.addEventListener('click', e => {
    gallery.classList.remove('show');
    document.querySelector('.wrapper').classList.remove('scale-out');
    document.body.style.overflow = 'auto';
  });

}
function openGalleryViewer(event, items) {
  let selector = document.querySelector('#gallery-viewer');
  const viewer = document.querySelector('#gallery-viewer .viewer-container').swiper;
  selector.classList.add('show');
  let counter = 0;
  let index;
  items.forEach(item => {
    if(item === this) {
      index = counter;
    }
    counter++;
  });
  viewer.slideToLoop(index, 0);
  viewer.update();
}
function initGalleryViewer() {
  let wrapper = document.querySelector('#gallery-viewer');
    const viewer = new Swiper(document.querySelector('#gallery-viewer .viewer-container'), {
      modules: [Navigation, Pagination, Manipulation],
      direction: 'horizontal',
      loop: true,
      spaceBetween: 25,
      effect: 'slide',
      speed: 500,
      autoHeight: true,
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
      pagination: {
        el: '.swiper-pagination',
        type: 'fraction',
      },
    });
    const overlay = wrapper.querySelector('.overlay');
    overlay.addEventListener('click', e => {
      wrapper.classList.remove('show');
    });
    // Array.from(viewer.slides).forEach(slide => {
    //   slide.addEventListener('click', () => {
    //     selector.classList.remove('show');
    //   });
    // });
}
function headerSlider() {
  const selector = document.querySelector('.header .slider') ?? null;
  if(selector === null) return;

  const slider = new Swiper(selector, {
    modules: [Navigation, Pagination, Autoplay, Manipulation],
    direction: 'horizontal',
    loop: true,
    effect: 'slide',
    speed: 500,
    spaceBetween: 50,
    navigation: {
      nextEl: '.slider__next-btn',
      prevEl: '.slider__prev-btn'
    },
    pagination: {
      el: '.slider__pagination',
      type: 'bullets'
    },
    // autoplay: {
    //   delay: 5000,
    //   disableOnInteraction: false
    // }
  });

}
function headerMenu() {
  const links = document.querySelectorAll('.nav-link') ?? null;
  if(links === null) return;
  links.forEach(link => {
    link.addEventListener('click', e => {
      e.preventDefault();
      document.querySelector(link.getAttribute('href')).scrollIntoView({
        behavior: 'smooth',
      })
    });
  });
}

function sendContactForm() {
    const form = document.querySelector('.contact-form') ?? null;
    if(form === null) return;
    const phone = document.querySelectorAll('input[type="tel"]');
    // InputMask({regex: String.raw`^((\+?3)?8)?((0\(\d{2}\)?)|(\(0\d{2}\))|(0\d{2}))\d{7}$`}).mask(phone);
    InputMask('+380-(99)-999-99-99').mask(phone);
    form.addEventListener('submit', e => {
        e.preventDefault();
        const name = form.querySelector('input[name="name"]').value;
        const email = form.querySelector('input[name="email"]').value;
        const message = form.querySelector('input[name="message"]').value;
        const btn = from.querySelector('.contact-form__submit');
        const responseField = from.querySelector('.contact-form__response');
        responseField.classList.add('sending');
        responseField.classList.remove('sending');
        responseField.classList.add('success');
        responseField.innerHTML = 'Ваше повідомлення успішно відправлено! Дякую за відгук!';
    });
}

document.addEventListener('DOMContentLoaded', e => {
  // menu();
  videos();
  appHeight();
  nextBlockButton();
  contactForm();
  gallery();
  initGalleryViewer();
  headerSlider();
  headerMenu();
  sendContactForm();
});
window.addEventListener('load', e => {
  document.querySelector('.wrapper').classList.add('scale-in');
  document.documentElement.classList.add('loaded');
});
