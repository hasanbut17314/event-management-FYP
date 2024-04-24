// Lenis ---- smooth scroll
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

// Hamburger Menu Icon
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

// Navbar =================================================================
let headTl = gsap.timeline();

headTl.from("nav", { duration: 1.3, opacity: 0, y: "-30%" })
headTl.from('#logo', { scale: 0, duration: 1, opacity: 0 }, '<')

// About ===============================================================================
let aboutTl = gsap.timeline({
    scrollTrigger: {
        trigger: "#about-section",
        start: "top 50%",
        end: "70% 50%",
    },
});

aboutTl.from('.hero', { ease: "slow(0.5,0.5,false)", opacity: 0, scale: .3, duration: 1 });
aboutTl.from('.herolt', { ease: "slow(0.5,0.5,false)", opacity: 0, x: '-30%', duration: 1 },'a');
aboutTl.from('.herort', { ease: "slow(0.5,0.5,false)", opacity: 0, x: '30%', duration: 1 },'a');
aboutTl.from('#clHead', { ease: "back.out(2)", opacity: 0, scale: .3, duration: 1 }, 'b');
aboutTl.from('#client', { opacity: 0, duration: 1.2 }, 'b');

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

// testemonial =========================================================================
let testeTl = gsap.timeline({
    scrollTrigger: {
        trigger: "#testemonial",
        start: "top 50%",
        end: "40% 50%",
        markers: true,
    },
});

testeTl.from('#testemonial .head', { ease: "slow(0.5,0.5,false)", opacity: 0, x: '-10%' })
testeTl.from('.swiper', { ease: "slow(0.5,0.5,false)", opacity: 0 })

// Swiper ---- testimonial ===============================================================
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

// Splide ---- clientLogo
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

// Shery ---- mouseFollower
Shery.mouseFollower({
    //Parameters are optional.
    skew: true,
    ease: "cubic-bezier(0.23, 1, 0.320, 1)",
    duration: 0.3,
});
