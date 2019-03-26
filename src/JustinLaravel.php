<?php

namespace JustinLaravel;

use Config;
use Justin\Justin;

class JustinLaravel extends Justin
{

    public function __construct()
    {

        parent::__construct(

            config('justin-laravel.language'),

            config('justin-laravel.sandbox'),

            config('justin-laravel.version')

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

            );

    }

}
