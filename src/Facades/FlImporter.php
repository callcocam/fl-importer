<?php

namespace Callcocam\FlImporter\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Callcocam\FlImporter\FlImporter
 */
class FlImporter extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Callcocam\FlImporter\FlImporter::class;
    }
}
