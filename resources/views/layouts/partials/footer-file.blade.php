
<script>(function () {
        function addEventListener(element, event, handler) {
            if (element.addEventListener) {
                element.addEventListener(event, handler, false);
            } else if (element.attachEvent) {
                element.attachEvent('on' + event, handler);
            }
        }
        function maybePrefixUrlField() {
            if (this.value.trim() !== '' && this.value.indexOf('http') !== 0) {
                this.value = "http://" + this.value;
            }
        }

        var urlFields = document.querySelectorAll('.mc4wp-form input[type="url"]');
        if (urlFields && urlFields.length > 0) {
            for (var j = 0; j < urlFields.length; j++) {
                addEventListener(urlFields[j], 'blur', maybePrefixUrlField);
            }
        }
        /* test if browser supports date fields */
        var testInput = document.createElement('input');
        testInput.setAttribute('type', 'date');
        if (testInput.type !== 'date') {

            /* add placeholder & pattern to all date fields */
            var dateFields = document.querySelectorAll('.mc4wp-form input[type="date"]');
            for (var i = 0; i < dateFields.length; i++) {
                if (!dateFields[i].placeholder) {
                    dateFields[i].placeholder = 'YYYY-MM-DD';
                }
                if (!dateFields[i].pattern) {
                    dateFields[i].pattern = '[0-9]{4}-(0[1-9]|1[012])-(0[1-9]|1[0-9]|2[0-9]|3[01])';
                }
            }
        }
    })();
</script>
<script src=/js/b33cb.js></script>
<script>var LRM = { "password_zxcvbn_js_src": "https:\/\/wp.wp-preview.com\/inhype\/inhype-1\/wp-includes\js\/zxcvbn.min.js", "password_strength_lib": null, "redirect_url": "", "ajax_url": "https:\/\/wp.wp-preview.com\/inhype\/inhype-1\/?lrm=1", "is_user_logged_in": "", "reload_after_login": null, "selectors_mapping": { "login": "", "register": "" }, "is_customize_preview": "", "l10n": { "password_is_good": "Good Password", "password_is_strong": "Strong Password", "password_is_short": "Too Short Password", "password_is_bad": "Bad Password", "passwords_is_mismatch": "Passwords is mismatch!" } };</script>
<script src=/js/b5d70.js></script>
<script>var wpcf7 = { "apiSettings": { "root": "https:\/\/wp.wp-preview.com\/inhype\/inhype-1\/wp-json\/contact-form-7\/v1", "namespace": "contact-form-7\/v1" }, "cached": "1" };</script>
<script src=/js/83994.js></script>
<script>var ctcc_vars = { "expiry": "30", "method": "1", "version": "1" };</script>
<script src=/js/c4895.js></script>
<script>/*<![CDATA[*/var thickboxL10n = { "next": "Next >", "prev": "< Prev", "image": "Image", "of": "of", "close": "Close", "noiframes": "This feature requires inline frames. You have iframes disabled or your browser does not support them.", "loadingAnimation": "..\/\assets\/\loadingAnimation.gif" };/*]]>*/</script>
<script src=/js/e3800.js></script>
<script>

    (function ($) {
        $(document).ready(function () {

            "use strict";

            var owlpostslider = $(".inhype-fullwidthpostsslider-block.inhype-fullwidthpostsslider-block-857937 .owl-carousel").owlCarousel({
                loop: true,
                items: 1,
                autoplay: true,
                autowidth: false,
                autoplaySpeed: 1000,
                navSpeed: 1000,
                nav: true,
                slideBy: "page",
                dots: false,
                navText: false,
                responsive: {
                    1199: {
                        items: 1
                    },
                    979: {
                        items: 1
                    },
                    768: {
                        items: 1
                    },
                    479: {
                        items: 1
                    },
                    0: {
                        items: 1
                    }
                }
            });

            owlpostslider.on("changed.owl.carousel", function (event) {

                var current_slide = event.item.index - 1;
                if (current_slide == 4) {
                    current_slide = 1;
                }

                $(".inhype-fullwidthpostsslider-block-wrapper.inhype-fullwidthpostsslider-block-wrapper-857937 .inhype-fullwidthpostsslider-block-pagination .inhype-fullwidthpostsslider-page").removeClass("active");

                $(".inhype-fullwidthpostsslider-block-wrapper.inhype-fullwidthpostsslider-block-wrapper-857937 .inhype-fullwidthpostsslider-block-pagination .inhype-fullwidthpostsslider-page.inhype-fullwidthpostsslider-page-" + current_slide).addClass("active");

            });

            $(".inhype-fullwidthpostsslider-block-wrapper.inhype-fullwidthpostsslider-block-wrapper-857937 .inhype-fullwidthpostsslider-block-pagination .inhype-fullwidthpostsslider-page").on("click", function (e) {

                owlpostslider.trigger("to.owl.carousel", $(this).data("id") - 1);

            });

            $(".inhype-fullwidthpostsslider-block-wrapper.inhype-fullwidthpostsslider-block-wrapper-857937 .inhype-fullwidthpostsslider-block-pagination").addClass("show-flex");

            AOS.refresh();

        });
    })(jQuery);

    (function ($) {
        $(document).ready(function () {

            "use strict";

            var owlpostslider = $(".inhype-posthighlight-block.inhype-posthighlight-block-685784.owl-carousel").owlCarousel({
                loop: true,
                items: 1,
                autoplay: true,
                autowidth: false,
                autoplaySpeed: 1000,
                navSpeed: 1000,
                nav: true,
                dots: false,
                navText: false,
                responsive: {
                    1199: {
                        items: 1
                    },
                    979: {
                        items: 1
                    },
                    768: {
                        items: 1
                    },
                    479: {
                        items: 1
                    },
                    0: {
                        items: 1
                    }
                }
            });

            AOS.refresh();

        });
    })(jQuery);
    (function ($) {
        $(document).ready(function () {

            var owlpostslider = $(".inhype-carousel-block.inhype-carousel-block-835188 .owl-carousel").owlCarousel({
                loop: true,
                items: 4,
                autoplay: true,
                autowidth: false,
                autoplaySpeed: 500,
                navSpeed: 500,
                margin: 30,
                nav: false,
                dots: false,
                navText: false,
                slideBy: 4,
                responsive: {
                    1199: {
                        items: 4,
                        slideBy: 4
                    },
                    979: {
                        items: 4,
                        slideBy: 4
                    },
                    768: {
                        items: 2,
                        slideBy: 1
                    },
                    479: {
                        items: 1,
                        slideBy: 1
                    },
                    0: {
                        items: 1,
                        slideBy: 1
                    }
                }
            });

            AOS.refresh();

        });
    })(jQuery);
</script>
<script src="/js/fdc64.js"></script>
<script src="/js/26233.js"></script>
