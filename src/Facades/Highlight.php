<?php

namespace Tojoo\Highlight\Facades;

use Illuminate\Support\Facades\Facade;

class Highlight extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor(): string
    {
        return 'highlight.io';
    }
}
