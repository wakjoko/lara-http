# Laravel Http Client
This package provides [Laravel v7 Http Client](https://laravel.com/docs/7.x/http-client) for older Laravel versions up to 6.

## Installation

Install the package with Composer:

	composer require wakjoko/lara-http

# Usage
Please refer to [Laravel v7 docs](https://laravel.com/docs/7.x/http-client) for more usage examples.
```
<?php

namespace App\Http\Clients;

use Wakjoko\LaraHttp\Support\Facades\Http;

class Httpbin
{
    public function test($method, $endpoint)
    {
        return Http::send($method, $endpoint);
    }
}
```
Just make sure to replace the namespace from [Laravel v7 docs](https://laravel.com/docs/7.x/http-client)
```
use Illuminate\Support\Facades\Http;
```
and replace it with the namespace provided in this package
```
use Wakjoko\LaraHttp\Support\Facades\Http;
```