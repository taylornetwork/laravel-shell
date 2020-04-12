<?php


namespace TaylorNetwork\Shell\Facades;

use Illuminate\Support\Facades\Facade;

class ShellFacade extends Facade
{
    public static function getFacadeAccessor()
    {
        return 'Shell';
    }
}