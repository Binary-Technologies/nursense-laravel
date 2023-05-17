$(document).ready(function () {

    top_bxslider();
    init_main_slider();

});

// mega menu
$(function () {
    $('.toggle-menu').click(function () {
        $('.exo-menu').toggleClass('display');
    });
});

function dropdownActive() {
    /* Loop through all dropdown to toggle between hiding and showing its dropdown content - This allows the user to have multiple dropdowns without any conflict */
    var dropdown = document.getElementsByClassName("dropdown-toggle");
    var i;

    for (i = 0; i < dropdown.length; i++) {
        dropdown[i].addEventListener("click", function () {
            this.classList.toggle("active-b");
            var dropdownContent = document.getElementsByClassName("dropdown-menu");
            if (dropdownContent.style.display == "none") {
                dropdownContent.style.display = "block";
            }
            // else {
            //     dropdownContent.style.display = "block";
            // }
        });
    }
}
dropdownActive();


// Main slder corousel
function init_main_slider() {

    $('.banner-carousel').owlCarousel({
        loop: true,
        margin: 0,
        nav: true,
        animateOut: 'fadeOut',
        animateIn: 'fadeIn',
        active: true,
        smartSpeed: 1000,
        autoplay: 6000,
        navText: ['<span class="flaticon-right-arrow"></span>', '<span class="flaticon-right-arrow"></span>'],
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 1
            },
            800: {
                items: 1
            },
            1024: {
                items: 1
            }
        }
    });

}
// slider effects
document.addEventListener('DOMContentLoaded', function () {
    var parent = document.querySelector('.splitview'),
        topPanel = parent.querySelector('.top'),
        handle = parent.querySelector('.handle'),
        skewHack = 0,
        delta = 0;

    // If the parent has .skewed class, set the skewHack var.
    if (parent.className.indexOf('skewed') != -1) {
        skewHack = 1000;
    }

    parent.addEventListener('mousemove', function (event) {
        // Get the delta between the mouse position and center point.
        delta = (event.clientX - window.innerWidth / 2) * 0.5;

        // Move the handle.
        handle.style.left = event.clientX + delta + 'px';

        // Adjust the top panel width.
        topPanel.style.width = event.clientX + skewHack + delta + 'px';
    });
});


// Vertical text slider - bxslider
function top_bxslider() {
    $('.bxslider.text').bxSlider({
        mode: 'vertical',
        pager: false,
        controls: false,
        infiniteLoop: true,
        auto: true,
        speed: 300,
        pause: 2000
    });
}



// file uploader (CV in careers page)
$(".custom-file-input").on("change", function () {
    var fileName = $(this).val().split("\\").pop();
    $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
});



