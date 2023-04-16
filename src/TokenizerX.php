<?php

namespace Rajentrivedi\TokenizerX;

class TokenizerX
{

    public static function tokens($prompt) : array
    {
        $calculator = new TokenCalculator();
        return $calculator->gpt_encode($prompt);
    }

    public static function count($prompt) : int
    {
        $calculator = new TokenCalculator();
        return count($calculator->gpt_encode($prompt));
    }
}
