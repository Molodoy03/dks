!function(o){o(document).on("ready",(function(){var n=o(".export_work .works-slider");if(n.length){n.each((function(){o(this).slick({dots:!1,arrows:!1,infinite:!1,slidesToShow:1,slidesToScroll:1,responsive:[{breakpoint:991,settings:{swipe:!1}}]})}));let i=o(".control-box .prev");i.length&&i.on("click",(function(){n.slick("slickPrev")}));let e=o(".control-box .next");e.length&&e.on("click",(function(){n.slick("slickNext")}))}}))}(jQuery);