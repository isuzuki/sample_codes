def call(object)
  puts object.sound
end

class Duck
  def sound
    'quack'
  end
end

class Cat
  def sound
    'meow'
  end
end

call(Duck.new)
call(Cat.new)
