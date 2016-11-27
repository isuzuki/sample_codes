void function() {
  var tasksResource = function($resource) {
    return $resource('/api/tasks/:id', {
      id: '@id'
    });
  };

  // register factories module
  angular
    .module('factories')
    .factory('tasksResource', [
      '$resource',
      tasksResource
    ]);
}();
