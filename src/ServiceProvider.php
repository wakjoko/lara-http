<?php

namespace Wakjoko\LaraHttp;

use Illuminate\Support\ServiceProvider as Base;
use Wakjoko\LaraHttp\Http\Client\Factory;

Class ServiceProvider extends Base
{
    public function register()
    {
        $this->app->bind('lara-http', Factory::class);
    }
}