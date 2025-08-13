$(document).ready(function () {
    initOpenModal();
    AOSInit();
    addFullpage();
    MenuOpen();
    fistPopUp();
    NKcustomSelect();
    addHeaderMobileClass();
    handleHeaderScroll();
    copyOnClick();
    swiper();
});

function openModal(target) {
    $(target).addClass("active");
    $("body").css("overflow", "hidden");
}

// Hàm đóng modal
function closeModal(target) {
    $(target).removeClass("active");
    $("body").css("overflow", "");
}

function initOpenModal() {
    $(document).on("click", "[data-target]", function (e) {
        e.preventDefault();
        const target = $(this).data("target");
        openModal(target);
    });

    // Khi click nền modal thì đóng
    $(document).on("click", ".modal-container", function (e) {
        if ($(e.target).is(".modal-container")) {
            closeModal(this);
        }
    });

    // Khi click nút close thì đóng
    $(document).on("click", ".modal-container .mfp-close", function (e) {
        const modal = $(this).closest(".modal-container");
        closeModal(modal);
    });
}

function AOSInit() {
    AOS.init({
        // Global settings:

        disable: false, // accepts following values: 'phone', 'tablet', 'mobile', boolean, expression or function

        startEvent: "DOMContentLoaded", // name of the event dispatched on the document, that AOS should initialize on

        initClassName: "aos-init", // class applied after initialization

        animatedClassName: "aos-animate", // class applied on animation

        useClassNames: false, // if true, will add content of `data-aos` as classes on scroll

        disableMutationObserver: false, // disables automatic mutations' detections (advanced)

        debounceDelay: 50, // the delay on debounce used while resizing window (advanced)

        throttleDelay: 99, // the delay on throttle used while scrolling the page (advanced)

        // Settings that can be overridden on per-element basis, by `data-aos-*` attributes:

        once: false,

        offset: 20, // offset (in px) from the original trigger point

        delay: 300, // values from 0 to 3000, with step 50ms

        duration: 400, // values from 0 to 3000, with step 50ms

        easing: "ease", // default easing for AOS animations

        mirror: false, // whether elements should animate out while scrolling past them

        anchorPlacement: "top-bottom", // defines which position of the element regarding to window should trigger the animation
    });
}

function MenuOpen() {
    $(".header-nav-icon").on("click", function () {
        $(".header-nav-icon").toggleClass("is-showing");
        $("#nk-main-menu").toggleClass("active");

        if ($("#nk-main-menu").hasClass("active")) {
            $("#menu-main li").each(function (index) {
                $(this).css("transition-delay", 1 + index * 0.1 + "s");
            });

            $("#menu-main")
                .next("form")
                .css("transition-delay", 1 + $("#menu-main li").length * 0.1 + "s");

            $("body").removeClass("is-light-section").addClass("is-dark-section");
            $("body").css("overflow", "hidden");
            $("#header").addClass("menu-active");
        } else {
            $("#menu-main li").css("transition-delay", "");
            $("body").removeClass("is-dark-section").addClass("is-light-section");
            $("body").css("overflow", "");
            $("#header").removeClass("menu-active");
        }
    });
}

