import CustomSelect from 'custom-select';
import {cartItems} from './cart.js';
function initCheckout() {
	const checkout = document.querySelector('.checkout') ?? null;
	if(checkout === null) return;
	initCheckoutForm();
	const closeBtn = checkout.querySelector('.checkout__close-btn');
	closeBtn.addEventListener('click', e => {
		checkout.classList.remove('checkout--visible');
		const cart = document.querySelector('.cart');
		cart.classList.remove('cart--checkout');
	});
	const checkoutBtn = checkout.querySelector('.checkout__submit');
	checkoutBtn.addEventListener('click', e => {
		e.preventDefault();
		const msg = document.querySelector('.checkout-message');
		msg.classList.add('checkout-message--visible');
        sendCheckoutInfo();
	})
	const checkoutMessage = document.querySelector('.checkout-message');
	const checkoutMsgClose = checkoutMessage.querySelector('.checkout-message__close-btn');
	checkoutMsgClose.addEventListener('click', e => {
		checkoutMessage.classList.remove('checkout-message--visible');
	});
}
function sendCheckoutInfo() {
    let form = document.querySelector('.checkout__form'),
    action = form.getAttribute('action'),
    name = form.querySelector('[name="name"]').value,
    phone = form.querySelector('[name="phone"]').value,
    email = form.querySelector('[name="email"]').value,
    payment = form.querySelector('[name="payment"]'),
    shipping = form.querySelector('[name="shipping"]'),
    area = form.querySelector('[name="area"]'),
    warehouse = form.querySelector('[name="warehouse"]'),
    city = form.querySelector('[name="city"]');
    payment = payment.options[payment.selectedIndex].text;
    shipping = shipping.options[shipping.selectedIndex].text;
    area = area.options[area.selectedIndex].text;
    warehouse = warehouse.options[warehouse.selectedIndex].text;
    city = city.options[city.selectedIndex].text;

    fetch(action, {
	  method: 'POST',
	  mode: 'cors',
	  cache: 'no-cache',
	  credentials: 'same-origin',
	  headers: {
	    'Content-Type': 'application/json'
	  },
	  redirect: 'follow',
	  referrerPolicy: 'no-referrer',
	  body: JSON.stringify({
          '_token': document.querySelector('input[name="_token"]').value,
          'name': name,
          'phone': phone,
          'email': email,
          'payment': payment,
          'shipping': shipping,
          'area': area,
          'city': city,
          'warehouse': warehouse,
          'items': cartItems
      })
	})
    .then(response => response.text())
      .then(data => console.log(data));

}
function initCheckoutForm() {
	const checkoutForm = document.querySelector('.checkout__form') ?? null;
	if(checkoutForm === null) return;
	const selects = checkoutForm.querySelectorAll('select');
	selects.forEach(select => {
		CustomSelect(select);
		if(select.getAttribute('id') == 'checkout-shipping') {
			select.addEventListener('change', selectShipping);
		}
	});
}

function novaPoshtaApi() {

	const getJSON = (model, method, props = {}) => ({
		"apiKey": "28300adb08ca6774c1522ce120a3ee18",
		"modelName": model,
		"calledMethod": method,
		"methodProperties": props
	});
	const NPrequest = (model, method, props) => (fetch('https://api.novaposhta.ua/v2.0/json/', {
	  method: 'POST',
	  mode: 'cors',
	  cache: 'no-cache',
	  credentials: 'same-origin',
	  headers: {
	    'Content-Type': 'application/json'
	  },
	  redirect: 'follow',
	  referrerPolicy: 'no-referrer',
	  body: JSON.stringify(getJSON(model, method, props))
	})
	.then(response => response.json()));

	NPrequest('Address', 'getCities')
	.then(citiesData => {
		NPrequest('Address', 'getAreas')
		.then(areasData => {
			const areas = [];
			const sortedAreas = Array.from(areasData.data);
			const newAreas = [];
			sortedAreas.forEach(area => {
				if(area.Description != 'АРК') {
					areas[area.Description] = [];
					newAreas.push(area);
				}
			});
			newAreas.forEach(area => {
				Array.from(citiesData.data).forEach(city => {
					if(area.Description == city.AreaDescription)
						if(areas[area.Description] == [])
							areas[area.Description] = [...city];
						else
							areas[area.Description].push(city);
				});
			});
		});
	});
}

