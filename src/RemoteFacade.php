<?php

namespace Webike\Remote;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Webike\Remote\RemoteManager
 * @see \Webike\Remote\Connection
 */
class RemoteFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'remote';
    }
}
