<?php

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

$usuarios[$usuarioParaAtualizar]['nome'] = $_POST['nome'];
$usuarios[$usuarioParaAtualizar]['senha'] = $_POST['senha'];

if (file_put_contents(sprintf('%s/users.json', __DIR__), json_encode($usuarios))) {
    echo 'Update efetuado com sucesso!';
}