function addFullpage() {
    if (!jQuery("#fullpage").length) {
        return;
    }
    if (screen.width > 1024) {
        let listTitle = [],
            listAnchor = [];

        jQuery("#fullpage > .section").each(function (index, item) {
            let title = jQuery(item).data("title"),
                anchor = jQuery(item).data("anchors"),
                _index = index < 9 ? "0" + (index + 1) : index + 1;

            listTitle.push(title);
            listAnchor.push(anchor);
        });

        new fullpage("#fullpage", {
            //options here
            lockAnchors: false,
            anchors: listAnchor,
            navigation: true,
            navigationPosition: "left",
            navigationTooltips: listTitle,
            showActiveTooltip: true,
            slidesNavigation: true,
            slidesNavPosition: "left",
            scrollHorizontally: true,

            css3: true,

            scrollingSpeed: 500,

            autoScrolling: true,

            fitToSection: true,

            fitToSectionDelay: 1000,

            scrollBar: false,

            easing: "easeInOutCubic",

            easingcss3: "ease",

            loopBottom: false,

            loopTop: false,

            loopHorizontal: true,

            continuousVertical: false,

            continuousHorizontal: false,

            interlockedSlides: false,

            dragAndMove: false,

            offsetSections: false,

            resetSliders: false,

            fadingEffect: false,

            normalScrollElements: ".overflow-y,.subdivision-popup",

            scrollOverflow: false,

            scrollOverflowReset: false,

            scrollOverflowOptions: null,

            touchSensitivity: 15,

            normalScrollElementTouchThreshold: 5,

            bigSectionsDestination: null,

            //Accessibility

            keyboardScrolling: true,

            animateAnchor: true,

            recordHistory: true,

            //Design

            controlArrows: true,

            verticalCentered: true,

            sectionsColor: [""],

            paddingTop: "0",

            paddingBottom: "0",

            fixedElements: ".nav-socials,#popup-form,.icon-popup,#popup-banner,#wpadminbar",

            responsiveWidth: 1024,

            responsiveHeight: 0,

            responsiveSlides: false,

            parallax: false,

            parallaxOptions: {
                type: "reveal",

                percentage: 62,

                property: "translate",
            },
            onLeave: function () {
                jQuery(".section [data-aos]").removeClass("aos-animate");
            },

            afterRender: function () {
                if (jQuery("#fp-nav ul").length) {
                    jQuery("body").append('<div class="wrap-fp-nav"></div>');

                    jQuery("#fp-nav").appendTo(jQuery(".wrap-fp-nav"));

                    jQuery("button.menu-toggle").on("click", function () {
                        jQuery(".wrap-fp-nav").toggleClass("hidden");
                    });
                }

                var index = 1;

                jQuery("#fp-nav ul > li").each(function () {
                    if (index < 10) {
                        number = "0" + index;
                    } else {
                        number = index;
                    }

                    jQuery(this)
                        .children("a")
                        .empty()
                        .append("<span>" + number + "</span>");

                    index++;
                });
            },

            afterLoad: function (origin, destination, direction) {
                jQuery(".section.active [data-aos]").addClass("aos-animate");

                const currentSectionClass = destination.item.classList;

                const isDarkSection = currentSectionClass.contains("section-dark");
                const isLightSection = currentSectionClass.contains("section-light");

                if (isDarkSection) {
                    $("body").addClass("is-dark-section").removeClass("is-light-section");
                } else if (isLightSection) {
                    $("body").addClass("is-light-section").removeClass("is-dark-section");
                }
            },
            onSlideLeave: function () {
                jQuery(".slide [data-aos]").removeClass("aos-animate");
            },

            afterSlideLoad: function () {
                jQuery(".slide.active [data-aos]").addClass("aos-animate");
                console.log("destination.item.classList");
            },

            afterResize: function () {},

            afterResponsive: function (isResponsive) {},
        });
    }
}

