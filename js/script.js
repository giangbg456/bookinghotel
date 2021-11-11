var searchForm = document.querySelector('.search-form');



var videoBtn = document.querySelectorAll('.vid-btn');

document.querySelector('#search-btn').onclick = () => {
        searchForm.classList.toggle('active');
    }
    // -----------js login---------

var loginForm = document.querySelector('.login-form');

document.querySelector('#login-btn').onclick = () => {
    loginForm.classList.toggle('active-login');
}

// -------------js video slider-------

var videoBtn = document.querySelectorAll('.vid-btn');
videoBtn.forEach(btn => {
    btn.addEventListener('click', () => {
        document.querySelector('.controls .active').classList.remove('active');
        btn.classList.add('active');
        var src = btn.getAttribute('data-src');
        document.querySelector('#video-slider').src = src;

    })
})

$(document).ready(function() {

    // Gets the video src from the data-src on each button

    var $videoSrc;
    $('.video-btn').click(function() {
        $videoSrc = $(this).data("src");
    });
    console.log($videoSrc);
    // when the modal is opened autoplay it  
    $('#myModal').on('shown.bs.modal', function(e) {
            // set the video src to autoplay and not to show related video. Youtube related video is like a box of chocolates... you never know what you're gonna get
            $("#video").attr('src', $videoSrc + "?autoplay=1&amp;modestbranding=1&amp;showinfo=0");
        })
        // stop playing the youtube video when I close the modal
    $('#myModal').on('hide.bs.modal', function(e) {
        // a poor man's stop video
        $("#video").attr('src', $videoSrc);
    })

    // document ready  
});



var swiper = new Swiper(".review-slider", {
    spaceBetween: 20,
    loop: true,
    autoplay: {
        delay: 2500,
        disableOnInteraction: false,
    },
    breakpoints: {
        640: {
            sliderPerView: 1,
        },
        768: {
            sliderPerView: 2,
        },
        1020: {
            sliderPerView: 3,
        },
    },
    pagination: {
        el: ".swiper-pagination",
        dynamicBullets: true,
    },
})


window.addEventListener('scroll', reveal);

function reveal() {
    var reveals = document.querySelectorAll('.reveal');

    for (var i = 0; i < reveals.length; i++) {
        var windowheight = window.innerHeight;
        var revealtop = reveals[i].getBoundingClientRect().top;
        var revealpoint = 150;

        if (revealtop < windowheight - revealpoint) {
            reveals[i].classList.add('active');
        } else {
            reveals[i].classList.remove('active');
        }
    }
}