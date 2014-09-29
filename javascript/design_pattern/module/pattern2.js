(function() {
  var Person = {};

  Person.name = 'hoge';
  Person.age = '18';

  Person.sayHello = function() {
    console.log('Hello: '+ this.name +'です');
  }

  window.Person = Person;
})();

Person.sayHello();
