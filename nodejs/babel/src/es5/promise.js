'use strict';

function sleep(callback, msec) {
  setTimeout(callback, msec);
}

sleep(function() {
  console.log('hello');
}, 1000);
