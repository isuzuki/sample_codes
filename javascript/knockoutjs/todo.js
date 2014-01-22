var viewModel = function() {
	var self = this;
	self.title = ko.observable("");
	self.tasks = ko.observableArray([]);

	self.add = function() {
		self.tasks.push({
			title: self.title(),
		});
	};
};

ko.applyBindings(new viewModel());
