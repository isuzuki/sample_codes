<?php

/**
 * overloadのサンプル
 */
class Sample
{
    /**
     * func_get_argsを利用
     */
    public function useFuncGetArgs()
    {
        $args = func_get_args();
        return $this->convertNumToEnglish(count($args));
    }

    /**
     * 可変長引数(require PHP >= 5.6)
     */
    public function useVariableLengthArgs(...$args)
    {
        return $this->convertNumToEnglish(count($args));
    }

    public function __call($method, $args)
    {
        if ($method === 'overloadSample') {
            return $this->convertNumToEnglish(count($args));
        }

        return;
    }

    protected function convertNumToEnglish($num)
    {
        $result = 'zero';
        // sampleなので1, 2だけ対応
        switch ($num) {
            case 1:
                $result = 'one';
                break;
            case 2:
                $result = 'two';
                break;
        }

        return $result;
    }
}
