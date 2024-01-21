// $(document).ready(function () {
//     $('.reviews-list').slick({
//         dots: true,
//         infinite: true,
//         speed: 300,
//         slidesToShow: 1,
//         adaptiveHeight: true
//     });
// });

// var hamburger = document.querySelector(".hamburger"),
//     headerNav = document.querySelector(".header-nav-links"),

//     activeSlide = document.querySelectorAll(".portfolio-slider-toggle li"),
//     sliderImages = document.querySelectorAll(".portfolio-slider-list li"),

//     slideBtn1 = document.querySelector(".slide-btn1"),
//     slideBtn2 = document.querySelector(".slide-btn2"),
//     slideBtn3 = document.querySelector(".slide-btn3"),
//     slideBtn4 = document.querySelector(".slide-btn4"),
//     slideBtn5 = document.querySelector(".slide-btn5");

// hamburger.addEventListener("click", () => {
//     hamburger.classList.toggle("active");
//     headerNav.classList.toggle("active");
// })

// hamburger.classList.remove("active");
// headerNav.classList.remove("active");

// activeSlide.forEach((el) => {
//     el.addEventListener("click", function () {
//         activeSlideRemove();
//         el.classList.add("active");
//     })
// })

// let slideIndex = 0;
// showSlides(slideIndex);

// function currentSlide(n) {
//     showSlides(slideIndex = n);
// }

// function showSlides() {
//     var slides = document.querySelectorAll(".portfolio-slider-list li");
//     for (i = 0; i < slides.length; i++) {
//         a = slides[i].style.transform = `translateX(${slideIndex * 100}%)`
//     }
// }

// slideBtn1.addEventListener("click", function () {
//     currentSlide(2)
// })

// slideBtn2.addEventListener("click", function () {
//     currentSlide(1)
// })

// slideBtn3.addEventListener("click", function () {
//     currentSlide(0)
// })

// slideBtn4.addEventListener("click", function () {
//     currentSlide(-1)
// })

// slideBtn5.addEventListener("click", function () {
//     currentSlide(-2)
// })

// function activeSlideRemove() {
//     var activeSlide = document.querySelector(".active");
//     activeSlide.classList.remove("active");
// }

jQuery(document).ready(function ($) {
    $('#my-button').on('click', function () {
        var data_to_send = {
            action: 'my_ajax_function',
            data_from_ajax: 'Hello, server!'
        };

        jQuery.ajax(
            {
                type: "post",
                dataType: "json",
                url: my_ajax_object.ajax_url,
                data: data_to_send,
                success: function (response) {
                    console.log(response);
                },
                error: function(error) {
                    console.log(error);
                }
            });
    });
});
