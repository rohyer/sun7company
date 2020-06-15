$('#main-banners ul').owlCarousel({
	loop: true,
	autoplay: true,
	autoplayTimeout: 2500,
	autoplayHoverPause: true,
	autoplaySpeed: false,
	dots: false,
	navText: [" ", " "],
	responsiveClass: true,
	responsive:{
		0:{
			items: 1
		},
		600:{
			items: 1
		},
		1000:{
			items: 1
		}
	}
});

$('#brands-banners ul').owlCarousel({
	loop: true,
	autoplay: false,
	// autoplayTimeout: 2500,
	// autoplaySpeed: true,
	dots: false,
	navText: [" ", " "],
	responsiveClass: true,
	responsive:{
		0:{
			items: 2
		},
		600:{
			items: 2
		},
		620:{
			items: 3
		},
		900:{
			items: 4
		},
		992:{
			items: 5
		},
		1199:{
			items: 6
		}
	}
});

$('#testimonials ul').owlCarousel({
	loop: true,
	autoplay: true,
	autoplayTimeout: 2500,
	autoplayHoverPause: true,
	autoplaySpeed: 750,
	dots: false,
	navText: [" ", " "],
	responsiveClass: true,
	responsive:{
		0:{
			items: 1
		},
		769:{
			items: 2
		},
		1000:{
			items: 3
		}
	}
});

const doc = document;
const body = doc.getElementsByTagName('body')[0];

// FUNÇÃO PARA ABRIR MENU RESPONSIVO

function sizeMenuResponsive() {
	const responsiveMenuHeight = document.getElementById('responsive-menu')
	const windowHeightMenu = window.innerHeight;
	const windowHeightMenuPX = windowHeightMenu - 55;
	const windowHeightMenuFinal = windowHeightMenuPX + 'px';

	responsiveMenuHeight.style.height = windowHeightMenuFinal;
}
sizeMenuResponsive();

const btnIcon = document.getElementById('btn-icon');
btnIcon.addEventListener('click', openCloseMenu)
function openCloseMenu(){
	let responsiveMenu = document.getElementById('responsive-menu')
	let body = document.getElementsByTagName('body')[0]
	console.log(btnIcon.className)

	if (btnIcon.className == 'menu-closed') {
		btnIcon.classList.remove('menu-closed')
		btnIcon.classList.add('menu-opened')
		responsiveMenu.classList.add('open-menu-responsive')
		body.style.overflow = 'hidden'
	} else if (btnIcon.className == 'menu-opened') {
		btnIcon.classList.remove('menu-opened')
		btnIcon.classList.add('menu-closed')
		responsiveMenu.classList.remove('open-menu-responsive')
		body.style.overflow = 'initial'
	}
}

// FUNÇÃO PARA ABRIR SEGUNDO NÍVEL DO MENU RESPOSIVO
function openCloseSecondLevelMenu() {
	const mobileMenuArrowDown = doc.getElementsByClassName('mobile-menu-arrow-down');
	const mobileMenuArrowDownLength = mobileMenuArrowDown.length;
	
	for (let i = 0; i < mobileMenuArrowDownLength; i++) {
		mobileMenuArrowDown[i].addEventListener("click", function(e) {
			const closeSecondLevel = doc.getElementsByClassName('listener-second-level')[i];
			
			// let a = closeSecondLevel.classList[0];
			// console.log(a);

			if (closeSecondLevel.classList[1] == 'closed-mobile-second-level') {
				mobileMenuArrowDown[i].classList.remove('fa-chevron-down');
				mobileMenuArrowDown[i].classList.add('fa-chevron-up');
				closeSecondLevel.classList.remove('closed-mobile-second-level');
				closeSecondLevel.classList.add('opened-mobile-second-level');
			} else if (closeSecondLevel.classList[1] == 'opened-mobile-second-level') {
				mobileMenuArrowDown[i].classList.remove('fa-chevron-up');
				mobileMenuArrowDown[i].classList.add('fa-chevron-down');
				closeSecondLevel.classList.remove('opened-mobile-second-level');
				closeSecondLevel.classList.add('closed-mobile-second-level');
			}
		});
	}
}
openCloseSecondLevelMenu();

