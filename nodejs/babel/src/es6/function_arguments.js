'use strict';

// デフォルト引数
function loop(callable, count = 3) {
  for (var i = 0; i < count; i++) {
    callable();
  }
}

// 可変長引数
function sum(...numbers) {
  return numbers.reduce(function(x, y) {
    return x + y;
  });
}

loop(function() {
  console.log('hello');
});

console.log(sum(1, 2, 3, 4, 5));