function fistPopUp() {
    if (jQuery(".home-banner").length) {
        return;
    }
    $(document).ready(function () {
        $("#lepopup-form-13").addClass("active");
        if ($("#lepopup-form-13").hasClass("active")) {
            $("body").css("overflow", "hidden");
        }
    });

    $(document).on("click", "#lepopup-form-13 .lepopup-close", function () {
        $("#lepopup-form-13").removeClass("active");
        $("body").css("overflow", "");
    });

    $(document).on("click", "#lepopup-form-13", function (e) {
        if ($(e.target).is("#lepopup-form-13")) {
            $("#lepopup-form-13").removeClass("active");
            $("body").css("overflow", "");
        }
    });

    // Handle lepopup form submission
    $(document).on("submit", "#lepopup-contact-form", function(e) {
        e.preventDefault();
        
        var form = $(this);
        var submitBtn = form.find('button[type="submit"]');
        var originalText = submitBtn.text();
        
        // Disable submit button and show loading
        submitBtn.prop('disabled', true).text('Đang gửi...');
        
        // Get form data
        var formData = new FormData(this);
        formData.append('action', 'lepopup_form_submit');
        
        // Send AJAX request
        $.ajax({
            url: lepopup_ajax_url,
            type: 'POST',
            data: formData,
            processData: false,
            contentType: false,
            success: function(response) {
                if (response.success) {
                    // Show success message
                    Swal.fire({
                        icon: 'success',
                        title: 'Thành công!',
                        text: response.data.message,
                        confirmButtonText: 'Đóng',
                        confirmButtonColor: '#28a745'
                    }).then((result) => {
                        // Close popup and reset form
                        $("#lepopup-form-13").removeClass("active");
                        $("body").css("overflow", "");
                        form[0].reset();
                    });
                } else {
                    // Show error message
                    Swal.fire({
                        icon: 'error',
                        title: 'Lỗi!',
                        text: response.data.message,
                        confirmButtonText: 'Thử lại',
                        confirmButtonColor: '#dc3545'
                    });
                }
            },
            error: function(xhr, status, error) {
                // Show error message
                Swal.fire({
                    icon: 'error',
                    title: 'Lỗi!',
                    text: 'Có lỗi xảy ra, vui lòng thử lại sau.',
                    confirmButtonText: 'Thử lại',
                    confirmButtonColor: '#dc3545'
                });
            },
            complete: function() {
                // Re-enable submit button
                submitBtn.prop('disabled', false).text(originalText);
            }
        });
    });
}

