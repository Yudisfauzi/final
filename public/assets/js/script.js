// toggle clas active
const navbarNav = document.querySelector(".navbar-nav");

document.querySelector("#hamburger-menu").onclick = () => {
    navbarNav.classList.toggle("active");
};
const swiper = new Swiper(".slider-wrapper", {
    // If we need pagination
    spaceBetween: 30,
    loop: true,
    // autoplay: {
    //     delay: 2500,
    //     disableOnInteraction: false,
    // },
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
});

const wrapper = new Swiper(".card-wrapper", {
    // If we need pagination
    slidesPerView: 5,
    spaceBetween: 30,
    loop: true,
    pagination: {
        el: ".swiper-paginatio",
        clickable: true,
    },
    autoplay: {
        delay: 2500,
        disableOnInteraction: false,
    },
    breakpoints: {
        375: {
            slidesPerView: 1,
            spaceBetween: 20,
        },
        640: {
            slidesPerView: 2,
            spaceBetween: 20,
        },
        768: {
            slidesPerView: 4,
            spaceBetween: 40,
        },
        1024: {
            slidesPerView: 5,
            spaceBetween: 50,
        },
    },
});
