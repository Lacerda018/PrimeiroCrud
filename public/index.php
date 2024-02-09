<?php
use \app\library\GoogleClient;
use \app\library\Authenticate;
require '../vendor/autoload.php';

$googleClient = new GoogleClient;
$googleClient->init();
if($googleClient->authorized()){
    $auth = new Authenticate;
    $auth->authGoogle($googleClient->getData());
};

$authUrl = $googleClient->generateAuthLink();


?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../style.css">
</head>
<body>
<div class="limiter">
    <div class="container-login100">

        <div class="wrap-login100">
            <div class="login100-pic js-tilt" data-tilt>
                <img src="../Lacaerda.png" alt="IMG">
            </div>

            <div class="formulario">
                <form method="post" action="index.php" class="mb-3">
                    <label for="email">E-mail:</label>
                    <input type="email" name="email" required class="form-control form-control-sm">

                    <label for="senha">Senha:</label>
                    <input type="password" name="senha" required class="form-control form-control-sm">

                    <input type="submit" value="Logar" class="btn btn-primary">
                    <a href="<?php echo $authUrl; ?>">Logar com o google</a>
                </form>
                <div class="container-login100-form-btn">
                    <button class="login100-form-btn" onclick="">
                        <a href="../create.html">Registre-se</a>
                    </button>
                    <button class="login100-form-btn">
                        <a href="../update.html">Atualizar</a>
                    </button>
                    <button class="login100-form-btn" onclick="">
                        <a href="../delete.html">Deletar</a>
                    </button>
                </div>
            </div>

        </div>

    </div>
</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>
