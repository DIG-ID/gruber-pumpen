import { gsap } from "gsap";
import { ScrollTrigger } from "gsap/ScrollTrigger";
import Lenis from "lenis";

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
lenis.on("scroll", ScrollTrigger.update);

gsap.ticker.add((time) => {
  lenis.raf(time * 1000);
});

gsap.ticker.lagSmoothing(0);

// Back to top scroll functionality
const backToTopButton = document.getElementById("back-to-top");
if (backToTopButton) {
  backToTopButton.addEventListener("click", function (event) {
    event.preventDefault();
    lenis.scrollTo(0, { offset: 0, duration: 2.5 });
  });
}

if ($(".fade-in")[0]) {
  var fadeInItems = gsap.utils.toArray(".fade-in");

  fadeInItems.forEach((fadeInItem) => {
    gsap.from(fadeInItem, {
      autoAlpha: 0,
      y: 60,
      //stagger: 0.3,
      scrollTrigger: {
        trigger: fadeInItem,
        start: "top 90%",
        scrub: true,
        end: "+=300",
        //markers: true,
        //stagger: 0.3,
      },
    });
  });
}
if ($(".fade-in--noscroll")[0]) {
  //console.log($(".fade-in--noscroll"));
  var fadeInItemsNs = gsap.utils.toArray(".fade-in--noscroll");
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

if ($(".fade-in--n")[0]) {
  //console.log($(".fade-in--noscroll"));
  var fadeInItemsNs = gsap.utils.toArray(".fade-in--n");
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
/* 
if ($(".number-animate")[0]) {
    var numberItems = gsap.utils.toArray('.number-animate');

    numberItems.forEach((numberItem) => {
        const targetValue = parseInt(numberItem.dataset.target); // Get the target number from a data attribute

        gsap.fromTo(numberItem, {
            innerText: 0,
        }, {
            innerText: targetValue,
            duration: 1, // Duration of the animation (2 seconds in this case)
            ease: "power1.out", // Easing function for smooth animation
            roundProps: "innerText", // Ensures numbers animate smoothly
            scrollTrigger: {
                trigger: numberItem,
                start: 'top 80%', // Trigger when the element reaches 80% from the top of the viewport
                once: true, // Only trigger the animation once
                // No "scrub" here, so the animation will not be tied to the scroll position
            },
        });
    });
} */

if ($(".count-animation")[0]) {
  var numberItems = gsap.utils.toArray(".count-animation");

  numberItems.forEach((numberItem) => {
    const targetValue = parseInt(numberItem.dataset.target); // Get the target number from a data attribute

    // Set the initial number to 0
    gsap.set(numberItem, { innerText: 0 });

    // Set up the ScrollTrigger animation
    gsap.fromTo(
      numberItem,
      {
        innerText: 0,
      },
      {
        innerText: targetValue,
        duration: 1, // Duration of the animation (2 seconds)
        ease: "power1.out", // Easing function for smooth animation
        roundProps: "innerText", // Ensures numbers animate smoothly
        scrollTrigger: {
          trigger: numberItem,
          start: "top 95%", // Trigger when the element reaches 80% of the viewport height
          end: "bottom 5%", // Optionally, set an end trigger when it leaves the viewport
          once: false, // Ensure the animation triggers every time the element enters the viewport
          onEnter: () => {
            // Reset the number to 0 every time it enters the viewport
            gsap.set(numberItem, { innerText: 0 });
            gsap.to(numberItem, {
              innerText: targetValue,
              duration: 1,
              ease: "power1.out",
              roundProps: "innerText",
            });
          },
          onLeaveBack: () => {
            // Optionally reset the number when the element leaves the viewport
            gsap.set(numberItem, { innerText: 0 });
          },
        },
      }
    );
  });
}