function swiper() {
    const swiper = new Swiper(".home-banner", {
        speed: 1600,

        effect: "fade",

        pagination: {
            el: ".home-banner .swiper-pagination",

            clickable: true,
        },

        autoplay: {
            delay: 3000,
            disableOnInteraction: false,
        },
        loop: true,
    });

    // var utilitiesSwiper1 = new Swiper(".utilities-swiper-1", {
    //   slidesPerView: 1,

    //   loop: true,

    //   speed: 600,

    //   slideToClickedSlide: true,

    //   effect: "coverflow",

    //   coverflowEffect: {
    //     rotate: 0,

    //     stretch: 546,

    //     depth: 300,

    //     modifier: 1,

    //     slideShadows: false,
    //   },

    //   autoplay: {
    //     delay: 4000,

    //     disableOnInteraction: false,
    //   },

    //   navigation: {
    //     nextEl: ".utilities-swiper-1 .next",

    //     prevEl: ".utilities-swiper-1 .prev",
    //   },

    //   pagination: {
    //     el: ".utilities-swiper-1 .swiper-pagination",

    //     clickable: true,
    //   },

    //   breakpoints: {
    //     1600: {
    //       coverflowEffect: {
    //         rotate: 0,

    //         stretch: 546,

    //         depth: 300,

    //         modifier: 1,

    //         slideShadows: false,
    //       },
    //     },

    //     1500: {
    //       coverflowEffect: {
    //         rotate: 0,

    //         stretch: 436,

    //         depth: 300,

    //         modifier: 1,

    //         slideShadows: false,
    //       },
    //     },

    //     1400: {
    //       coverflowEffect: {
    //         rotate: 0,

    //         stretch: 406,

    //         depth: 300,

    //         modifier: 1,

    //         slideShadows: false,
    //       },
    //     },

    //     1300: {
    //       coverflowEffect: {
    //         rotate: 0,

    //         stretch: 386,

    //         depth: 300,

    //         modifier: 1,

    //         slideShadows: false,
    //       },
    //     },

    //     1200: {
    //       coverflowEffect: {
    //         rotate: 0,

    //         stretch: 366,

    //         depth: 300,

    //         modifier: 1,

    //         slideShadows: false,
    //       },
    //     },

    //     1100: {
    //       coverflowEffect: {
    //         rotate: 0,

    //         stretch: 366,

    //         depth: 300,

    //         modifier: 1,

    //         slideShadows: false,
    //       },
    //     },

    //     992: {
    //       coverflowEffect: {
    //         rotate: 0,

    //         stretch: 430,

    //         depth: 300,

    //         modifier: 1,

    //         slideShadows: false,
    //       },
    //     },

    //     768: {
    //       coverflowEffect: {
    //         rotate: 0,

    //         stretch: 424,

    //         depth: 500,

    //         modifier: 1,

    //         slideShadows: false,
    //       },
    //     },

    //     300: {
    //       coverflowEffect: {
    //         rotate: 0,

    //         stretch: 224,

    //         depth: 300,

    //         modifier: 1,

    //         slideShadows: false,
    //       },
    //     },
    //   },
    // });

    // var partnersSwiper = new Swiper(".partners-swiper", {
    //   slidesPerView: 1,

    //   speed: 600,

    //   pagination: {
    //     el: ".partners-wrap .swiper-pagination",

    //     clickable: true,
    //   },

    //   autoplay: {
    //     delay: 5000,

    //     disableOnInteraction: false,
    //   },
    // });

    var utilitiesSwiper2 = new Swiper(".utilities-swiper-2", {
        slidesPerView: 5,

        spaceBetween: 20,

        speed: 600,

        // autoplay: {
        //   delay: 5000,

        //   disableOnInteraction: false,
        // },

        navigation: {
            nextEl: ".utilities-swiper-2-wrap .next",

            prevEl: ".utilities-swiper-2-wrap .prev",
        },

        breakpoints: {
            1200: {
                slidesPerView: 5,

                spaceBetween: 20,
            },

            992: {
                slidesPerView: 4,

                spaceBetween: 20,
            },

            768: {
                slidesPerView: 3,

                spaceBetween: 16,
            },

            300: {
                slidesPerView: 1,

                spaceBetween: 12,
            },
        },
    });

    // var designSwiper2Thumb = new Swiper(".design-swiper-2-thumb", {
    //   slidesPerView: 5,

    //   spaceBetween: 70,

    //   // centeredSlides: true,

    //   speed: 600,

    //   // initialSlide: 2,

    //   breakpoints: {
    //     1200: {
    //       slidesPerView: 5,

    //       spaceBetween: 70,
    //     },

    //     992: {
    //       slidesPerView: 5,

    //       spaceBetween: 40,
    //     },

    //     768: {
    //       slidesPerView: 3,

    //       spaceBetween: 20,
    //     },

    //     300: {
    //       slidesPerView: 3,

    //       spaceBetween: 12,
    //     },
    //   },
    // });

    // var designSwiper2 = new Swiper(".design-swiper-2", {
    //   slidesPerView: 1,

    //   speed: 600,

    //   thumbs: {
    //     swiper: designSwiper2Thumb,
    //   },

    //   // initialSlide: 1,

    //   autoplay: {
    //     delay: 5000,

    //     disableOnInteraction: false,
    //   },
    // });

    // var designSwiper1 = new Swiper(".design-swiper-1", {
    //   slidesPerView: 5,

    //   spaceBetween: 100,

    //   speed: 600,

    //   autoplay: {
    //     delay: 4000,

    //     disableOnInteraction: false,
    //   },

    //   breakpoints: {
    //     1200: {
    //       slidesPerView: 5,

    //       spaceBetween: 100,
    //     },

    //     992: {
    //       slidesPerView: 4,

    //       spaceBetween: 100,
    //     },

    //     768: {
    //       slidesPerView: 3,

    //       spaceBetween: 100,

    //       loop: false,
    //     },

    //     300: {
    //       slidesPerView: 3,

    //       spaceBetween: 30,

    //       loop: true,
    //     },
    //   },
    // });

    var homeSwiper2 = new Swiper(".home-swiper-2", {
        slidesPerView: 3,

        speed: 600,

        loop: true,

        navigation: {
            nextEl: ".home-sec-3 .next",

            prevEl: ".home-sec-3 .prev",
        },

        pagination: {
            el: ".home-sec-3 .swiper-pagination",

            clickable: true,
        },

        // autoplay: {
        //     delay: 5000,

        //     disableOnInteraction: false,
        // },

        breakpoints: {
            992: {
                slidesPerView: 3,
            },

            768: {
                slidesPerView: 2,
            },

            300: {
                slidesPerView: 2,
            },
        },
    });

    var homeSwiper3 = new Swiper(".home-swiper-3", {
        slidesPerView: 3,

        spaceBetween: 24,

        speed: 600,

        loop: true,

        pagination: {
            el: ".home-sec-4 .swiper-pagination",

            clickable: true,
        },

        autoplay: {
            delay: 5000,

            disableOnInteraction: false,
        },

        breakpoints: {
            992: {
                slidesPerView: 3,

                spaceBetween: 24,
            },

            768: {
                slidesPerView: 3,

                spaceBetween: 24,
            },

            300: {
                slidesPerView: 2,

                spaceBetween: 12,
            },
        },
    });

    var swiperThietket = new Swiper(".swiper-video-thumb", {
        loop: true,
        slidesPerView: 3,
        speed: 600,
        spaceBetween: 20,

        navigation: {
            nextEl: ".swiper-video-button-next",
            prevEl: ".swiper-video-button-prev",
        },

        breakpoints: {
            1024: {
                slidesPerView: 3,
            },
            768: {
                slidesPerView: 3,
            },
            300: {
                slidesPerView: 3,
            },
        },
    });
    // Khởi tạo Plyr cho tất cả các video YouTube
    const players = Array.from(document.querySelectorAll(".plyr__video-embed")).map(
        (p) =>
            new Plyr(p, {
                controls: [
                    "play-large",
                    "play",
                    "progress",
                    "current-time",
                    "mute",
                    "volume",
                    "fullscreen",
                ],
                youtube: {
                    noCookie: true,
                    rel: 0,
                    showinfo: 0,
                    iv_load_policy: 3,
                    modestbranding: 1,
                },
            })
    );

    var swiper2 = new Swiper(".swiper-video", {
        slidesPerView: 1,
        spaceBetween: 20,
        speed: 600,
        thumbs: {
            swiper: swiperThietket,
        },
        on: {
            slideChange: function () {
                // Tạm dừng tất cả các video khi chuyển slide
                players.forEach((player) => {
                    player.pause();
                });
            },
            slideChangeTransitionEnd: function () {
                // Tìm video trong slide hiện tại
                const activeIndex = this.activeIndex;
                const activeSlide = document.querySelector(".swiper-video .swiper-slide-active");
                if (activeSlide) {
                    const activePlayer = activeSlide.querySelector(".plyr__video-embed");
                    if (activePlayer) {
                        const playerIndex = Array.from(
                            document.querySelectorAll(".plyr__video-embed")
                        ).indexOf(activePlayer);
                        if (playerIndex !== -1 && players[playerIndex]) {
                            // Tự động phát video trong slide hiện tại
                            setTimeout(() => {
                                players[playerIndex].play();
                            }, 300);
                        }
                    }
                }
            },
        },
    });

    if (jQuery(".progress-swiper").length) {
        jQuery(".progress-swiper").each(function () {
            var id = jQuery(this).attr("data-id");

            var progressThumb = new Swiper(".tab-gallery.tab-" + id + " .progress-thumb", {
                direction: "vertical",

                slidesPerView: 3,

                speed: 600,

                spaceBetween: 20,

                slideToClickedSlide: true,

                breakpoints: {
                    768: {
                        direction: "vertical",

                        spaceBetween: 20,
                    },

                    300: {
                        direction: "horizontal",

                        spaceBetween: 10,
                    },
                },
            });

            var progressSwiper = new Swiper(".tab-gallery.tab-" + id + " .progress-swiper", {
                slidesPerView: 1,

                thumbs: {
                    swiper: progressThumb,
                },

                speed: 600,

                navigation: {
                    nextEl: ".tab-gallery.tab-" + id + " .next",

                    prevEl: ".tab-gallery.tab-" + id + " .prev",
                },

                autoplay: {
                    delay: 5000,

                    disableOnInteraction: false,
                },
            });
        });
    }

    if (jQuery(".gallery-popup").length) {
        jQuery(".gallery-popup .gallery-main").each(function () {
            var id = jQuery(this).attr("data-id");

            if (jQuery("#popup-gallery-" + id + " .gallery-thumb").length) {
                var galleryThumb = new Swiper("#popup-gallery-" + id + " .gallery-thumb", {
                    slidesPerView: 5,

                    spaceBetween: 10,

                    speed: 600,

                    breakpoints: {
                        768: {
                            slidesPerView: 5,

                            spaceBetween: 10,
                        },

                        300: {
                            slidesPerView: 3,

                            spaceBetween: 10,
                        },
                    },
                });
            } else {
                galleryThumb = "";
            }

            var galleryMain = new Swiper("#popup-gallery-" + id + " .gallery-main", {
                slidesPerView: 1,

                loop: true,

                thumbs: {
                    swiper: galleryThumb,
                },

                navigation: {
                    nextEl: "#popup-gallery-" + id + " .next",

                    prevEl: "#popup-gallery-" + id + " .prev",
                },

                speed: 600,

                autoplay: {
                    delay: 5000,

                    disableOnInteraction: false,
                },

                autoHeight: true,
            });
        });
    }

    if (jQuery(".subdivision-swiper").length) {
        jQuery(".subdivision-swiper").each(function () {
            var id = jQuery(this).attr("data-id");

            if (jQuery(".subdivision-swiper-thumb.swiper-" + id).length) {
                var subdivisionSwiperThumb = new Swiper(".subdivision-swiper-thumb.swiper-" + id, {
                    slidesPerView: 3,

                    spaceBetween: 10,

                    speed: 600,
                });
            } else {
                subdivisionSwiperThumb = "";
            }

            var subdivisionSwiper = new Swiper(".subdivision-swiper.swiper-" + id, {
                slidesPerView: 1,

                loop: true,

                thumbs: {
                    swiper: subdivisionSwiperThumb,
                },

                navigation: {
                    nextEl: ".tab-gallery-child-" + id + " .next",

                    prevEl: ".tab-gallery-child-" + id + " .prev",
                },

                speed: 600,

                autoplay: {
                    delay: 5000,

                    disableOnInteraction: false,
                },
            });

            // Add click event to open images in Fancybox gallery

            jQuery(".subdivision-swiper.swiper-" + id + " .swiper-slide").on("click", function () {
                var images = [];

                jQuery(".subdivision-swiper.swiper-" + id + " .swiper-slide").each(function () {
                    var imgSrc = jQuery(this).find("img").attr("src"); // Get the image source

                    var caption = jQuery(this).find("img").attr("alt") || ""; // Get the caption (using alt attribute)

                    images.push({
                        src: imgSrc,

                        type: "image",

                        caption: caption,
                    });
                });

                // Open the Fancybox gallery with the collected images

                jQuery.fancybox.open(images, {
                    loop: true,
                });
            });
        });
    }

    if (jQuery(".ground-popup-swiper").length) {
        jQuery(".ground-popup-swiper").each(function () {
            var id = jQuery(this).attr("data-id");

            var subdivisionSwiper = new Swiper(".ground-popup-swiper.swiper-" + id, {
                slidesPerView: 4,

                speed: 600,

                autoplay: {
                    delay: 5000,

                    disableOnInteraction: false,
                },

                breakpoints: {
                    1200: {
                        slidesPerView: 4,
                    },

                    768: {
                        slidesPerView: 3,
                    },

                    300: {
                        slidesPerView: 2,
                    },
                },
            });
        });
    }
}

