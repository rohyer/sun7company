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