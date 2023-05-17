<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>

        <h1> Faça seu login </h1>

        <?php 
              if(isset($_GET["error"])): ?>
              <span> <?= $_GET["error"] ?></span>

            <?php endif ?>
            
        <form action="auth.php" method="POST">
        <input type="text" name="email" placeholder=" E-mail">
        <input type="text" name="password" placeholder="password">
        
        <button> enviar </button>
        </form>

    <a href="../CADASTRO/register_user.php"> Não tem conta? faça seu cadastro aqui</a>

        <div>
        <a href="../USERS/update_user.php"> Atualize seus dados </a>
        </div>

    <div>
</body>
</html>