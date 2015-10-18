<?php

class Users implements ArrayAccess, IteratorAggregate
{
    protected $container = [];

    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    public function offsetGet($offset)
    {
        return $this->offsetExists($offset) ? $this->container[$offset] : null;
    }

    public function offsetSet($offset, $value)
    {
        $this->container[$offset] = $value;
    }

    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    public function getIterator()
    {
        foreach ($this->container as $key => $value) {
            yield $key => $value;
        }
    }
}
