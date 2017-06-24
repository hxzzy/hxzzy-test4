<?php namespace Zzy\Test\Facades;

use Illuminate\Support\Facades\Facade;

class Test extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'test';
    }
}