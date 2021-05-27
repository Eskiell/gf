<?php

namespace Eskiell\Gf;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Eskiell\Gf\Skeleton\SkeletonClass
 */
class GfFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'Gf';
    }
}
