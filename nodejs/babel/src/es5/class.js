'use strict';

function User(name) {
  this._name = name;
}

User.prototype = Object.create(null, {
  say: {
    value: function() {
      return 'My name is ' + this._name;
    }
  }
});

var user = new User('Alice');
console.log(user.say());