// FUNÇÃO PARA ABRIR E FECHAR FILTRO MOBILE
function openCloseFilter() {
	const showFilter = doc.getElementById('show-filter');
	showFilter.addEventListener('click', function(e) {
		const mobileFilter = doc.getElementById('mobile-filter');
		const arrowFilter = doc.getElementById('arrow-filter');

		if (mobileFilter.className == 'closed-filter') {
			mobileFilter.classList.remove('close-filter');
			arrowFilter.classList.remove('fa-chevron-down');
			mobileFilter.classList.add('opened-filter');
			arrowFilter.classList.add('fa-chevron-up');
		} else {
			mobileFilter.classList.remove('opened-filter');
			arrowFilter.classList.remove('fa-chevron-up');
			mobileFilter.classList.add('closed-filter');
			arrowFilter.classList.add('fa-chevron-down');
		}
	});
}
if (body.classList[1] == 'tax-product_cat' || body.classList[2] == 'search-results') {
	openCloseFilter();
}

function resizeCheckout() {
	const customerDetails1 = doc.querySelector('#customer_details .col-1');
	const customerDetails2 = doc.querySelector('#customer_details .col-2');
	customerDetails1.classList.remove('col-1');
	customerDetails2.classList.remove('col-2');
	customerDetails1.classList.add('col-12');
	customerDetails2.classList.add('col-12');
}
for (let i = 0; i < body.classList.length; i++) {
	if (body.classList[i] == 'woocommerce-checkout') {
		resizeCheckout();
	}
}

function resizeLoginRegister() {
	const woocommerce = doc.querySelector('.content-box-register .woocommerce');
	const customerAccount1 = doc.querySelector('#customer_login .col-1');
	const customerAccount2 = doc.querySelector('#customer_login .col-2');
	customerAccount1.classList.remove('col-1');
	customerAccount1.classList.add('col-12');
	customerAccount2.classList.remove('col-2');
	woocommerce.classList.add("col-6")
}
for (let i = 0; i < body.classList.length; i++) {
	if (body.classList[i] == 'page-id-1820') {
		resizeLoginRegister();
	}
}

function resizeAccount() {
	const customerAccount1 = doc.querySelector('#customer_login .col-1');
	const customerAccount2 = doc.querySelector('#customer_login .col-2');
	customerAccount1.classList.remove('col-1');
	customerAccount1.classList.add('col-6');
	customerAccount2.classList.remove('col-2');
	customerAccount2.classList.add('col-6');
}
for (let i = 0; i < body.classList.length; i++) {
	if (body.classList[i] == 'woocommerce-account') {
		resizeAccount();
	}
}


// $('#tshirts ul').owlCarousel({
// 	loop: false,
// 	autoplay: true,
// 	autoplayTimeout: 2000,
// 	autoplaySpeed: true,
// 	dots: true,
// 	navText: [" ", " "],
// 	reponsiveClass: true,
// 	responsive:{
// 		0:{
// 			items: 2
// 		},
// 		600:{
// 			items: 6
// 		},
// 		1000:{
// 			items: 6
// 		}
// 	}
// });


// window.addEventListener('scroll', function(e) {
//     let y = window.pageYOffset
    
//     if (y >= 200) {
//         let header = window.document.querySelector('header')
//         header.classList.add('header-fixed')
//     } else if (y < 200) {
//         let header = window.document.querySelector('header')
//         header.classList.remove('header-fixed')
//     }
// })

// var menu1 = window.document.getElementById('menu-item-13')

// menu1.addEventListener('click', function(e) {
//     window.scrollTo(0, 500)
// })