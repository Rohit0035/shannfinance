(function ($) {
  "use strict";
  var windowOn = $(window);


      /*======================================
        Preloader activation
        ========================================*/
	$(window).on('load', function (event) {
		$('#preloader').delay(1).fadeOut(500);

        /*======================================
        Counter Js
        ========================================*/

        $(".counter").counterUp({
            delay: 10,
            time: 1000,
        });

        /*======================================
        Wow Js
        ========================================*/
        if ($('.wow').length) {
            var wow = new WOW({
                boxClass: 'wow',
                animateClass: 'animated',
                offset: 0,
                mobile: false,
                live: true
            });
            wow.init();
        }
	});


    $(".preloader-close").on("click", function () {
        $('#preloader').delay(0).fadeOut(10);

        /*======================================
        Counter Js
        ========================================*/

        $(".counter").counterUp({
            delay: 10,
            time: 1000,
        });

        /*======================================
        Wow Js
        ========================================*/
        if ($('.wow').length) {
            var wow = new WOW({
                boxClass: 'wow',
                animateClass: 'animated',
                offset: 0,
                mobile: false,
                live: true
            });
            wow.init();
        }
    })

    /*======================================
   Data Css js
   ========================================*/
    $("[data-background]").each(function() {
        $(this).css(
            "background-image",
            "url( " + $(this).attr("data-background") + "  )"
        );
    });

    $("[data-width]").each(function() {
        $(this).css("width", $(this).attr("data-width"));
    });

    $("[data-bg-color]").each(function() {
        $(this).css("background-color", $(this).attr("data-bg-color"));
    });

  /*======================================
	Mobile Menu Js
	========================================*/
  $("#mobile-menu").meanmenu({
    meanMenuContainer: ".mobile-menu",
    meanScreenWidth: "991",
    meanExpand: ['<i class="fa-regular fa-angle-right"></i>'],
  });

  /*======================================
	Sidebar Toggle
	========================================*/
  $(".offcanvas__close,.offcanvas__overlay").on("click", function () {
    $(".offcanvas__area").removeClass("info-open");
    $(".offcanvas__overlay").removeClass("overlay-open");
  });
  // Scroll to bottom then close navbar
  $(window).scroll(function(){
    if($("body").scrollTop() > 0 || $("html").scrollTop() > 0) {
        $(".offcanvas__area").removeClass("info-open");
        $(".offcanvas__overlay").removeClass("overlay-open");
    }
  });
  $(".sidebar__toggle").on("click", function () {
    $(".offcanvas__area").addClass("info-open");
    $(".offcanvas__overlay").addClass("overlay-open");
  });

  /*======================================
	Body overlay Js
	========================================*/
  $(".body-overlay").on("click", function () {
    $(".offcanvas__area").removeClass("opened");
    $(".body-overlay").removeClass("opened");
  });



  /*======================================
	Sticky Header Js
	========================================*/

  $(window).scroll(function () {
    if ($(this).scrollTop() > 10) {
      $("#header-sticky").addClass("rs-sticky");
    } else {
      $("#header-sticky").removeClass("rs-sticky");
    }
  });

    /*** pricing table */
    const pricingMonthlyBtn = $("#monthly-btn"),
        pricingYearlyBtn = $("#yearly-btn"),
        pricingValues = $(".pricing-card-price h2");

    if (pricingMonthlyBtn[0] && pricingYearlyBtn[0] && pricingValues.length > 0) {
        pricingMonthlyBtn[0].addEventListener("click", function () {
            updatePricingValues("monthly");
            pricingYearlyBtn[0].classList.remove("active");
            pricingMonthlyBtn[0].classList.add("active");
        });

        pricingYearlyBtn[0].addEventListener("click", function () {
            updatePricingValues("yearly");
            pricingMonthlyBtn[0].classList.remove("active");
            pricingYearlyBtn[0].classList.add("active");
        });
    }

    function updatePricingValues(option) {
        pricingValues.each(function () {
            const pricingValue = $(this);
            const yearlyValue = pricingValue.attr("data-yearly");
            const monthlyValue = pricingValue.attr("data-monthly");

            const newValue = option === "monthly" ? monthlyValue : yearlyValue;
            pricingValue.html(newValue);
        });
    }

    function page_ah_cursor() {
        document.body.append(...["cursor-outer", "cursor-inner"].map(className => Object.assign(document.createElement("div"), { className: `mouse-cursor ${className}` })));

        const myCursor = jQuery(".mouse-cursor");

        if (myCursor.length) {
            const cursorInner = document.querySelector(".cursor-inner");
            const cursorOuter = document.querySelector(".cursor-outer");
            let mouseY, mouseX = 0;
            let isHovering = false;

            window.onmousemove = function (event) {
                if (!isHovering) {
                    cursorOuter.style.transform = `translate(${event.clientX}px, ${event.clientY}px)`;
                    cursorInner.style.transform = `translate(${event.clientX}px, ${event.clientY}px)`;
                    mouseY = event.clientY;
                    mouseX = event.clientX;
                }
            };

            $("body").on(
                "mouseenter",
                "a, button, .cursor-pointer",
                function () {
                    cursorInner.classList.add("cursor-hover");
                    cursorOuter.classList.add("cursor-hover");
                }
            );

            $("body").on(
                "mouseleave",
                "a, button, .cursor-pointer",
                function () {
                    if ($(this).is("a") || $(this).is("button") && $(this).closest(".cursor-pointer").length === 0) {
                        cursorInner.classList.remove("cursor-hover");
                        cursorOuter.classList.remove("cursor-hover");
                    }
                }
            );

            cursorInner.style.visibility = "visible";
            cursorOuter.style.visibility = "visible";
        }
    }
    if ($('.have-cursor').length > 0) {
        page_ah_cursor();
    }

  /*======================================
	MagnificPopup image view
	========================================*/
  $(".popup-image").magnificPopup({
    type: "image",
    gallery: {
      enabled: true,
    },
  });

  /*======================================
	MagnificPopup video view
	========================================*/
  $(".popup-video").magnificPopup({
    type: "iframe",
  });

  /*======================================
	Button scroll up js
	========================================*/
  
    var progressPath = document.querySelector(".backtotop-wrap path");
    var pathLength = progressPath.getTotalLength();
    progressPath.style.transition = progressPath.style.WebkitTransition =
        "none";
    progressPath.style.strokeDasharray = pathLength + " " + pathLength;
    progressPath.style.strokeDashoffset = pathLength;
    progressPath.getBoundingClientRect();
    progressPath.style.transition = progressPath.style.WebkitTransition =
        "stroke-dashoffset 10ms linear";
    var updateProgress = function() {
        var scroll = $(window).scrollTop();
        var height = $(document).height() - $(window).height();
        var progress = pathLength - (scroll * pathLength) / height;
        progressPath.style.strokeDashoffset = progress;
    };
    updateProgress();
    $(window).scroll(updateProgress);
    var offset = 150;
    var duration = 550;
    jQuery(window).on("scroll", function() {
        if (jQuery(this).scrollTop() > offset) {
            jQuery(".backtotop-wrap").addClass("active-progress");
        } else {
            jQuery(".backtotop-wrap").removeClass("active-progress");
        }
    });
    jQuery(".backtotop-wrap").on("click", function(event) {
        event.preventDefault();
        jQuery("html, body").animate({
            scrollTop: 0
        }, duration);
        return false;
    });
    
    /*======================================
	One Page Scroll Js
	========================================*/
    /*** Scroll Nav */
    var link = $('#mobile-menu ul li a, .mean-nav ul li a');

    link.on('click', function(e) {
        var target = $($(this).attr('href'));
        $('html, body').animate({
            scrollTop: target.offset().top - 76
        }, 600);
        $(this).parent().addClass('active');
        e.preventDefault();
    });

    $(window).on('scroll', function(){
        scrNav();
    });

    function scrNav() {
        var sTop = $(window).scrollTop();
        $('section').each(function() {
            var id = $(this).attr('id'),
                offset = $(this).offset().top-1,
                height = $(this).height();
            if(sTop >= offset && sTop < offset + height) {
                link.parent().removeClass('active');
                $('.main-menu').find('[href="#' + id + '"]').parent().addClass('active');
            }
        });
    }
    scrNav();

    /*======================================
	Smoth animatio Js
	========================================*/
    $(document).on('click', '.smoth-animation', function (event) {
        event.preventDefault();
        $('html, body').animate({
            scrollTop: $($.attr(this, 'href')).offset().top - 50
        }, 300);
    });

  /*======================================
  Parallax Swiper
  ========================================*/
    var parallaxSlider;
    var parallaxSliderOptions = {
        speed: 1500,
        autoplay: {
            delay: 5000,
        },
        parallax: true,
        loop: true,
    
        pagination: {
            el: ".rs-slider-dot",
            clickable: true,
        },
    
        navigation: {
            nextEl: ".slider__button-prev",
            prevEl: ".slider__button-next",
        },
        on: {
            init: function() {
                var swiper = this;
                for (var i = 0; i < swiper.slides.length; i++) {
                    $(swiper.slides[i])
                        .find(".slider__thumb-bg")
                        .attr({
                            "data-swiper-parallax": 0.75 * swiper.width,
                        });
                }
            },
            resize: function() {
                this.update();
            },
        },
    };
    parallaxSlider = new Swiper(
        ".slider-prlx .parallax-slider",
        parallaxSliderOptions
    );

    /*team__carousel-active***/
    var team__carousel_active = new Swiper(".team__carousel-active", {
        slidesPerView: 1,
        spaceBetween: 30,
        loop: true,
        roundLengths: true,
        centeredSlides: true,
        dot: false,
        autoplay: {
            delay: 3000,
        },
        navigation: {
            nextEl: ".our-team__slider-button-next",
            prevEl: ".our-team__slider-button-prev",
        },
        breakpoints: {
            1400: {
                slidesPerView: 5,
            },
            1200: {
                slidesPerView: 5,
            },
            992: {
                slidesPerView: 3,
            },
            768: {
                slidesPerView: 2,
            },
            576: {
                slidesPerView: 1,
            },
            0: {
                slidesPerView: 1,
            },
        },
    });

    /*brand__active***/
    var brand = new Swiper(".brand__active", {
        slidesPerView: 1,
        spaceBetween: 30,
        loop: true,
        roundLengths: true,
        clickable: true,
        autoplay: {
            delay: 3000,
        },
        breakpoints: {
            1200: {
                slidesPerView: 5,
            },
            992: {
                slidesPerView: 4,
            },
            768: {
                slidesPerView: 3,
            },
            576: {
                slidesPerView: 2,
            },
            0: {
                slidesPerView: 1,
            },
        },
    });
    
    /*** carouselTicker initail */
      $('.carouselTicker-nav').carouselTicker({
      });

    /*banner-4-active***/
    var brand = new Swiper(".banner-4-active", {
        slidesPerView: 1,
            spaceBetween: 0,
            loop: true,  
            autoplay: {
            delay: 5000,
        },
        // pagination: {
        //     el: ".banner-4-pagination",
        //     clickable: true
        // },
        pagination: {
        el: ".banner-4-pagination",
        clickable: true,
        type: "bullets",   
    },
    });

    /*banner-5-active***/
    var brand = new Swiper(".banner-5-active", {
        slidesPerView: 1,
            spaceBetween: 0,
            loop: true,  
            autoplay: {
            delay: 5000,
        },
        pagination: {
            el: ".banner-5-pagination",
            clickable: true
        },
    });
 
     /*brand__active***/
     var brand = new Swiper(".our-client__active", {
        slidesPerView: 1,
        spaceBetween: 30,
        loop: true,
        roundLengths: true,
        clickable: true,
        autoplay: {
            delay: 3000,
        },
        breakpoints: {
            1200: {
                slidesPerView: 5,
            },
            992: {
                slidesPerView: 4,
            },
            768: {
                slidesPerView: 3,
            },
            576: {
                slidesPerView: 2,
            },
            0: {
                slidesPerView: 1,
            },
        },
    });

    /*feedback__active***/
    var feedback = new Swiper(".feedback__active", {
        slidesPerView: 4,
        spaceBetween: 30,
        loop: true,
        autoplay: {
            delay: 3000,
        },
        breakpoints: {
            1400: {
                slidesPerView: 4,
            },
            1199: {
                slidesPerView: 3,
            },
            675: {
                slidesPerView: 2,
            },
            0: {
                slidesPerView: 1,
            },
        },
    });

    /*feedback__active-2***/
    var feedbacktwo = new Swiper(".feedback__active-2", {
        slidesPerView: 1,
        spaceBetween: 30,
        loop: true,
        autoplay: {
            delay: 3000,
        },
        navigation: {
            prevEl: ".feedback-2__slider-button-prev",
            nextEl: ".feedback-2__slider-button-next",
        },
        breakpoints: {
            992: {
                slidesPerView: 2,
            },
            0: {
                slidesPerView: 1,
            },
        },
    });

    /*======================================
      clients-testomonial__active
      ========================================*/
      var feedbackThree = new Swiper(".clients-testomonial__active", {
        slidesPerView: 1,
        spaceBetween: 30,
        loop: true,
        autoplay: {
            delay: 3000,
        },
    });

    /*======================================
      feedback__active-3 js
      ========================================*/
    var feedbackThree = new Swiper(".feedback__active-3", {
        slidesPerView: 1,
        spaceBetween: 30,
        loop: true,
        autoplay: {
            delay: 3000,
        },
        pagination: {
            el: ".rs-swiper-dot",
            clickable: true,
        }
    });

    /*======================================
     active_team_slider js
     ========================================*/
    var active_team_slider = new Swiper(".active_team_slider", {
        slidesPerView: 3,
        spaceBetween: 30,
        loop: true,
        autoplay: {
            delay: 3000,
        },
        centeredSlides: true,
        pagination: {
            el: ".rs-swiper-dot",
            clickable: true,
        },
        breakpoints: {
            1201: {
                slidesPerView: 3,
            },
            576: {
                slidesPerView: 2,
            },
            0: {
                slidesPerView: 1,
            },
        },
    });

    /*======================================
    latest-gallery__active js
    ========================================*/
    var latest_gallery__active = new Swiper(".latest-gallery__active", {
        slidesPerView: 4,
        spaceBetween: 30,
        loop: true,
        centeredSlides: true,
        autoplay: {
            delay: 3000,
        },
        centeredSlides: true,
        pagination: {
            el: ".rs-swiper-dot",
            clickable: true,
        },
        breakpoints: {
            1400: {
                slidesPerView: 4,
            },
            992: {
                slidesPerView: 3,
            },
            768: {
                slidesPerView: 2,
            },
            0: {
                slidesPerView: 1,
            },
        },
    });
    
    /*======================================
    latest-gallery__active js
    ========================================*/
    var latest_gallery__active = new Swiper(".home-4-latest-gallery__active", {
        speed: 1000,
		loop: true,
		slidesPerView: 5,
		autoplay: true,
		spaceBetween: 30,
        
        pagination: {
            el: ".rs-swiper-dot",
            clickable: true,
        },
        breakpoints: {
            1400: {
                slidesPerView: 3,
            },
            992: {
                slidesPerView: 3,
            },
            768: {
                slidesPerView: 2,
            },
            0: {
                slidesPerView: 1,
            },
        },
    });

    $(".work-process__item button").on("click", function() {
        $(".work-process__item").removeClass("active");
        $(this).closest(".work-process__item").addClass("active");
    });

    $("[data-after-color]").each(function() {
        $(this).css("color", $(this).attr("data-after-color"));
    });




})(jQuery);


