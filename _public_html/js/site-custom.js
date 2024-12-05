! function(e) {
  "use strict";
  feather.replace({
    "stroke-width": 1.5
  }), e(".dropdown-menu a.dropdown-toggle-mob").on("click", (function(o) {
    return e(this).next().hasClass("show") || e(this).parents(".dropdown-menu").first().find(".show").removeClass("show"), e(this).next(".dropdown-menu").toggleClass("show"), e(this).parents("li.nav-item.dropdown.show").on("hidden.bs.dropdown", (function(o) {
      e(".dropdown-submenu .show").removeClass("show")
    })), !1
  })), e("#basicuse").jflickrfeed({
    limit: 6,
    qstrings: {
      id: "52617155@N08"
    },
    itemTemplate: '<li><a href="{{image_b}}"><img src="{{image_s}}" alt="{{title}}" /></a></li>'
  });
  var o = {
    loader_site: function() {
      e(window).load((function() {
        e("#pageloader").delay(1200).fadeOut("slow"), e(".loader-item").delay(700).fadeOut()
      }))
    },
    featured_countdown: function() {
      if (e("#featured-cause").length) {
        var o = new Date,
        t = o.getDate(),
        s = o.getMonth() + 1 + "/" + t + "/" + (o.getFullYear() + 1) + " 07:07:07";
        e("#featured-cause").countdown({
          date: s,
          offset: 2,
          day: "Day",
          days: "Days",
          hideOnComplete: !0
        }, (function(e) {
          alert("Done!")
        }))
      }
    },
    select_globally: function() {
      e("select").length && e("select").select2({
        width: "resolve",
        theme: "form-dark",
        minimumResultsForSearch: -1
      })
    },
    select_donation: function() {
      e(".donation-select").length && e(".donation-select").select2({
        width: "resolve",
        theme: "form-dark",
        placeholder: "Select Country",
        minimumResultsForSearch: -1
      })
    },
    select_light: function() {
      e(".form-light-select").length && e(".form-light-select").select2({
        width: "resolve",
        theme: "form-light",
        minimumResultsForSearch: -1
      })
    },
    select_charity_home: function() {
      e(".home-charity").length && e(".home-charity").select2({
        width: "resolve",
        theme: "form-light",
        placeholder: "Select Causes",
        minimumResultsForSearch: -1
      })
    },
    tooltip_globally: function() {
      e('[data-toggle="tooltip"]').length && e('[data-toggle="tooltip"]').tooltip()
    },
    header_anim: function() {
      e(".header-fullpage").length && e(window).scroll((function() {
        e(this).scrollTop() > 80 ? e(".header-fullpage").addClass("fixed animated fadeInDown fixed-top") : e(".header-fullpage").removeClass("fixed animated fadeInDown fixed-top")
      }))
    },
    search_overlay: function() {
      e(".overlay-close").length && e("#search_home, .overlay-close").on("click", (function(o) {
        o.preventDefault(), e(".overlay").toggleClass("open")
      }))
    },
    back_to_top: function() {
      e("#mkdf-back-to-top").length && (e(window).scroll((function() {
        e(this).scrollTop() > 100 ? e("#mkdf-back-to-top").addClass("on") : e("#mkdf-back-to-top").removeClass("on")
      })), e("#mkdf-back-to-top").click((function() {
        return e("html, body").animate({
          scrollTop: 0
        }, 600), !1
      })))
    },
    toggle_accordion: function() {
      e(".toggle").length && e(".toggle").click((function() {
        e(".toggle").removeClass("arrow-down"), e(this).next().hasClass("show") || (e(this).parent().children(".collapse.show").collapse("hide"), e(this).toggleClass("arrow-down")), e(this).next().collapse("toggle")
      }))
    },
    animated_skillbar: function() {
      e(".skillbar").length && (e(".skillbar").appear(), e(".skillbar").on("appear", (function() {
        e(this).find(".skillbar-bar").animate({
          width: e(this).attr("data-percent")
        }, 3e3)
      })))
    },
    animated_counter: function() {
      e(".counter").length && e(".counter").counterUp({
        delay: 10,
        time: 1e3
      })
    },
    magnific_popup: function() {
      e(".popup-video").length && (e(".popup-video").magnificPopup({
        type: "iframe",
        mainClass: "mfp-fade",
        removalDelay: 160,
        preloader: !0,
        fixedContentPos: !0
      }), e(".img-gallery").each((function() {
        e(this).magnificPopup({
          delegate: "a",
          type: "image",
          gallery: {
            enabled: !0,
            preload: [0, 2],
            navigateByImgClick: !0,
            arrowMarkup: '<button title="%title%" type="button" class="mfp-arrow mfp-arrow-%dir%"></button>',
            tPrev: "Previous (Left arrow key)",
            tNext: "Next (Right arrow key)",
            tCounter: '<span class="mfp-counter">%curr% of %total%</span>'
          }
        })
      })))
    },
    carousel_home_testimonials: function() {
      e("#home-client-testimonials").length && e("#home-client-testimonials").owlCarousel({
        items: 2,
        margin: 30,
        loop: !0,
        nav: !0,
        slideBy: 1,
        dots: !1,
        center: !1,
        autoplay: !0,
        autoheight: !0,
        navText: ['<span class="icofont-arrow-left"></span>', '<i class="icofont-arrow-right"></i>'],
        responsive: {
          320: {
            items: 1
          },
          600: {
            items: 1
          },
          767: {
            items: 2
          },
          1e3: {
            items: 3,
            loop: !0
          },
          1200: {
            items: 3,
            loop: !0
          }
        }
      })
    },
    carousel_our_donator: function() {
      e("#our-donator-slider-warp").length && e("#our-donator-slider-warp").owlCarousel({
        items: 2,
        margin: 30,
        loop: !0,
        nav: !1,
        slideBy: 1,
        dots: !1,
        center: !1,
        autoplay: !0,
        autoheight: !0,
        navText: ['<span class="icofont-arrow-left"></span>', '<i class="icofont-arrow-right"></i>'],
        responsive: {
          320: {
            items: 1
          },
          600: {
            items: 2
          },
          767: {
            items: 2
          },
          1e3: {
            items: 3,
            loop: !0
          },
          1200: {
            items: 2,
            loop: !0
          }
        }
      })
    },
    carousel_home_clients: function() {
      e("#home-clients").length && e("#home-clients").owlCarousel({
        items: 2,
        margin: 30,
        loop: !0,
        nav: !1,
        slideBy: 1,
        dots: !0,
        center: !1,
        autoplay: !0,
        autoheight: !0,
        navText: ['<i class="icofont-thin-left"></i>', '<i class="icofont-thin-right"></i>'],
        responsive: {
          320: {
            items: 2
          },
          600: {
            items: 3
          },
          767: {
            items: 4
          },
          1e3: {
            items: 5,
            loop: !0
          },
          1200: {
            items: 5,
            loop: !0
          }
        }
      })
    },
    carousel_home_blog: function() {
      e("#home-blog-post").length && e("#home-blog-post").owlCarousel({
        items: 1,
        margin: 30,
        loop: !0,
        nav: !0,
        slideBy: 1,
        dots: !1,
        center: !1,
        autoplay: !0,
        autoheight: !0,
        navText: ['<span class="icofont-arrow-left"></span>', '<i class="icofont-arrow-right"></i>'],
        responsive: {
          320: {
            items: 1
          },
          600: {
            items: 2
          },
          767: {
            items: 2
          },
          1e3: {
            items: 3,
            loop: !0
          },
          1200: {
            items: 3,
            loop: !0
          },
          1920: {
            items: 3,
            loop: !0
          }
        }
      })
    },
    carousel_home_second_blog: function() {
      e("#home-second-blog-post").length && e("#home-second-blog-post").owlCarousel({
        items: 3,
        margin: 30,
        loop: false,
        nav: !0,
        // slideBy: 1,
        dots: !1,
        // center: !1,
        autoplay: !0,
        autoheight: !0,
        navText: ['<span class="icofont-arrow-left"></span>', '<i class="icofont-arrow-right"></i>'],
        responsive: {
          320: {
            items: 1
          },
          600: {
            items: 1
          },
          767: {
            items: 2
          },
          1e3: {
            items: 3,
            // loop: !0
          },
          1200: {
            items: 3,
            // loop: !0
          },
          1920: {
            items: 3,
            // loop: !0
          }
        }
      })
    },
    carousel_aside_causes: function() {
      e("#sidebar-causes").length && e("#sidebar-causes").owlCarousel({
        items: 1,
        margin: 30,
        loop: !0,
        nav: !1,
        slideBy: 1,
        dots: !0,
        center: !1,
        autoplay: !0,
        autoheight: !0,
        navText: ['<i class="icofont-thin-left"></i>', '<i class="icofont-thin-right"></i>']
      })
    },
    carousel_home_second_causes: function() {
      e("#home-second-causes").length && e("#home-second-causes").owlCarousel({
        items: 1,
        margin: 30,
        loop: !0,
        nav: !1,
        slideBy: 1,
        dots: !0,
        center: !1,
        autoplay: !0,
        autoheight: !0,
        navText: ['<span class="icofont-arrow-left"></span>', '<i class="icofont-arrow-right"></i>'],
        responsive: {
          320: {
            items: 1
          },
          600: {
            items: 1
          },
          767: {
            items: 2
          },
          1e3: {
            items: 3,
            loop: !0
          }
        }
      })
    },
    carousel_home_second_events: function() {
      e("#home-second-events").length && e("#home-second-events").owlCarousel({
        items: 1,
        margin: 30,
        loop: !0,
        nav: !0,
        slideBy: 1,
        dots: !1,
        center: !1,
        autoplay: !0,
        autoheight: !0,
        navText: ['<span class="icofont-arrow-left"></span>', '<i class="icofont-arrow-right"></i>'],
        responsive: {
          320: {
            items: 1
          },
          600: {
            items: 1
          },
          767: {
            items: 2
          },
          1e3: {
            items: 3,
            loop: !0
          }
        }
      })
    },
    carousel_home_second_testimonials: function() {
      e("#home-second-testimonials").length && e("#home-second-testimonials").owlCarousel({
        items: 1,
        margin: 30,
        loop: !0,
        nav: !0,
        slideBy: 1,
        dots: !1,
        center: !1,
        autoplay: !1,
        autoheight: !0,
        navText: ['<span class="icofont-arrow-left"></span>', '<i class="icofont-arrow-right"></i>']
      })
    },
    contact_form: function() {
      e("#contact_form").length && e("#contact_form").validate({
        meta: "validate",
        submitHandler: function(o) {
          var t = e("#name").val(),
          s = e("#lastname").val(),
          a = e("#email").val(),
          i = e("#phone").val(),
          n = e("#subject").val(),
          l = e("#comment").val();
          return e.post("contact.php", {
            name: t,
            lastname: s,
            email: a,
            phone: i,
            subject: n,
            comment: l
          }, (function(o) {
            e("#sucessmessage").append(o)
          })), e("#contact_form").hide(), !1
        },
        rules: {
          name: "required",
          lastname: "required",
          email: {
            required: !0,
            email: !0
          },
          phone: {
            required: !0
          },
          comment: {
            required: !0
          },
          subject: {
            required: !0
          }
        },
        messages: {
          name: "Please enter your name.",
          lastname: "Please enter your last name.",
          email: {
            required: "Please enter email.",
            email: "Please enter valid email"
          },
          phone: "Please enter a phone.",
          subject: "Please enter your message.",
          comment: "Please enter a comment."
        }
      })
    },
    initializ: function() {
      this.featured_countdown(), this.select_globally(), this.select_donation(), this.select_light(), this.select_charity_home(), this.tooltip_globally(), this.header_anim(), this.search_overlay(), this.back_to_top(), this.toggle_accordion(), this.animated_skillbar(), this.animated_counter(), this.magnific_popup(), this.carousel_home_testimonials(), this.carousel_our_donator(), this.carousel_home_clients(), this.carousel_home_blog(), this.carousel_home_second_blog(), this.carousel_aside_causes(), this.carousel_home_second_causes(), this.carousel_home_second_events(), this.carousel_home_second_testimonials(), this.contact_form()
    }
  };
  e((function() {
    o.loader_site(), o.initializ()
  }))
}(jQuery);