function NKcustomSelect() {
    jQuery("select.custom-sl").each(function () {
        var $this = jQuery(this),
            numberOfOptions = jQuery(this).children("option").length;

        $this.addClass("select-hidden");

        var val = jQuery(this).val();

        $this.wrap('<div class="select"></div>');

        $this.after('<div class="select-styled"></div>');

        jQuery(this).hide();

        var $styledSelect = $this.next("div.select-styled");

        var $list = jQuery("<ul />", { class: "select-options" }).insertAfter($styledSelect);

        for (var i = 0; i < numberOfOptions; i++) {
            var active = val == $this.children("option").eq(i).val() ? "active" : "";

            $styledSelect.text($this.children("option:selected").text());

            jQuery("<li />", {
                text: $this.children("option").eq(i).text(),

                rel: $this.children("option").eq(i).val(),

                crclass: $this.children("option").eq(i).attr("class"),

                "data-class-section": $this.children("option").eq(i).attr("data-class-section"),

                class: active,
            }).appendTo($list);
        }

        var $listItems = $list.children("li");

        $styledSelect.click(function (e) {
            e.stopPropagation();

            jQuery("div.select-styled.active")
                .not(this)
                .each(function () {
                    jQuery(this).removeClass("active").next("ul.select-options").slideUp();
                });

            jQuery(this).toggleClass("active").next("ul.select-options").slideToggle();
        });

        $listItems.click(function (e) {
            $listItems.removeClass("active");

            jQuery(this).addClass("active");

            e.stopPropagation();

            $styledSelect.text(jQuery(this).text()).removeClass("active");

            $this.val(jQuery(this).attr("rel"));

            $this.trigger("change");

            $list.slideUp();
        });

        jQuery(document).click(function () {
            $styledSelect.removeClass("active");

            $list.slideUp();
        });

        jQuery("ul.select-options").slideUp();
    });
}

