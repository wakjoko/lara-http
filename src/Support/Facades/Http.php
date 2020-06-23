<?php

namespace Wakjoko\LaraHttp\Support\Facades;

use Illuminate\Support\Facades\Facade;
use Wakjoko\LaraHttp\Http\Client\Factory;

/**
 * @method static \Wakjoko\LaraHttp\Http\Client\PendingRequest asJson()
 * @method static \Wakjoko\LaraHttp\Http\Client\PendingRequest asForm()
 * @method static \Wakjoko\LaraHttp\Http\Client\PendingRequest attach(string $name, string $contents, string|null $filename = null, array $headers = [])
 * @method static \Wakjoko\LaraHttp\Http\Client\PendingRequest asMultipart()
 * @method static \Wakjoko\LaraHttp\Http\Client\PendingRequest bodyFormat(string $format)
 * @method static \Wakjoko\LaraHttp\Http\Client\PendingRequest contentType(string $contentType)
 * @method static \Wakjoko\LaraHttp\Http\Client\PendingRequest acceptJson()
 * @method static \Wakjoko\LaraHttp\Http\Client\PendingRequest accept(string $contentType)
 * @method static \Wakjoko\LaraHttp\Http\Client\PendingRequest retry(int $times, int $sleep = 0)
 * @method static \Wakjoko\LaraHttp\Http\Client\PendingRequest withHeaders(array $headers)
 * @method static \Wakjoko\LaraHttp\Http\Client\PendingRequest withBasicAuth(string $username, string $password)
 * @method static \Wakjoko\LaraHttp\Http\Client\PendingRequest withDigestAuth(string $username, string $password)
 * @method static \Wakjoko\LaraHttp\Http\Client\PendingRequest withToken(string $token, string $type = 'Bearer')
 * @method static \Wakjoko\LaraHttp\Http\Client\PendingRequest withCookies(array $cookies, string $domain)
 * @method static \Wakjoko\LaraHttp\Http\Client\PendingRequest withoutRedirecting()
 * @method static \Wakjoko\LaraHttp\Http\Client\PendingRequest withoutVerifying()
 * @method static \Wakjoko\LaraHttp\Http\Client\PendingRequest timeout(int $seconds)
 * @method static \Wakjoko\LaraHttp\Http\Client\PendingRequest withOptions(array $options)
 * @method static \Wakjoko\LaraHttp\Http\Client\PendingRequest beforeSending(callable $callback)
 * @method static \Wakjoko\LaraHttp\Http\Client\Response get(string $url, array $query = [])
 * @method static \Wakjoko\LaraHttp\Http\Client\Response post(string $url, array $data = [])
 * @method static \Wakjoko\LaraHttp\Http\Client\Response patch(string $url, array $data = [])
 * @method static \Wakjoko\LaraHttp\Http\Client\Response put(string $url, array $data = [])
 * @method static \Wakjoko\LaraHttp\Http\Client\Response delete(string $url, array $data = [])
 * @method static \Wakjoko\LaraHttp\Http\Client\Response send(string $method, string $url, array $options = [])
 * @method static \Wakjoko\LaraHttp\Http\Client\PendingRequest stub(callable $callback)
 * @method static \Wakjoko\LaraHttp\Http\Client\ResponseSequence fakeSequence(string $urlPattern = '*')
 *
 * @see \Wakjoko\LaraHttp\Http\Client\Factory
 */
class Http extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return Factory::class;
    }
}
