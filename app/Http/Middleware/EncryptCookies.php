<?php
declare(strict_types=1);

namespace IntelliHR\Http\Middleware;

use Illuminate\Cookie\Middleware\EncryptCookies as BaseEncrypter;

class EncryptCookies extends BaseEncrypter
{
    protected $except = [
    ];
}
