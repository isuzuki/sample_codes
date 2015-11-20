'use strict';

var ClickCounter = {
  _count: 0,

  start: function(selector) {
    var node = document.querySelector(selector);
    node.addEventListener('click', (event) => {
      this.count++;
    });
  }
};

ClickCounter.start('body');
