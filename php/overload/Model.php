<?php

/**
 * laravelのModelを参考にしたサンプル
 * @see https://github.com/laravel/framework/blob/5.2/src/Illuminate/Database/Eloquent/Model.php
 */
class Model
{
    protected $attributes = [];

    public function __construct()
    {
        if (preg_match_all('/(?<=^|;)get([^;]+?)Attribute(;|$)/', implode(';', get_class_methods(__CLASS__)), $matches)) {
            foreach ($matches[1] as $match) {
                $this->attributes[$this->snake($match)] = 'get'. $match .'Attribute';
            }
        }
    }

    public function __get($key)
    {
        $attribute = $this->getAttribute($key);
        if (!$attribute) {
            return null;
        }

        return $this->$attribute();
    }

    protected function getAttribute($key)
    {
        if (array_key_exists($key, $this->attributes)) {
            return $this->attributes[$key];
        }

        return null;
    }

    public function getTestAttribute()
    {
        return 'value';
    }

    public function getUpperTestAttribute()
    {
        $value = $this->test;
        return strtoupper($value);
    }

    protected function snake($value)
    {
        if (!ctype_lower($value)) {
            $value = preg_replace('/\s+/', '', $value);
            $value = strtolower(preg_replace('/(.)(?=[A-Z])/', '$1' .'_', $value));
        }

        return $value;
    }
}
