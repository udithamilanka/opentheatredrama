/* eslint-disable quotes */
import "lightcase/src/js/lightcase.js";
import "select2/dist/js/select2.min.js";

var shrinkHeader = 5;

export default {
  init() {
    // JavaScript to be fired on all pages
  },
  finalize() {
    // JavaScript to be fired on all pages, after page specific JS is fired

    jQuery(".select2-wrapper").select2();

    // jQuery("a[data-rel^=lightcase]").lightcase();

    jQuery("a[data-rel^=lightcase]").lightcase({
      slideshowAutoStart: false,
    });
  },
};

function getCurrentScroll() {
  return window.pageYOffset || document.documentElement.scrollTop;
}

$(window).scroll(function () {
  var scroll = getCurrentScroll();
  if (scroll >= shrinkHeader) {
    $('body, .header-container').addClass('sticky-header');
  } else {
    $('body, .header-container').removeClass('sticky-header');
  }
});