// js Emi calculator
function formatCurrency(amount) {
    return "₹" + amount.toFixed(2).replace(/\B(?=(\d{3})+(?!\d))/g, ",");
}

function calculateEMI() {
    var loanAmount = parseFloat(document.getElementById('loan-amount-input').value);
    var interestRate = parseFloat(document.getElementById('interest-rate-input').value);
    var loanTerm = parseFloat(document.getElementById('loan-term-input').value);

    if (isNaN(loanAmount) || isNaN(interestRate) || isNaN(loanTerm)) {
        document.getElementById('emi-result').innerHTML = 'Please enter valid values';
        return;
    }

    var monthlyInterestRate = interestRate / 100 / 12;
    var emi = (loanAmount * monthlyInterestRate * Math.pow(1 + monthlyInterestRate, loanTerm)) / (Math.pow(1 + monthlyInterestRate, loanTerm) - 1);

    var emiTable = document.getElementById('emi-table');
    var tableBody = emiTable.querySelector('tbody');
    tableBody.innerHTML = '';

    var balance = loanAmount;
    var totalInterestPayable = 0;
    var totalPayment = 0;

    for (var month = 1; month <= loanTerm; month++) {
        var interest = balance * monthlyInterestRate;
        var principal = emi - interest;
        balance -= principal;

        totalInterestPayable += interest;
        totalPayment += emi;

        var row = document.createElement('tr');
        row.innerHTML = '<td>' + month + '</td>' +
            '<td>' + formatCurrency(emi) + '</td>' +
            '<td>' + formatCurrency(principal) + '</td>' +
            '<td>' + formatCurrency(interest) + '</td>' +
            '<td>' + formatCurrency(balance) + '</td>';

        tableBody.appendChild(row);
    }

    var totalRow = document.getElementById('total-row');
    totalRow.innerHTML = 'Total: EMI - ' + formatCurrency(totalPayment) +
        ', Total Interest Payable - ' + formatCurrency(totalInterestPayable) +
        ', Total of Payments - ' + formatCurrency(totalPayment + totalInterestPayable);

    emiTable.classList.remove('hidden');
}

