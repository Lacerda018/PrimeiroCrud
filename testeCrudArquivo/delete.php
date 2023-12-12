<?php

$nome = $_POST['nome'];
$senha = $_POST['senha'];

if (!file_exists(sprintf('%s/users.json', __DIR__))) {
    echo 'Banco de dados não encontrado.';

    return;
}

$usuarios = json_decode(file_get_contents(sprintf('%s/users.json', __DIR__)), true);

$usuarioParaAtualizar = null;

foreach ($usuarios as $key => $usuario) {
    if ($usuario['email'] === $_POST['email']) {
        $usuarioParaAtualizar = $key;

        break;
    }
}

if (is_null($usuarioParaAtualizar)) {
    echo 'Usuário não encontrado.';

    return;
}

if ($_POST['senha'] === $usuarios[$usuarioParaAtualizar]['senha']) {
    array_splice($usuarios[$usuarioParaAtualizar], 1);

    if (file_put_contents(sprintf('%s/users.json', __DIR__), json_encode($usuarios))) {
        echo 'Usuário deletado com sucesso!';
    }
}

