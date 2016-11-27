void function() {
  /**
   * todoList component controller
   */
  var todoListController = function(tasksResource) {
    var _this = this;

    _this.data = {};
    _this.items = tasksResource.query();

    // add task
    _this.addTask = function() {
      // empty check
      if (!_this.data.text) {
        return;
      }

      var task = new tasksResource({
        title: _this.data.text
      });

      // post request
      task.$save(function(response) {
        // provisional value
        response.id = _this.items.length + 1;
        _this.items.push(response);
      });

      clearText();
    };

    // remove task
    _this.removeTask = function($index) {
      // delete request
      _this.items[$index].$remove(function() {
        _this.items.splice($index, 1);
      });
    };

    // clear input value
    var clearText = function() {
      delete _this.data.text;
    };
  };

  // register controllers module
  angular
    .module('controllers')
    .controller('todoListController', todoListController);
}();
