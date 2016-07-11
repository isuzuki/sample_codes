'use strict';

var meld = require('meld');

function Phone() {};
Phone.prototype.dial = function (friend) {
  var start = new Date().getTime();

  if (friend && friend.picksUp) {
    var end = new Date().getTime();
    return friend.message;

  } else {
    throw 'No answer!';
  }
};

meld.before(Phone.prototype, 'dial', function () {
  console.log(
    '{}: Calling {}...',
    meld.joinpoint().method,
    meld.joinpoint().args[0].name
  );
});

meld.around(Phone.prototype, 'dial', function (joinPoint) {
  var start = new Date().getTime();
  var message = joinPoint.proceed();
  var end = new Date().getTime();
  console.log('Call lasted: {} milliseconds!', (end - start));
  return joinPoint.args[0].name + ': '+ message;
});

meld.afterThrowing(Phone.prototype, 'dial', function (error) {
  console.log('Error: {}', error);
});

var friend = {
  name: 'hoge',
  picksUp: 'fuga'
};

var phone = new Phone();
phone.dial(friend);
