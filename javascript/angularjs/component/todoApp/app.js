void function() {
  'use strict';

  angular.module('todoApp', [
    'ngResource',
    'ngMockE2E',
    'components',
    'controllers',
    'factories'
  ]);

  angular.module('components', []);
  angular.module('controllers', []);
  angular.module('factories', []);
}();
