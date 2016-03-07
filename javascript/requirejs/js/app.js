require([
  'js/vendor/easyselectbox.min.js',
], function() {
  $(function() {
    $('.js-jquery-append').append('<span>append</span>');

    $('.easy-select').easySelectBox({
      speed: 500
    });
  });
});
