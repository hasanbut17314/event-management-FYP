// Lenis ---- smooth scroll ===============================================
const lenis = new Lenis({
  easing: (t) => Math.min(1, 1.001 - Math.pow(2, -10 * t)),
  smooth: true,
  lerp: 0.025,
});
function raf(time) {
  lenis.raf(time);
  requestAnimationFrame(raf);
}
requestAnimationFrame(raf);

// Hamburger Menu Icon =============================================================
document.addEventListener("DOMContentLoaded", function () {
  const navbarBurger = document.querySelector(".navbar-burger");
  const navbarMenu = document.querySelector(".navbar-menu");
  const navbarClose = document.querySelector(".navbar-close");
  const navbarBackdrop = document.querySelector(".navbar-backdrop");

  navbarBurger.addEventListener("click", function () {
    navbarMenu.classList.toggle("hidden");
  });

  navbarClose.addEventListener("click", function () {
    navbarMenu.classList.add("hidden");
  });

  navbarBackdrop.addEventListener("click", function () {
    navbarMenu.classList.add("hidden");
  });
});

// Hero ===============================================================================

let heroTl = gsap.timeline();

heroTl.from("nav", { duration: 1.3, opacity: 0, y: "-30%" })
heroTl.from('#logo', { scale: 0, duration: 1, opacity: 0 }, '<')
heroTl.from('#hero-image', { duration: 1.1, ease: "slow(0.5,0.5,false)", scale: 0 }, '<1')
heroTl.from('#hero-image-content', { duration: 1, ease: "power4.out", scale: 0, opacity: 0 })
heroTl.from('#hero-heading h1', { duration: 1, opacity: 0, x: '50%' }, "-=.7")
heroTl.from('#hero-para', { opacity: 0, duration: 1.1, ease: "slow(0.5,0.5,false)", x: '50%' }, "-=.7")
heroTl.from('#heroBTN', { opacity: 0, duration: 1.1, ease: "slow(0.5,0.5,false)", x: '50%' }, "-=.9")
heroTl.from('#heroAvatar', { opacity: 0, duration: 1.1, ease: "slow(0.5,0.5,false)", x: '50%' }, "-=.9")

// About ===============================================================================

let aboutTl = gsap.timeline({
  scrollTrigger: {
    trigger: "#about-section",
    start: "top 50%",
    end: "70% 50%",
    // markers: true,
  },
});

aboutTl.from('#aboutLeft', { ease: "back.out(1.7)", opacity: 0, x: '-500px', duration: 1.3 }, 'a');
aboutTl.from('#about-content', { ease: "back.out(1.7)", opacity: 0, x: '500px', duration: 1.3 }, 'a');
aboutTl.from('.abtLftImg', { ease: "back.out(1.7)", opacity: 0, x: '-250px', stagger: .7, duration: 1.3 }, '<');
aboutTl.from('#abtRgtImg', { ease: "back.out(1.7)", opacity: 0, x: '250px', duration: 1 }, '<');
aboutTl.from('#clHead', { ease: "back.out(2)", opacity: 0, scale: .3, duration: 1.2 }, '<');
aboutTl.from('#client', { opacity: 0, duration: 1.2 }, '<');

// Team ===============================================================================

let teamTl = gsap.timeline({
  scrollTrigger: {
    trigger: "#team",
    start: "top 50%",
    end: "40% 50%",
    // markers: true,
  },
});

teamTl.from('#team .head', { ease: "slow(0.5,0.5,false)", opacity: 0, scale: 0, stagger: .3 })
teamTl.from('.teamImg, .cardInfo ', { ease: "back.out(1.7)", stagger: .1, scale: .4, opacity: 0 }, '<')

// Service ===============================================================================

let srvcTl = gsap.timeline({
  scrollTrigger: {
    trigger: "#service",
    start: "top 50%",
    end: "70% 50%",
    // markers: true,
  },
});

srvcTl.from('#service .head', { ease: "slow(0.5,0.5,false)", opacity: 0, scale: 0 })
srvcTl.from('#service-items a', { ease: "slow(0.5,0.5,false)", x: '-5%', opacity: 0, stagger: .3 })


// Swiper ---- testimonial ============================================================
var swiper = new Swiper(".mySwiper", {
  spaceBetween: 30,
  centeredSlides: true,
  loop: true,
  autoplay: {
    delay: 2500,
    disableOnInteraction: false,
  },
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
});

// Splide ---- clientLogo ===========================================================
const splide = new Splide(".splide", {
  type: "loop", // Enable looping
  pagination: false,
  arrows: false,
  autoplay: true,
  focus: "center",
  perPage: 3.5, // Show 3 logos at a time
  autoScroll: {
    speed: 1.5, // Set the scroll speed (in pixels/frame)
    pauseOnHover: false, // Pause auto-scroll on hover
    rewind: true, // Rewind when reaching the end
  },
  breakpoints: {
    // we can also give css property here
    1024: {
      perPage: 4,
      gap: ".7rem",
    },
    768: {
      perPage: 3,
      gap: ".7rem",
    },
    640: {
      perPage: 3,
      gap: ".7rem",
    },
    480: {
      perPage: 2,
      gap: ".7rem",
    },
    320: {
      perPage: 1.5,
    },
  },
});
// when using any extension make sure to use this line
splide.mount(window.splide.Extensions);

// Shery ---- mouseFollower ============================================================
Shery.mouseFollower({
  //Parameters are optional.
  skew: true,
  ease: "cubic-bezier(0.23, 1, 0.320, 1)",
  duration: 0.3,
});

// Gallery ===============================================================================
const contentHeight = document.getElementById('gallery-image').offsetHeight;

const tlGalCont = gsap.timeline({
  scrollTrigger: {
    trigger: "#effect",
    start: "center center",
    // end: () => window.innerHeight + document.querySelector('#gallery-image').offsetHeight, // End when the bottom of the content is visible
    end: `+=${contentHeight} `,
    scrub: true,
    pin: true,
  },
});

tlGalCont.to(
  "#top",
  {
    top: "-50%",
    duration: 0.5,
  },
  "a"
);

tlGalCont.to(
  "#bottom",
  {
    bottom: "-50%",
    duration: 0.5,
  },
  "a"
);

tlGalCont.to(
  "#bottom h1",
  {
    bottom: "-100%",
  },
  "<"
);

tlGalCont.to(
  "#top h1",
  {
    top: "125%",
  },
  "<"
);

tlGalCont.from("#content", {
  opacity: 0,
  marginTop: "50vh",
  duration: 1,
});


