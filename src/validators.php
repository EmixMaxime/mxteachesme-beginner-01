<?php

function nonEmptyString(String $str): ?String
{
    if (empty($str)) return 'Veuillez remplir ce champ';

    return null;
}

function password(String $pass): ?String
{
    if (strlen($pass) < 6) return 'Mot de passe est trop petit';

    return null;
}
