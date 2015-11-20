'use strict';

var ClickCounter = {
  _count: 0,

  start: function(selector) {
    var node = document.querySelector(selector);
    node.addEventListener('click', function(event) {
      this._count++;
    },bind(this));
  }
};

ClickCounter.start('body');
