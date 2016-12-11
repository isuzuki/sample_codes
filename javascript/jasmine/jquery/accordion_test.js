/**
 * jasmine jquery sample
 * @see http://viewpoint-nk.github.io/blog/jasmine/jasmine-htmltesting.html
 */
(function($) {
  // read html path
  jasmine.getFixtures().fixturesPath = '..';
  var html = readFixtures('accordion.html');

  // before execute
  beforeEach(function() {
    $('body').append('<div id="test-wrap"></div>');
    $('#test-wrap').html(html);
  });

  // after execute
  afterEach(function() {
    $('#test-warp').remove();
  });

  describe('test accordion', function() {
    it('hide accordion-list', function() {
      $('.accordion-trigger').trigger('click');
      expect($('.accordion-list').css('display')).toEqual('block');

      $('.accordion-trigger').trigger('click');
      expect($('.accordion-list').css('display')).toEqual('block');

      $('.accordion-trigger').trigger('click');
      expect($('.accordion-list').css('display')).toEqual('block');
    });
  });
})(jQuery);
