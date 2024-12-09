import { gsap } from "gsap";
import { ScrollTrigger } from "gsap/ScrollTrigger";
import Lenis from 'lenis';

// GSAP horizontal scroll effect (this will still run on the about page)
gsap.registerPlugin(ScrollTrigger);

// Initialize Lenis only if it's NOT the about page
const lenis = new Lenis({
	duration: 1.1,
	smooth: true,
	//easing: easeOutExpo(),
});

function raf(time) {
	lenis.raf(time);
	requestAnimationFrame(raf);
}
requestAnimationFrame(raf);

// GSAP ScrollTrigger integration with Lenis
lenis.on('scroll', ScrollTrigger.update);

gsap.ticker.add((time) => {
	lenis.raf(time * 1000);
});

gsap.ticker.lagSmoothing(0);

// Back to top scroll functionality
document.getElementById('back-to-top').addEventListener('click', function (event) {
    event.preventDefault();
	lenis.scrollTo(0, { offset: 0, duration: 2.5 });
});




// Horizontal Scroll for .history-hospital
const scrollContainer = document.querySelector('.history-hospital div');

if (scrollContainer) {
	const scrollWidth = scrollContainer.scrollWidth;
	const viewportWidth = window.innerWidth;

	gsap.to(scrollContainer, {
		x: -(scrollWidth - viewportWidth),
		ease: 'none',
		scrollTrigger: {
			trigger: '.history-hospital',
			start: 'bottom bottom', // Start horizontal scroll when the bottom of the section hits the bottom of the viewport
			pin: true,
			scrub: 1,
			end: () => "+=" + scrollWidth // Sets the scrolling distance
		}
	});
}

// Horizontal Scroll for .history-container 
let historyContainer = gsap.utils.toArray(".history-container");

historyContainer.forEach((container) => {
 let panels = container.querySelectorAll(".history-panel");

  gsap.to(panels, {
    xPercent: -100 * (panels.length - 1),
    ease: "none",
    scrollTrigger: {
      trigger: container,
      start: "top top",
      pin: true,
      scrub: true,
      // base vertical scrolling on how wide the container is so it feels more natural.
      end: () => "+=" + container.offsetWidth,
      invalidateOnRefresh: true,
    }
  });
});

/* gsap.utils.toArray(".history-panel div").forEach((panel, i) => {
	ScrollTrigger.create({
		trigger: panel,
		start: 'bottom bottom',
		pin: true,
	})
})  */


if ( $(".page-template-page-home")[0] ) {

	gsap.from(['.section-hero--title', '.section-hero--boat'], {
		duration: 1,
		y: 50,
		stagger: 0.3,
		opacity: 0,
		autoAlpha: 0
	});

	/*gsap.from('.selector', {
		autoAlpha: 0,
		//opacity: 0,
		x: 70,
		//stagger: 0.2,
		scrollTrigger: {
			trigger: '.selector',
			start: 'top 60%',
			scrub: true,
			end: '+=400',
			markers: true
			
		},
	});*/
	var introtl = gsap.timeline({
    scrollTrigger: {
      trigger: ".section-intro",
      scrub: 1.2,
      pin: true,
      start: "top top",
      end: "+=150%"
    },
		defaults: {
			//ease: "power2",
		}
  });

	introtl
		.set(".highlights-items li:nth-child(1)", {fontSize: '1.2rem', color:'#34302D'})
		.add("image1Fade")
		.to(".section-intro .intro-image-1", {x:-200, autoAlpha: 0})

		.add("image2Enter")
		.to(".section-intro .intro-image-2", {x:0}, "image1Fade")
		.to(".highlights-items li:nth-child(1)", {fontSize: '1rem', color:'#8E827B'}, '<')
		.to(".highlights-items li:nth-child(2)", {fontSize: '1.2rem', color:'#34302D'}, '<')
		.to(".section-intro .intro-image-3", {x:'50%'}, "<")
		.to(".section-intro .intro-image-4", {x:'100%'}, "<")
		.to(".section-intro .intro-image-5", {x:'150%'}, "<")

		.add("image2Fade")
		.to(".section-intro .intro-image-2", {x:-200, autoAlpha: 0})
		.to(".highlights-items li:nth-child(2)", {fontSize: '1rem', color:'#8E827B'}, '<')
		.to(".highlights-items li:nth-child(3)", {fontSize: '1.2rem', color:'#34302D'}, '<')
		.to(".section-intro .intro-image-3", {x:0}, "image2Fade")
		.to(".section-intro .intro-image-4", {x:'50%'}, "<")
		.to(".section-intro .intro-image-5", {x:'100%'}, "<")
		
		.add("image3Fade")
		.to(".section-intro .intro-image-3", {x:-200, autoAlpha: 0})
		.to(".highlights-items li:nth-child(3)", {fontSize: '1rem', color:'#8E827B'}, '<')
		.to(".highlights-items li:nth-child(4)", {fontSize: '1.2rem', color:'#34302D'}, '<')
		.to(".section-intro .intro-image-4", {x:0}, "image3Fade")
		.to(".section-intro .intro-image-5", {x:'50%'}, "<")
		
		.add("image4Fade")
		.to(".section-intro .intro-image-4", {x:-200, autoAlpha: 0})
		.to(".highlights-items li:nth-child(4)", {fontSize: '1rem', color:'#8E827B'}, '<')
		.to(".highlights-items li:nth-child(5)", {fontSize: '1.2rem', color:'#34302D'}, '<')
		.to(".section-intro .intro-image-5", {x:0}, "image4Fade");


		gsap.to(".room-text-overlay", { 
			scrollTrigger: {
				trigger: '.section-room-teaser',
				scrub: 2,
				start: "20% 50%",
				end: "bottom+=100% 80%",
			},
			x: '-100%',
			ease: "power2"
		});
	

}
if ( $(".fade-in")[0] ) {
	var fadeInItems = gsap.utils.toArray('.fade-in');

	fadeInItems.forEach((fadeInItem) => {
		gsap.from(fadeInItem, {
			autoAlpha: 0,
			y: 60,
			//stagger: 0.3,
			scrollTrigger: {
				trigger: fadeInItem,
				start: 'top 90%',
				scrub: true,
				end: '+=300',
				//markers: true,
				//stagger: 0.3,
			},

		});
	});
}
if ( $(".fade-in--noscroll")[0] ) {
	//console.log($(".fade-in--noscroll"));
	var fadeInItemsNs = gsap.utils.toArray('.fade-in--noscroll');
	gsap.from(fadeInItemsNs, {
		autoAlpha: 0,
		y: 50,
		stagger: 0.3,
		duration: 1,
		/*scrollTrigger: {
			trigger: fadeInItemsNs,
			start: '50px 65%',
			//scrub: true,
			end: '+=400',
			//markers: true
			
		},*/
	});
}

if ( $(".fade-in--n")[0] ) {
	//console.log($(".fade-in--noscroll"));
	var fadeInItemsNs = gsap.utils.toArray('.fade-in--n');
	gsap.from(fadeInItemsNs, {
		autoAlpha: 0,
		y: 50,
		stagger: 0.3,
		duration: 1,
		/*scrollTrigger: {
			trigger: fadeInItemsNs,
			start: '50px 65%',
			//scrub: true,
			end: '+=400',
			//markers: true
			
		},*/
	});
}
