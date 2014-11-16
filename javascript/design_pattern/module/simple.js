var Person = {
  name: 'hoge',
  age: '18',
  sayHello: function() {
    console.log('Hello: '+ this.name +'です');
  }
};

Person.sayHello();

// consoleの出力結果が変わる
Person.name = 'fuga';
Person.sayHello();
