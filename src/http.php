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

function validator(array $validator, array $params): array
{
    $errors = [];

    foreach($validator as $fieldName => $validatorString) {
        $validators = explode('!', $validatorString);

        $val = $params[$fieldName];

        foreach($validators as $validator) {
            $fail = $validator($val);

            if (!is_null($fail)) {
                $errors[$fieldName] = $fail;
            }
        }
    }

    return $errors;
}
