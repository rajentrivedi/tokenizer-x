<?php

namespace Rajentrivedi\TokenizerX;

use Yethee\Tiktoken\EncoderProvider;

class TokenizerX
{
    public static function tokens($prompt, $model = null): array
    {
        if ($model != null) {
            $provider = new EncoderProvider();
            $encoder = $provider->getForModel($model);
            $tokens = $encoder->encode($prompt);

            return $tokens;
        }
        $calculator = new TokenCalculator();

        return $calculator->gpt_encode($prompt);
    }

    public static function count($prompt, $model = null): int
    {
        if ($model != null) {
            $provider = new EncoderProvider();
            $encoder = $provider->getForModel($model);
            $tokens = $encoder->encode($prompt);

            return count($tokens);
        }
        $calculator = new TokenCalculator();

        return count($calculator->gpt_encode($prompt));
    }
}
