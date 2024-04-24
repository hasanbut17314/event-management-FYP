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
// ==============================================
let heroTl = gsap.timeline();

heroTl.from("nav", { duration: 1.3, opacity: 0, y: "-30%" })
heroTl.from('#logo', { scale: 0, duration: 1, opacity: 0 }, '<')

// ==============================================

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

// Shery ---- mouseFollower
Shery.mouseFollower({
    //Parameters are optional.
    skew: true,
    ease: "cubic-bezier(0.23, 1, 0.320, 1)",
    duration: 0.3,
});

window.addEventListener('load', () => {
    document.querySelectorAll('button').addEventListener('click', (e) => {
        e.preventDefault();
    })
})