$('#main-banners ul').owlCarousel({
	loop: false,
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
	loop: false,
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
			items: 6
		},
		1000:{
			items: 6
		}
	}
});

$('#testimonials ul').owlCarousel({
	loop: true,
	autoplay: false,
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
			items: 2
		},
		1000:{
			items: 3
		}
	}
});

const doc = document;


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