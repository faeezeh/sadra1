<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as Middleware;

class VerifyCsrfToken extends Middleware
{
    /**
     * The URIs that should be excluded from CSRF verification.
     *
     * @var array
     */
    protected $except = [
        '/token-mobile',
        '/verify-mobile',
        '/token-mobile2',
        '/verify-mobile2',
        '/Api3'
    ];
}
