<?php

namespace Rajentrivedi\TokenizerX\Tests\Feature;

use Rajentrivedi\TokenizerX\TokenizerX;

it('counts tokens', function () {
    $count = TokenizerX::count('hellow, how are you?');
    $this->assertSame(7, $count);
});

it('counts emoji tokens', function () {
    $count = TokenizerX::count('🤚🏾');
    $this->assertSame(6, $count);
});

it('counts lorem tokens', function () {
    $prompt = "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.";
    $count = TokenizerX::count($prompt);
    $this->assertSame(118, $count);
});

it('counts special character tokens', function () {
    $count = TokenizerX::count('@');
    $this->assertSame(1, $count);
});
