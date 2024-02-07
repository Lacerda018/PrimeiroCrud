<?php

$data = [
    'nome' => $_POST['nome'],
    'email' => $_POST['email'],
    'senha' => password_hash($_POST['senha'], PASSWORD_DEFAULT)
];

$email = $_POST['email'];

function emailExiste($email, $nomeArquivo)
{
    $emails = json_decode(file_get_contents($nomeArquivo), true);
    foreach ($emails as $usuario){
        if ($usuario['email'] === $email){
            return true;
        }
    }
    return false;
}

$nomeArquivo = sprintf('%s/users.json', __DIR__);

if(emailExiste($email, $nomeArquivo)){
    echo "Este e-mail já está cadastrado";
    return;
}

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
