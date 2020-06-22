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

$('.related ul').owlCarousel({
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
		992:{
			items: 3
		},
		1199:{
			items: 4
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

// FUNÇÃO PARA AJUSTAR COL
function resizeCheckout() {
	const customerDetails1 = doc.querySelector('#customer_details .col-1');
	const customerDetails2 = doc.querySelector('#customer_details .col-2');
	customerDetails1.classList.remove('col-1');
	customerDetails2.classList.remove('col-2');
	customerDetails1.classList.add('col-12');
	customerDetails2.classList.add('col-12');

	const generalCustomerDetails = doc.getElementById("customer_details");
	const orderReview = doc.getElementById("order_review");
	generalCustomerDetails.classList.add("col-lg-6");
	generalCustomerDetails.classList.add("col-12");
	orderReview.classList.add("col-lg-6");
	orderReview.classList.add("col-12");
}
for (let i = 0; i < body.classList.length; i++) {
	if (body.classList[i] == 'woocommerce-checkout') {
		resizeCheckout();
	}
}

// FUNÇÃO PARA AJUSTA COL
function resizeAccountAdress() {
	const woocommerceAdress1 = doc.querySelector('.woocommerce-MyAccount-content .u-columns.woocommerce-Addresses .u-column1.col-1');
	const woocommerceAdress2 = doc.querySelector('.woocommerce-MyAccount-content .u-columns.woocommerce-Addresses .u-column2.col-2');
	
	woocommerceAdress1.classList.remove('col-1');
	woocommerceAdress1.classList.add('col-lg-7');
	woocommerceAdress1.classList.add('col-12');
	woocommerceAdress2.classList.remove('col-2');
	woocommerceAdress2.classList.add('col-lg-5');
	woocommerceAdress2.classList.add('col-12');
}
for (let i = 0; i < body.classList.length; i++) {
	if (body.classList[i] == 'woocommerce-edit-address') {
		resizeAccountAdress();
	}
}


// FUNÇÃO PARA AJUSTAR COL
function resizeLoginRegister() {
	const customerLogin = doc.querySelector('#customer_login');
	for (let i = 0; i < body.classList.length; i++) {
		if (body.classList[i] == 'woocommerce-account' && customerLogin != null) {
			const customerAccount1 = doc.querySelector('#customer_login .col-1');
			const customerAccount2 = doc.querySelector('#customer_login .col-2');
			customerAccount1.classList.remove('col-1');
			customerAccount1.classList.add('col-lg-6');
			customerAccount1.classList.add('col-12');
			customerAccount2.classList.remove('col-2');
			customerAccount2.classList.add('col-lg-6');
			customerAccount2.classList.add('col-12');
		} else if (body.classList[i] == 'page-id-1820') {
			const uColumn2 = doc.querySelector('#content-box-register .woocommerce .u-column2');
			const uColumn2H2 = doc.querySelector('#content-box-register .woocommerce .u-column2 h2');
			const uColumn2Form = doc.querySelector('#content-box-register .woocommerce .u-column2 form');
			
			uColumn2.removeChild(uColumn2H2);
			uColumn2.removeChild(uColumn2Form);

			const woocommerce = doc.querySelector('#content-box-register .woocommerce');
			const customerAccount1 = doc.querySelector('#customer_login .u-column1');
			const customerAccount2 = doc.querySelector('#customer_login .u-column2');
			customerAccount1.classList.remove('col-1');
			customerAccount1.classList.add('col-12');
			customerAccount1.classList.add('col-lg-6');

			customerAccount2.classList.remove('col-2');
			customerAccount2.classList.add('col-12');
			customerAccount2.classList.add('col-lg-6');
			woocommerce.classList.add("col-12");

			// CRIAÇÃO DA DIV FRIST REGISTER
			const firstRegister = doc.createElement('div');
			firstRegister.id = "first-register";

			const firstRegisterH6 = doc.createElement('h6');
			firstRegisterH6.innerHTML = 'Primeira compra';

			const firstRegisterA = doc.createElement('a');
			firstRegisterA.setAttribute("data-toggle", "modal");
			firstRegisterA.setAttribute("data-target", "#registerModal");
			firstRegisterA.innerHTML = "Cadastre-se"

			const firstRegisterText = doc.createElement('div');
			firstRegisterText.id = "text-register";

			const firstRegisterI = doc.createElement('i');
			firstRegisterI.classList.add('fas');
			firstRegisterI.classList.add('fa-shopping-cart');

			const firstRegisterSpan = doc.createElement('span');
			firstRegisterSpan.innerHTML = "Cadastre seu endereço para facilitar nas suas próximas compras";

			customerAccount2.appendChild(firstRegister);
			firstRegisterText.appendChild(firstRegisterI);
			firstRegisterText.appendChild(firstRegisterSpan);
			firstRegister.appendChild(firstRegisterH6);
			firstRegister.appendChild(firstRegisterA);
			firstRegister.appendChild(firstRegisterText);

			
			// ALTERAÇÕES NO MODAL
			const uColumn1 = doc.querySelector('#registerModal .woocommerce .u-column1');
			const uColumn1H2 = doc.querySelector('#registerModal .woocommerce .u-column1 h2');
			const uColumn1Form = doc.querySelector('#registerModal .woocommerce .u-column1 form');
			
			uColumn1.removeChild(uColumn1H2);
			uColumn1.removeChild(uColumn1Form);


			const customerAccountModal1 = doc.querySelector('#registerModal #customer_login .u-column1');
			const customerAccountModal2 = doc.querySelector('#registerModal #customer_login .u-column2');
			customerAccountModal1.classList.remove('col-1');
			customerAccountModal2.classList.remove('col-2');
			customerAccountModal2.classList.add('col-12');

			const privacyPolicy = doc.querySelector('#registerModal .woocommerce-privacy-policy-text').innerHTML = "";
		}
	}	
}
resizeLoginRegister();


// FUNÇÃO PARA TRANSFORMAR PRODUTOS RELACIONADOS EM CARROSSEL
function relatedProductsSlider() {
	const relatedProducts = doc.querySelector('section.related.products ul.products');
	relatedProducts.classList.add('owl-carousel');
	relatedProducts.classList.add('owl-theme');
}
for (let i = 0; i < body.classList.length; i++) {
	if (body.classList[i] == 'single-product') {
		relatedProductsSlider();
	}
}