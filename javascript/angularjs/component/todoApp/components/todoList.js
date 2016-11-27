void function() {
  // template
  var template = [
    '<input type="text" ng-model="$ctrl.data.text">',
    '<button type="button" ng-click="$ctrl.addTask()">追加</button>',
    '<ul>',
      '<li ng-repeat="item in $ctrl.items">',
        '<span ng-bind="item.title"></span>',
        '<button ng-click="$ctrl.removeTask($index)">削除</button>',
      '</li>',
    '</ul>'
  ];

  // definition component
  var todoList = {
    template: template.join(''),
    controller: 'todoListController'
  };

  // register components module
  angular
    .module('components')
    .component('todoList', todoList);
}();
