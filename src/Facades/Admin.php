<?php

namespace RedJasmine\Admin\Facades;

use Illuminate\Support\Facades\Facade;


/**
 * @method static user()
 */
class Admin extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor(): string
    {
        return 'red-jasmine.admin';
    }
}
