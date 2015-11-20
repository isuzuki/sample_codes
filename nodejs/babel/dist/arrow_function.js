'use strict';

var ClickCounter = {
  _count: 0,

  start: function start(selector) {
    var _this = this;

    var node = document.querySelector(selector);
    node.addEventListener('click', function (event) {
      _this.count++;
    });
  }
};

ClickCounter.start('body');