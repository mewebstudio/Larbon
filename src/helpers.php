<?php

if ( ! function_exists('larbon'))
{
    /**
     * @param null $now
     * @param null $timezone
     * @return \Carbon\Carbon ;
     */
    function larbon($now = null, $timezone = null)
    {
        return app('larbon')->now($now = null, $timezone = null);
    }
}
