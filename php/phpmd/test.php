<?php

class test
{
    public function test_function($test_id)
    {
        $foo;
        echo $test_id."\n";
    }
}

(new Test())->test_function(12345);
