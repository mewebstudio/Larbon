<?php

namespace Mews\Larbon\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Mews\Captcha
 */
class Larbon extends Facade {

    protected static function getFacadeAccessor() { return 'larbon'; }

}
