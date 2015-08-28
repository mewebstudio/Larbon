<?php

namespace Mews\Larbon;

/**
 *
 * Laravel 5 Larbon package
 * @copyright Copyright (c) 2015 MeWebStudio
 * @version 1.0.0
 * @author Muharrem ERİN
 * @contact me@mewebstudio.com
 * @web http://www.mewebstudio.com
 * @date 2015-04-03
 * @license http://www.opensource.org/licenses/mit-license.php The MIT License
 *
 */

use DateTimeZone;
use Illuminate\Config\Repository;
use Carbon\Carbon;

/**
 * Class Larbon
 * @package Mews\Larbon
 */
class Larbon
{

    /**
     * @var Repository
     */
    protected $config;

    /**
     * @var Carbon
     */
    protected $carbon;

    /**
     * @var string
     */
    protected $locale;

    /**
     * @var string
     */
    protected $timezone;

    /**
     * Constructor
     *
     * @param Repository $config
     * @param Carbon $carbon
     */
    public function __construct(
        Repository $config,
        Carbon $carbon
    )
    {
        $this->config = $config;
        $this->carbon = $carbon;
    }

    /**
     * @param null $now
     * @param null $timezone
     * @return static Carbon::now()
     */
    public function now($now = null, $timezone = null)
    {
        $this->locale = 'en';
        $this->timezone = 'Europe/London';

        if ($this->config->has('app.locale'))
        {
            $this->locale = $this->config->get('app.locale');
        }
        if ($this->config->has('app.timezone'))
        {
            $this->timezone = $this->config->get('app.timezone');
        }

        $this->timezone = new DateTimeZone($this->timezone);

        $this->carbon->setLocale($this->locale);

        return $this->carbon->now($now, $this->timezone);
    }

}
