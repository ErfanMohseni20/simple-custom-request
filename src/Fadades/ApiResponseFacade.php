<?php

namespace ErfanMohseni20\SimpleCustomRequest\Facades;

use Illuminate\Support\Facades\Facade;

class ApiResponseFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'api-response';
    }
}