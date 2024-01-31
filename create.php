<?php

$data = [
    'nome' => $_POST['nome'],
    'email' => $_POST['email'],
    'senha' => $_POST['senha'],
    $senhaCrypto = password_hash($_POST['senha'], PASSWORD_DEFAULT)
];

$email = $_POST['email'];

if (!file_exists(sprintf('%s/users.json', __DIR__))) {
    file_put_contents(sprintf('%s/users.json', __DIR__), json_encode([$data]));

    $emails = json_decode(file_get_contents(sprintf( '%s/users.json', __DIR__)));
    foreach ($emails as $emailexistente){
        if ($emailexistente === $data){
            echo "Este e-mail já está cadastrado";
        }
    }

    echo "Cadastro efetuado com sucesso!";

    return;
}

$usuariosAtuaisArray = json_decode(file_get_contents(sprintf('%s/users.json', __DIR__)));



$usuariosAtuaisArray[] = $data;

if (file_put_contents(sprintf('%s/users.json', __DIR__), json_encode($usuariosAtuaisArray))) {
    echo "Cadastro efetuado com sucesso!";
}


// Função para verificar se o email já existe no arquivo
//function emailExists($email, $filename) {
//    $emails = file($filename, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
//    foreach ($emails as $existingEmail) {
//        if (trim($existingEmail) === $email) {
//            return true; // Email já existe
//        }
//    }
//    return false; // Email não encontrado
//}