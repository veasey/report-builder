<?php

namespace Veasey\ReportBuilder\Facades;

use Illuminate\Support\Facades\Facade as IlluminateFacade;

class ReportArray extends IlluminateFacade
{
    protected static function getFacadeAccessor()
    {
        return 'array.generator';
    }
}
