'use strict';

// デフォルト引数
function loop(callable, count) {
  count = count || 3;
  for (var i = 0; i < count; i++) {
    callable();
  }
}

// 可変長引数
function sum() {
  var result = 0;
  for (var i = 0; i < arguments.length; i++) {
    result += arguments[i];
  }

  return result;
}

loop(function() {
  console.log('hello');
});

console.log(sum(1, 2, 3, 4, 5));
