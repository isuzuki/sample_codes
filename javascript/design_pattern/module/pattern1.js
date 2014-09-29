var Person = (function() {
  var _name = 'hoge';
  var _age = '18';

  function _sayHello() {
    console.log('Hello: '+ _name +'です');
  }

  return {
    sayHello: _sayHello
  };
})();

Person.sayHello();

// consoleの出力結果は変わらない
Person._name = 'fuga';
Person.sayHello();
