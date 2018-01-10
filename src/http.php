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

function getBodyFromExpectedFields(array $expectedFields): array
{
    $params = [];

    foreach($expectedFields as $fieldName) {
        $value = $_POST[$fieldName] ?? null;
        $params[$fieldName] = $value;
    }

    return $params;
}

function getError(String $fieldName): ?String
{
    global $errors;

    if (!is_null($errors) && count($errors) > 0) {
        return $errors[$fieldName] ?? null;
    }

    return null;
}

function getValue(String $fieldName): String
{
    global $errors, $params;

    if (!is_null($errors) && count($errors) > 0) {
        return $params[$fieldName] ?? '';
    }

    return '';
}
