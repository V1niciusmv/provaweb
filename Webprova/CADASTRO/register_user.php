<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register User</title>
</head>
<body>
        <h1> Faça seu registro </h1>

        <?php if (isset($_GET["error"])): ?>
            <span> <?= $_GET["error"] ?></span>
        
        <?php endif?>
        
        <form action="register.php" method="POST">
        <input type="text" name="name"  placeholder=" Seu nome ">
        <input type="text" name="Email" placeholder=" Seu E-mail">
        <input type="text" name="password" placeholder="Sua senha">
        <button> Cadastrar </button>
        </form>

        <button>
            <a href="../LOGIN/login.php"> Voltar </a>
        </button>
</body>
</html>