function selectShipping(event) {
	const getJSON = (model, method, props = {}) => ({
		"apiKey": "28300adb08ca6774c1522ce120a3ee18",
		"modelName": model,
		"calledMethod": method,
		"methodProperties": props
	});
	const NPrequest = (model, method, props) => (fetch('https://api.novaposhta.ua/v2.0/json/', {
	  method: 'POST',
	  mode: 'cors',
	  cache: 'no-cache',
	  credentials: 'same-origin',
	  headers: {
	    'Content-Type': 'application/json'
	  },
	  redirect: 'follow',
	  referrerPolicy: 'no-referrer',
	  body: JSON.stringify(getJSON(model, method, props))
	}).then(response => response.json()));
	const selectedIndex = this.selectedIndex;
	const selectedOption = this.options[selectedIndex].value;
	switch(selectedOption) {
		case 'ukr_poshta':
		case 'justin':
		case 'nova_poshta':
			NPrequest('Address', 'getAreas')
			.then(areas => {
				const newAreas = Array.from(areas.data).filter(item => item.Description != 'АРК');
				createSelect('checkout-area', 'area', 'Область', newAreas, selectArea);
				this.removeEventListener('change', selectShipping);
			})
		break;
	}


	function selectArea(event) {
		const selectedIndex = this.selectedIndex;
		const selectedOption = this.options[selectedIndex].value;
		NPrequest('Address', 'getCities')
			.then(citiesData => {
				const cities = [];
				citiesData.data.forEach(city => {
					if(city.Area == selectedOption) {
						cities.push(city);
					}
				});
				createSelect('checkout-city', 'city', 'Населенний пункт', cities, selectCity);
			});
		this.removeEventListener('change', selectArea);
		this.addEventListener('change', changeArea);
	}
	function selectCity(event) {
		const selectedIndex = this.selectedIndex;
		const selectedOption = this.options[selectedIndex].value;
		NPrequest('Address', 'getWarehouses', {
			"CityRef": selectedOption
		})
		.then(warehousesData => {

			createSelect('checkout-warehouse', 'warehouse', 'Відділення', warehousesData.data, null);
		});
		this.removeEventListener('change', selectCity);
		this.addEventListener('change', changeCity);
	}
	function changeShipping() {

	}
	function changeArea() {
		const selectedIndex = this.selectedIndex;
		const selectedOption = this.options[selectedIndex].value;
		NPrequest('Address', 'getCities')
			.then(citiesData => {
				const cities = [];
				citiesData.data.forEach(city => {
					if(city.Area == selectedOption) {
						cities.push(city);
					}
				});
				changeSelect('#checkout-city', cities);
			});
	}
	function changeCity() {
		const selectedIndex = this.selectedIndex;
		const selectedOption = this.options[selectedIndex].value;
		NPrequest('Address', 'getWarehouses', {
			"CityRef": selectedOption
		})
		.then(warehousesData => {
			changeSelect('#checkout-warehouse', warehousesData.data);
		});
	}
	function createSelect(id, name, labelText, items, callback = null, divClass="checkout__select") {
		const div = document.createElement('div');
		div.classList.add(divClass);
		const select = document.createElement('select');
		select.setAttribute('id', id);
		select.setAttribute('name', name);
		let string = ``;
		items.forEach(item => {
			string += `<option value="${item.Ref}">${item.Description}</option>`;
		});
		select.innerHTML = string;
		select.addEventListener('change', callback);
		div.innerHTML = `
		<label for="${id}">${labelText}</label>
		`;
		div.append(select);
		CustomSelect(select);
		document.querySelector('.checkout__group').append(div);
	}
	function changeSelect(selector, items) {
		const select = document.querySelector(selector).customSelect;
		select.empty();
		items.forEach(item => {
			let option = document.createElement('option')
			option.text = item.Description;
			option.value = item.Ref;
			select.append(option);
		});
	}
}
document.addEventListener('DOMContentLoaded', e => {
	initCheckout();
	// novaPoshtaApi();
});
