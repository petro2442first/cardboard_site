function initCart() {
	const cart = document.querySelector('.cart') ?? null;
	if(cart === null) return;
	cart.addEventListener('click', event => {
		if(event.target.tagName == 'BUTTON') {
			const btn = event.target;
			switch(btn.className) {
				case 'cart-item__count-reduce':
					const input1 = btn.parentElement.querySelector('input');
					input1.value =
						Number(input1.value) == 1 
						? Number(input1.value) 
						: Number(input1.value) - 1;
					break;
				case 'cart-item__count-increase':
					const input2 = btn.parentElement.querySelector('input');
					input2.value = Number(input2.value) + 1;
					break;
				case 'cart-item__remove-btn':
					btn.parentElement.classList.add('removed');
					const index = btn.parentElement.dataset.index;
					const catalogItem = document.querySelector('.catalog__container').children[Number(index)];
					const addToCartBtn = catalogItem.querySelector('.catalog-item__add-to-cart');

					addToCartBtn.innerHTML = 'Додати у кошик';
					setTimeout(() => {
						addToCartBtn.classList.remove('added');
					}, 250);

					changeOpenCartBtnValue(-1);
					setTimeout(() => {
						btn.parentElement.remove();
					}, 500);
					break;
				case 'cart__checkout-btn':
					const checkoutModal = document.querySelector('.checkout');
					checkoutModal.classList.add('checkout--visible');
					checkoutModal.classList.add('checkout--checkout');
					cart.classList.remove('cart--visible');
					cart.classList.add('cart--checkout');
					saveCart(cart.querySelector('.cart__list'));
					break;
			}
		}
	});
	const openCartBtn = document.querySelector('#open-cart');
	openCartBtn.addEventListener('click', e => {
		cart.classList.add('cart--visible');
	});
	const closeBtn = cart.querySelector('.cart__close-btn');
	closeBtn.addEventListener('click', e => {
		cart.classList.remove('cart--visible');
	});
}
export var cartItems = [];
function saveCart(list) {
	const items = list.querySelectorAll('.cart-item');
	items.forEach(item => {
		cartItems.push({
			thumb: item.querySelector('.cart-item__thumb img').getAttribute('src'),
			title: item.querySelector('.cart-item__title').innerText,
			price: item.querySelector('.cart-item__price span').innerText,
			count: item.querySelector('.cart-item__count input').value
		});
		 
	});
}
export function changeOpenCartBtnValue(value) {
	const btn = document.querySelector('#open-cart');
	if(!btn.dataset.count) {
		btn.classList.add('show');
	}
	btn.dataset.count = 
	Number(btn.dataset.count ? btn.dataset.count : 0) + value;
}
document.addEventListener('DOMContentLoaded', e => {
	initCart();
});