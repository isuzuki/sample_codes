$(function() {
  $('.accordion-list').hide();
  $('.accordion-trigger').on('click', function() {
    $(this).next('.accordion-list').stop().slideToggle();
  });
});
