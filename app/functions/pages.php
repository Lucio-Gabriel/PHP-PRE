<?php

function load()
{
    // Pegando o valro da minha URL
    // $page = filter_input(INPUT_GET, 'page', FILTER_SANITIZE_STRING);
    $page = $_GET['page'] ?? '';

    // Se der certo pega a página correta se não pega a pagina a home
    $page = (!$page) ? 'pages/home.php' : "pages/{$page}.php";

    // Se não existir nenhuma página
    if (!file_exists($page)) {
        throw new \Exception("Opa, alguma coisa errada aconteceu");
    }

    // Se deu tudo certo
    return $page;
}