"undefined" == typeof themeConfig && (themeConfig = {});
var ghosthunter_key = themeConfig.ghostSearchKey;
!(function (e) {
    "use strict";
    e(window).on("load", function () {
        e(".lds-css").fadeOut(1e3);
    }),
        e(".slimmenu").slimmenu({ resizeWidth: "992", collapserTitle: "", animSpeed: "fast", easingEffect: null, indentChildren: !0 }),
        AOS.init({ offset: 120, delay: 0, duration: 400, easing: "ease", once: !0, mirror: !1, anchorPlacement: "top-bottom" }),
        e('[data-toggle="tooltip"]').tooltip(),
        e(".container").fitVids();
    var t = e(".social-fixed");
    e(window).scroll(function () {
        e(window).scrollTop() >= 600 ? t.removeClass("hide-social").addClass("show-social") : t.removeClass("show-social").addClass("hide-social");
    }),
        e(window).scroll(function () {
            e(this).scrollTop() >= 50 ? e("#return-top").fadeIn(200) : e("#return-top").fadeOut(200);
        }),
        e("#return-top").on("click", function () {
            e("body,html").animate({ scrollTop: 0 }, 500);
        }),
        e(".banner-slider").owlCarousel({ nav: !1, dots: !0, margin: 30, autoplay: !0, responsive: { 0: { items: 1 }, 1e3: { items: 1 } } }),
        e(".latest-slider").owlCarousel({ nav: !0, dots: !1, margin: 30, autoplay: !0, responsive: { 0: { items: 1 }, 600: { items: 1 }, 1e3: { items: 2 } } }),
        e(".author-bio-slider").owlCarousel({ nav: !0, dots: !1, margin: 30, autoplay: !0, responsive: { 0: { items: 1 }, 600: { items: 1 }, 1e3: { items: 1 } } });
    var a = e("link[rel=next]").attr("href"),
        o = e(".js-load-posts");
    o.click(function (t) {
        t.preventDefault();
        var i = a.split(/page/)[0] + "page/" + pagination_next_page_number + "/";
        e.ajax({
            url: i,
            beforeSend: function () {
                o.text("Loading"), o.addClass("button--loading");
            },
        }).done(function (t) {
            var a = e(".post", t);
            o.text("Load More"), o.removeClass("button--loading"), e(".posts").append(a), pagination_next_page_number++, pagination_next_page_number > pagination_available_pages_number && o.addClass("c-btn-disabled").attr("disabled", !0);
        });
    }),
        e(".mailchimp_subscribe").length > 0 && e(".subscribe-form.mailchimp_subscribe").attr("action", mailchimp_url),
        document.querySelectorAll(".kg-gallery-image img").forEach(function (e) {
            var t = e.closest(".kg-gallery-image"),
                a = e.attributes.width.value / e.attributes.height.value;
            t.style.flex = a + " 1 0%";
        }),
        mediumZoom(".kg-gallery-image img", { margin: 30 });
    var i,
        n = document.getElementById("switch_theme");
    if (n) {
        (i = null !== localStorage.getItem("switch_theme") && "dark" === localStorage.getItem("switch_theme")),
            (n.checked = i),
            i ? document.body.setAttribute("data-theme", "dark") : document.body.removeAttribute("data-theme"),
            n.addEventListener("change", function (e) {
                n.checked ? (document.body.setAttribute("data-theme", "dark"), localStorage.setItem("switch_theme", "dark")) : (document.body.removeAttribute("data-theme"), localStorage.removeItem("switch_theme"));
            });
    }
    void 0 !== themeConfig.searchHint && "" != themeConfig.searchHint && e("#ghost-search-field").attr("placeholder", themeConfig.searchHint);
    var s = !1;
    void 0 !== themeConfig.includeBodyInSearch && "" != themeConfig.includeBodyInSearch && "boolean" == typeof themeConfig.includeBodyInSearch && (s = themeConfig.includeBodyInSearch);
    var l = e("#gh-search-text").ghostHunter({
        results: "#gh-search-results",
        onKeyUp: !0,
        displaySearchInfo: !1,
        zeroResultsInfo: !0,
        includebodysearch: s,
        result_template: "<a id='gh-id-{{ref}}' class='gh-search-item' href='{{link}}'><h2 class='search-post-title'>{{title}}</h2> <span class='link-url'>{{link}}</span> </a>",
        info_template: "<p>Number of posts found: {{amount}}</p>",
        onComplete: function (t) {
            e("#gh-search-results").fadeIn();
        },
    });
    e(document).keyup(function (t) {
        27 === t.keyCode && (l.clear(), e("#gh-search-text").val("").blur(), e("#gh-search-results").fadeOut());
    });
})(jQuery);
