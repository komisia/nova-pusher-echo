<?php

namespace Komisia\NovaPusherEcho;

class NovaPusherEcho
{
    public static function config($key, $default = null)
    {
        return config('broadcasting.connections.' .
            config('broadcasting.nova', config('broadcasting.default')) . '.' . $key, $default);
    }
}