function resetForm() {
    document.getElementById('loan-amount-input').value = '';
    document.getElementById('loan-amount-slider').value = '0';
    document.getElementById('interest-rate-input').value = '';
    document.getElementById('interest-rate-slider').value = '0';
    document.getElementById('loan-term-input').value = '';
    document.getElementById('loan-term-slider').value = '0';
    document.getElementById('loan-term-value').textContent = '0 months';
    document.getElementById('emi-result').innerHTML = '';
    document.getElementById('emi-table').classList.add('hidden');
}

document.getElementById('calculate-btn').addEventListener('click', calculateEMI);
document.getElementById('reset-btn').addEventListener('click', resetForm);

document.getElementById('loan-term-input').addEventListener('input', function() {
    var loanTerm = document.getElementById('loan-term-input').value;
    document.getElementById('loan-term-slider').value = loanTerm;
    document.getElementById('loan-term-value').textContent = loanTerm + ' months';
});

document.getElementById('loan-term-slider').addEventListener('input', function() {
    var loanTerm = document.getElementById('loan-term-slider').value;
    document.getElementById('loan-term-input').value = loanTerm;
    document.getElementById('loan-term-value').textContent = loanTerm + ' months';
});

document.getElementById('loan-amount-input').addEventListener('input', function() {
    var loanAmount = document.getElementById('loan-amount-input').value;
    document.getElementById('loan-amount-slider').value = loanAmount;
});

document.getElementById('loan-amount-slider').addEventListener('input', function() {
    var loanAmount = document.getElementById('loan-amount-slider').value;
    document.getElementById('loan-amount-input').value = loanAmount;
});

document.getElementById('interest-rate-input').addEventListener('input', function() {
    var interestRate = document.getElementById('interest-rate-input').value;
    document.getElementById('interest-rate-slider').value = interestRate;
});

document.getElementById('interest-rate-slider').addEventListener('input', function() {
    var interestRate = document.getElementById('interest-rate-slider').value;
    document.getElementById('interest-rate-input').value = interestRate;
});
