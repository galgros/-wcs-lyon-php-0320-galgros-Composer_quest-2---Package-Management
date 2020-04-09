<?php
namespace App\Wcs;

class Hello
{

    const SENTENCE = "Hello World!";

    public function talk() : string
    {
        return self::SENTENCE;
    }
}
