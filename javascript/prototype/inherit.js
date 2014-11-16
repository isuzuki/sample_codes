function Hoge(txt) {
  this.txt = txt;
}

Hoge.prototype.fuga = function() {
  console.log(this.txt);
};

function Foo() {
}

Foo.prototype = new Hoge('hello');
var foo = new Foo;
foo.fuga();
