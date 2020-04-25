<?php

namespace Veasey\ReportBuilder\Facades;

use Illuminate\Support\Facades\Facade as IlluminateFacade;

class ReportCollection extends IlluminateFacade
{
    protected static function getFacadeAccessor()
    {
        return 'collection.generator';
    }
}
