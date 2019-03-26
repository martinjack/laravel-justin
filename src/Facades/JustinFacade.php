<?php

namespace JustinLaravel\Facades;

use Illuminate\Support\Facades\Facade;

class JustinFacade extends Facade
{

    protected static function getFacadeAccessor()
    {

        return 'justinLaravel';

    }

}
