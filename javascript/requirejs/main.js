requirejs.config({
  paths: {'jquery': 'http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min'},
  shim: {
    'alpha': { deps: ['jquery'] },
    'beta': { deps: ['jquery'] },
  },
});

require(['jquery', 'alpha', 'beta'], function($) {
  $(function() {
    $('body').alpha().beta();
  });
});
