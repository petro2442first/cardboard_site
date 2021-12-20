import {Swiper, Navigation, Autoplay, Manipulation, Thumbs} from 'swiper';
import {changeOpenCartBtnValue} from './cart.js';
import './checkout.js';
function catalogItems() {
  const items = document.querySelectorAll('.catalog-item') ?? null;
  if(items === null) return;
  items.forEach((item, index) => {
    const btn = item.querySelector('.catalog-item__view-btn');
    const addToCartBtn = item.querySelector('.catalog-item__add-to-cart');
    const oneClickCheckoutBtn = item.querySelector('.catalog-item__one-click-checkout');
    btn.addEventListener('click', openCatalogItemViewer);
    addToCartBtn.addEventListener('click', addToCart.bind(addToCartBtn, event, item, index));
  });
}
function initCatalogItemViewer() {
  const viewer = document.querySelector('.catalog-item-viewer') ?? null;
  if(viewer === null) return;
  const sliderSelector = viewer.querySelector('.thumbs-slider');
  const thumbSelector = viewer.querySelector('.thumbs');
  const thumbs = new Swiper(thumbSelector, {
      spaceBetween: 25,
      slidesPerView: 4,
      freeMode: true,
      watchSlidesVisibility: true,
      watchSlidesProgress: true,
  });
  const slider = new Swiper(sliderSelector, {
    modules: [Navigation, Autoplay, Manipulation, Thumbs],
      direction: 'horizontal',
      loop: true,
      spaceBetween: 25,
      effect: 'slide',
      speed: 500,
      navigation: {
        nextEl: '.thumbs-slider__next-btn',
        prevEl: '.thumbs-slider__prev-btn',
      },
      thumbs: {
        swiper: thumbs,
        slideThumbActiveClass: 'thumbs__slide--active'
      }
  });
  const closeBtn = viewer.querySelector('.catalog-item-viewer__close');
  closeBtn.addEventListener('click', e => {
    viewer.classList.remove('show');
  })
}
function openCatalogItemViewer(event) {
  event.preventDefault();
  const viewer = document.querySelector('.catalog-item-viewer') ?? null;
  if(viewer === null) return;
  viewer.classList.add('show');
}
function addToCart(event, item, index) {
  const cart = document.querySelector('.cart');
  const cartList = cart.querySelector('.cart__list');
  // this.style.opacity = '0';
  this.classList.add('added');
  setTimeout(() => {
  this.innerHTML = 'Додано до кошика';
  }, 250);
  
  cartList.append(cartItemHTML(item, index));
}
function cartItemHTML(item, index) {
  const addingItem = document.createElement('li');
  addingItem.classList.add('cart-item');
  const title = item.querySelector('.catalog-item__title').innerText;
  const price = item.querySelector('.catalog-item__price span').innerText;
  const thumb = item.querySelector('.catalog-item__thumb img').getAttribute('src');
  addingItem.dataset.index = index;
  addingItem.innerHTML = `
  <div class="cart-item__thumb">
    <img src="${thumb}" alt="">
  </div>
  <div class="cart-item__title">${title}</div>
  <div class="cart-item__count">
    <button class="cart-item__count-reduce"> <i class="fas fa-minus"></i> </button>
    <input type="text" placeholder="0" value="1">
    <button class="cart-item__count-increase"> <i class="fas fa-plus"></i> </button>
  </div>
  <div class="cart-item__price"><span>${price}</span> грн</div>
  <button class="cart-item__remove-btn"><i class="fas fa-times"></i></button>
  `;

  changeOpenCartBtnValue(1);
  return addingItem;
}
document.addEventListener('DOMContentLoaded', e => {
  catalogItems();
  initCatalogItemViewer();
});