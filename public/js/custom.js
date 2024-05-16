
const toggleButton = document.querySelector(".toggle-btn");
const dropdown = document.querySelector(".dropdown-menu");

toggleButton.addEventListener("click", () => {
    dropdown.classList.toggle('hidden')
});

$('#brand-image').owlCarousel({
loop: true,
items: 5,
dots: false,
nav: true,
autoplayTimeout: 5000,
smartSpeed: 2000,
autoHeight: false,
touchDrag: true,
mouseDrag: true,
margin: 10,
autoplay: true,
lazyLoad:true,
slideSpeed: 600,
navText: ['<i class="fa fa-chevron-left" aria-hidden="true"></i>', '<i class="fa fa-chevron-right" aria-hidden="true"></i>'],
responsive: {
0: {
    items: 1,
    nav: false,
    dots: false,
},
400: {
    items: 2,
    nav: false,
    dots: false,
},
600: {
    items: 2,
    nav: false,
    dots: false,
},
768: {
    items: 2,
    nav: false,
    dots: false,
},
1000: {
    items: 5,
    nav: true,
    dots: false,
    autoplayTimeout: 10000,
}
}
})
