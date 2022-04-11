<?php

namespace skobzr\FooBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class FooBundle extends Bundle
{
    public function getPath(): string
    {
        return \dirname(__DIR__);
    }
}
