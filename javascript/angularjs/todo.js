function TodoCtrl($scope) {

	$scope.tasks = [];

	$scope.add = function() {
		$scope.tasks.push({
			title: $scope.name,
		});
	};
}
