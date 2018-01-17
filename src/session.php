<?php


session_start();

function addFlashMessage(String $key, String $message): void
{
    if (!isset($_SESSION['flash'])) {
      $_SESSION['flash'] = [];
    }

    $_SESSION['flash'][$key] = $message;
}

function getFlashMessage(String $key): ?String
{
    if (isset($_SESSION['flash'])) {
        $info = $_SESSION['flash'][$key] ?? null;
        if (!is_null($info)) {
            unset($_SESSION['flash'][$key]);
            return $info;
        }
    }

    return null;
}

function getUserFromSession(): ?array
{
	return $_SESSION['user'] ?? null;
}
