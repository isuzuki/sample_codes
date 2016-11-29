exports.config = {
  // use testing framework definition
  framework: 'jasmine',

  seleniumAddress: 'http://localhost:4444/wd/hub',

  specs: ['test/e2e/todoListSpec.js'],

  // testing browsers definition
  multiCapabilities: [
    { browserName: 'firefox' },
    { browserName: 'chrome' }
  ]
};
