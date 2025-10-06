/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!***********************************!*\
  !*** ./src/push-our-team/view.js ***!
  \***********************************/
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
  $('#team-slider').slick({
    autoplay: false,
    autoplaySpeed: 1000,
    lazyLoad: 'ondemand',
    slidesToShow: 3,
    pauseOnHover: false,
    slidesToScroll: 1,
    arrows: false,
    fade: false,
    dots: false,
    responsive: [{
      breakpoint: 575,
      settings: {
        slidesToShow: 2
      }
    }, {
      breakpoint: 380,
      settings: {
        slidesToShow: 1,
        fade: true
      }
    }]
  });
  $('.wp-block-push-blocks-push-our-team .control.next').click(function (e) {
    e.preventDefault();
    $('#team-slider').slick('slickNext');
  });
});
/******/ })()
;
//# sourceMappingURL=view.js.map