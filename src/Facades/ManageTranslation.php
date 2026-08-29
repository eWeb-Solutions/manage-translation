<?php

declare(strict_types=1);

namespace ewebsolutions\ManageTranslation\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \ewebsolutions\ManageTranslation\ManageTranslation
 */
class ManageTranslation extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \ewebsolutions\ManageTranslation\ManageTranslation::class;
    }
}
