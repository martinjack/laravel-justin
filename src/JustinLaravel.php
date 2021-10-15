<?php

namespace JustinLaravel;

use Config;
use Justin\Justin;

/**
 *
 * Class JustinLaravel
 *
 * @package JustinLaravel;
 *
 */
class JustinLaravel extends Justin
{

    public function __construct($language = '', $sandbox = false, $version = 'v2', $timeout = 60, $connect_timeout = 60, $timezone = 'UTC')
    {
        ###
        # SET CONFIG
        #
        $language = !empty($language) ? $language : config('justin-laravel.language');
        if(!in_array($language, ['UA', 'RU', 'EN'])){
            $language = config('justin-laravel.language');
        }

        $sandbox = config('justin-laravel.sandbox') == $sandbox ? $sandbox : config('justin-laravel.sandbox');

        $version = config('justin-laravel.version') == $version ? $version : config('justin-laravel.version');

        $timeout = config('justin-laravel.timeout') == $timeout ? $timeout : config('justin-laravel.timeout');

        $connect_timeout = config('justin-laravel.connect_timeout') == $connect_timeout ? '' : config('justin-laravel.connect_timeout');

        $timezone = config('justin-laravel.timezone') == $timezone ? $timezone : config('justin-laravel.timezone');
        #
        parent::__construct(

            $language,

            $sandbox,

            $version,

            $timeout,

            $connect_timeout,

            $timezone

        );

        return $this
            ->setAuthLogin(

                config('justin-laravel.auth_login')

            )
            ->setAuthPassword(

                config('justin-laravel.auth_password')

            )
            ->setKey(

                config('justin-laravel.key')

            )
            ->setLogin(

                config('justin-laravel.login')

            )
            ->setPassword(

                config('justin-laravel.password')

            )->orderVersion(

            config('justin-laravel.sandbox'), config('laravel-justin.orderVersion')

        );

    }

}
