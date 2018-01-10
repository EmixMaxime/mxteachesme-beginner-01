<?php
/*
|--------------------------------------------------------------------------
| Php helpers to deal with http request/response.
|--------------------------------------------------------------------------
|
*/

function redirect(String $url, bool $permanent = false): void
{
    if (headers_sent() === false)
    {
        header('Location: ' . $url, true, ($permanent === true) ? 301 : 302);
    }

    exit();
}
