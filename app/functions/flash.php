<?php

// Adiciona a mensagem
function flash($key, $message, $type = 'danger')
{
    if (!isset($_SESSION['flash'][$key])) {
        $_SESSION['flash'][$key] = '<div class="alert alert-' .$type. '">' . $message . '</div>';
    }
}

// Resgata a mensagem
function get($key)
{
    if (isset($_SESSION['flash'][$key])) {
        $message = $_SESSION['flash'][$key];

        // Deleta a mensage quando fazemos refresh
        unset($_SESSION['flash']['key']);

        return $message ?? '';
    }
}