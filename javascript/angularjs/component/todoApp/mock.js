void function() {
  var run = function($httpBackend) {

    // response data
    var tasks = [
      {
        id: 1,
        title: '買い物',
      },
      {
        id: 2,
        title: '勉強',
      },
      {
        id: 3,
        title: '掃除',
      }
    ];

    // response definitions for requests
    $httpBackend.whenGET('/api/tasks').respond(tasks);
    $httpBackend.whenPOST('/api/tasks').respond();
    $httpBackend.whenDELETE(/\/api\/tasks\/\d+/).respond();
  };

  // register run phase processing
  angular
    .module('todoApp')
    .run([
      '$httpBackend',
      run
    ]);
}();
