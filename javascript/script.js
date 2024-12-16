/**
 * Front-end JavaScript
 *
 * The JavaScript code you place here will be processed by esbuild. The output
 * file will be created at `../theme/js/script.min.js` and enqueued in
 * `../theme/functions.php`.
 *
 * For esbuild documentation, please see:
 * https://esbuild.github.io/
 */

const navbarToggler = document.getElementById('navbar-toggler');
const closeNavBtn = document.querySelector('.close');
const nav = document.getElementById('navigation');
const navLinks = document.getElementById('nav-links');
const inputSearch = document.getElementById('input-search');
const inputSearchBar = document.getElementById('search-bar');
const searchToggler = document.getElementById('search-toggler');
const closeSearchBtn = document.getElementById('search-close');
const faqToggler = document.getElementById('faqToggler');

document.querySelectorAll('.toggle-component').forEach((component) => {
	component.addEventListener('click', function () {
		const icon = component.querySelector('.toggle-icon');
		const text = component.querySelector('.toggle-text');

		if (icon.classList.contains('rotate-180')) {
			icon.classList.remove('rotate-180');
		} else {
			icon.classList.add('rotate-180');
		}

		if (text.classList.contains('hidden')) {
			text.classList.remove('hidden');
			text.classList.add('block');
		} else {
			text.classList.remove('block');
			text.classList.add('hidden');
		}
	});
});

//input search funtion
searchToggler.onclick = function () {
	inputSearch.classList.add('block');
	inputSearch.classList.remove('hidden');
	searchToggler.classList.remove('block');
	searchToggler.classList.add('hidden');
	closeSearchBtn.classList.add('block');
	closeSearchBtn.classList.remove('hidden');
	inputSearchBar.focus();
};

closeSearchBtn.onclick = function () {
	inputSearch.classList.add('hidden');
	inputSearch.classList.remove('block');
	searchToggler.classList.remove('hidden');
	searchToggler.classList.add('block');
	closeSearchBtn.classList.add('hidden');
	closeSearchBtn.classList.remove('block');
};

// open nav function
navbarToggler.onclick = function (e) {
	e.preventDefault();
	nav.classList.add('block');
	nav.classList.remove('hidden');
	navLinks.classList.remove('text-white');
	navLinks.classList.add('text-black');
};
// close nav functin
closeNavBtn.onclick = function (e) {
	e.preventDefault();
	nav.classList.add('hidden');
	nav.classList.remove('block');
	navLinks.classList.remove('text-black');
	navLinks.classList.add('text-white');
};

import Swiper from 'swiper/bundle';
import 'swiper/css/bundle';

new Swiper('#testimonial-swiper', {
	pagination: {
		el: '.swiper-pagination',
		type: 'bullets',
	},
});

// FAQ
document.addEventListener('DOMContentLoaded', function () {
	// Selecciona todos los acordeones
	const accordions = document.querySelectorAll('[data-accordion]');

	accordions.forEach((accordion, index) => {
		const button = accordion.querySelector('button');
		const content = accordion.querySelector('[data-content]');

		button.addEventListener('click', () => {
			accordions.forEach((otherAccordion, otherIndex) => {
				const otherContent =
					otherAccordion.querySelector('[data-content]');

				if (index === otherIndex) {
					content.classList.toggle('hidden');
				} else {
					otherContent.classList.add('hidden');
				}
			});
		});
	});
});

// Add this to your script.js file
document.addEventListener('DOMContentLoaded', function () {
    // Get the product search form
    const productSearchForm = document.querySelector('form[action="/productos"]');
    
    if (productSearchForm) {
        // Get all select elements within the form
        const selects = productSearchForm.querySelectorAll('select');
        
        // Add change event listener to each select
        selects.forEach(select => {
            select.addEventListener('change', () => {
                productSearchForm.submit();
            });
        });
    }
});