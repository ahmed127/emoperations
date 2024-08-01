<?php

namespace Ahmed127\Emoperations;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Ahmed127\Emoperations\Skeleton\SkeletonClass
 */
class EmoperationsFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'emoperations';
    }
}
