<?php

$data = [
    'nome' => $_POST['nome'],
    'email' => $_POST['email'],
    'senha' => $_POST['senha'],
    $senhaCrypto = password_hash($_POST['senha'], PASSWORD_DEFAULT)
];

if (!file_exists(sprintf('%s/users.json', __DIR__))) {
    file_put_contents(sprintf('%s/users.json', __DIR__), json_encode([$data]));

    echo "Cadastro efetuado com sucesso!";

    return;
}

$usuariosAtuaisArray = json_decode(file_get_contents(sprintf('%s/users.json', __DIR__)));

$usuariosAtuaisArray[] = $data;

if (file_put_contents(sprintf('%s/users.json', __DIR__), json_encode($usuariosAtuaisArray))) {
    echo "Cadastro efetuado com sucesso!";
}