function addHeaderMobileClass() {
    if (window.innerWidth <= 549) {
        jQuery("#header").addClass("header-mobile");
    } else {
        jQuery("#header").removeClass("header-mobile");
    }
}

document.addEventListener("DOMContentLoaded", function () {
    Fancybox.bind("[data-fancybox]", {});
});

function handleHeaderScroll() {
    $(window).scroll(function () {
        const scrollPosition = $(window).scrollTop();

        // Kiểm tra nếu có header-single hoặc header-mobile
        if ($("header.header-single, header.header-mobile").length) {
            if (scrollPosition > 50) {
                $("header.header-single, header.header-mobile").addClass("header-shadow");
            } else {
                $("header.header-single, header.header-mobile").removeClass("header-shadow");
            }
        }
    });
}

function copyOnClick() {
    jQuery(".click-copy").click(function () {
        var data = jQuery(this).attr("data-copy");

        if (data) {
            var tempInput = jQuery("<textarea>");

            jQuery("body").append(tempInput);

            tempInput.val(data).select();

            document.execCommand("copy");

            tempInput.remove();

            Swal.fire({
                title: "Copy thĂ nh cĂ´ng",

                icon: "success",

                button: "Close",
            });
        } else {
            Swal.fire({
                title: "Lá»—i khĂ´ng xĂ¡c Ä‘á»‹nh. Vui lĂ²ng thá»­ láº¡i sau",

                icon: "error",

                button: "Close",
            });
        }
    });

    jQuery(document).on("click", ".click-popup-alert", function (e) {
        e.preventDefault();

        Swal.fire({
            title: "ChĂºng tĂ´i Ä‘ang cáº­p nháº­t thĂ´ng tin.<br>Vui lĂ²ng quay láº¡i sau",

            icon: "warning",

            button: "Close",
        });
    });
}
