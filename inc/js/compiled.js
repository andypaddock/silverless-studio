"use strict";jQuery(document).ready(function(s){s(".slide-nav__item").click(function(){var t=.1*s(window).height(),e=s(this).attr("ref-slide");s(".slide-nav__item.hit").removeClass("hit"),s(this).addClass("hit"),s("html, body").animate({scrollTop:s(".slide"+e).offset().top-t},500).center}),s(".nav-trigger").on("click",function(){s(".hamburger-menu").toggleClass("animate"),s(".menu-offscreen").toggleClass("active"),s(".container.content, .container-overflow-right, footer, .hero").toggleClass("blur")}),s(".container.content, .container-overflow-right, footer, .hero").on("click",function(){s(this).hasClass("blur")&&(s(".container.content, .container-overflow-right, footer, .hero").toggleClass("blur"),s(".menu-offscreen").toggleClass("active"),s(".hamburger-menu").toggleClass("animate"))}),s(".toggle-list__item .trigger").on("click",function(){s(".toggle-list__item .trigger.active").removeClass("active"),s(this).addClass("active"),s(".target.open").removeClass("open"),s(this).next(".target").addClass("open")}),s(".content .scroll-arrow").click(function(t){var e,o;e=s(window).height(),o=.9*e,s("html, body").animate({scrollTop:(Math.ceil(s(window).scrollTop()/e)+1)*o},500),t.preventDefault()}),s(".wpcf7-form-control").on("input",function(){s(this).val()?s(this).parents(".form-field").addClass("contains-content"):s(this).parents(".form-field").removeClass("contains-content")}),s("#checker").change(function(){s(this).is(":checked")?s(".checkbox").addClass("checked"):s(".checkbox").removeClass("checked")}),s.fn.isOnScreen=function(){var t=s(window),e={top:t.scrollTop(),left:t.scrollLeft()};e.right=e.left+t.width(),e.bottom=e.top+t.height();var o=this.offset();return o.right=o.left+this.outerWidth(),o.bottom=o.top+this.outerHeight(),!(e.right<o.left||e.left>o.right||e.bottom<o.top||e.top>o.bottom)},s(".slide-up, .slide-down, .slide-right, .slow-fade").each(function(){s(this).isOnScreen()&&s(this).addClass("active")}),s.fn.isInViewport=function(){var t=s(this).offset().top,e=t+s(this).outerHeight(),o=s(window).scrollTop(),i=o+s(window).height();return o<e&&t<i},s(window).on("resize scroll",function(){s(".slide-up, .slide-down, .slide-right, .slow-fade").each(function(){s(this).isInViewport()&&s(this).addClass("active")})}),s(".owl-carousel.detail-carousel").owlCarousel({loop:!1,margin:10,nav:!1,lazyLoad:!0,responsive:{0:{items:1},600:{items:1},800:{items:2},1200:{items:1}}});var t=s(".owl-carousel.testimonial-carousel");t.owlCarousel({loop:!0,margin:0,nav:!1,lazyLoad:!0,dots:!1,responsive:{0:{items:1},600:{items:1},800:{items:1},1200:{items:1}}}),s(".testimonial-carousel--next").click(function(){t.trigger("next.owl.carousel")}),s(".testimonial-carousel--prev").click(function(){t.trigger("prev.owl.carousel")})});