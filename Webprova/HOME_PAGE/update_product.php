<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Atualize seus produtos </title>
</head>
<body>
        <h1> Atualize seus produtos </h1>

        <form action="update_produ.php" method="POST">
    <input type="hidden" name="nome" value="<?= $_GET['nome'] ?>">
    <input type="text" name="marca" placeholder="marca">
    <input type="text" name="preço" placeholder="preço">
    <input type="text" name="tipo" placeholder="tipo">
    <button> Enviar </button>
        </form>

</body>
</html>