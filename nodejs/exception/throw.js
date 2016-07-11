'use strict';

function throwError() {
  throw 'throw Error';
}

function throwNewError() {
  throw new Error('throw Error Object');
}

// catch thrown string
try {
  throwError();
} catch(e) {
  console.log('catch: '+e);
}

// catch thrown error object
try {
  throwNewError();
} catch(o_o) {
  console.log('catch: '+o_o);
  console.log("CallStack:\n" + o_o.stack.split("\n").slice(2).join("\n") );
}
