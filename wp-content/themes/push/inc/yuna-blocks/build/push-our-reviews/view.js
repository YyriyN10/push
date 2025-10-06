/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!**************************************!*\
  !*** ./src/push-our-reviews/view.js ***!
  \**************************************/
/**
 * Use this file for JavaScript code that you want to run in the front-end
 * on posts/pages that contain this block.
 *
 * When this file is defined as the value of the `viewScript` property
 * in `block.json` it will be enqueued on the front end of the site.
 *
 * Example:
 *
 * ```js
 * {
 *   "viewScript": "file:./view.js"
 * }
 * ```
 *
 * If you're not making any changes to this file because your project doesn't need any
 * JavaScript running in the front-end, then you should delete this file and remove
 * the `viewScript` property from `block.json`.
 *
 * @see https://developer.wordpress.org/block-editor/reference-guides/block-api/block-metadata/#view-script
 */

jQuery(function ($) {
  $('#reviews-slider').slick({
    autoplay: false,
    autoplaySpeed: 500,
    lazyLoad: 'ondemand',
    slidesToShow: 3,
    centerMode: true,
    centerPadding: 0,
    slidesToScroll: 1,
    asNavFor: '#preview-reviews-slider',
    arrows: false,
    fade: false,
    dots: false,
    responsive: [{
      breakpoint: 992,
      settings: {
        slidesToShow: 1,
        centerPadding: "25%"
      }
    }, {
      breakpoint: 767,
      settings: {
        slidesToShow: 1,
        centerPadding: "15%"
      }
    }, {
      breakpoint: 575,
      settings: {
        slidesToShow: 1,
        centerMode: false,
        fade: true
      }
    }]
  });
  $('#preview-reviews-slider').slick({
    autoplay: false,
    autoplaySpeed: 500,
    lazyLoad: 'ondemand',
    centerMode: true,
    variableWidth: true,
    slidesToShow: 3,
    pauseOnHover: false,
    slidesToScroll: 1,
    asNavFor: '#reviews-slider',
    focusOnSelect: true,
    arrows: false,
    fade: false,
    dots: false
    /*responsive: [
      {
        breakpoint: 1200,
        settings: {
          slidesToShow: 5
        }
      },
      {
        breakpoint: 767,
        settings: {
          slidesToShow: 3
        }
      },
      {
        breakpoint: 440,
        settings: {
          slidesToShow: 2
        }
      }
    ]*/
  });
  $('.wp-block-push-blocks-push-our-reviews .control.prev').click(function (e) {
    e.preventDefault();
    $('#reviews-slider').slick('slickPrev');
    $('#preview-reviews-slider').slick('slickPrev');
  });
  $('.wp-block-push-blocks-push-our-reviews .control.next').click(function (e) {
    e.preventDefault();
    $('#reviews-slider').slick('slickNext');
    $('#preview-reviews-slider').slick('slickNext');
  });
});
/******/ })()
;
//# sourceMappingURL=view.js.map