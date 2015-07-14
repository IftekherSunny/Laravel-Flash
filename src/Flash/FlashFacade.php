<?php

namespace Sun\Flash;

use Illuminate\Support\Facades\Facade;

class FlashFacade extends Facade
{

    protected static function getFacadeAccessor()
    {
        return 'flash';
    }
}
