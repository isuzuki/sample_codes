'use strict'

// デフォルト引数
;
function loop(callable) {
  var count = arguments.length <= 1 || arguments[1] === undefined ? 3 : arguments[1];

  for (var i = 0; i < count; i++) {
    callable();
  }
}

// 可変長引数
function sum() {
  for (var _len = arguments.length, numbers = Array(_len), _key = 0; _key < _len; _key++) {
    numbers[_key] = arguments[_key];
  }

  return numbers.reduce(function (x, y) {
    return x + y;
  });
}

loop(function () {
  console.log('hello');
});

console.log(sum(1, 2, 3, 4, 5));