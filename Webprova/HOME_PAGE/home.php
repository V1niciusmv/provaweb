<?php 
 session_start();

 if (!isset($_SESSION ["email"])){
    header("location: ../LOGIN/login.php");
 }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Home </title>
</head>
<body>
    <h1>Seja bem vindo,<?= $_SESSION["name"] ?> </h1>

    <table>
        <th>
            <tr>
                <td> Nome </td>
                <td> Marca </td>
                <td> Preço </td>
                <td> Tipo</td>
            </tr>
        </th>
        
        <?php $handle = fopen("product.csv", 'r') ?>

        <?php while ($row = fgetcsv($handle)): ?>
            <tr>
                <td> <?= $row[0] ?> </td>
                <td> <?= $row[1] ?> </td>
                <td> <?= $row[2] ?> </td>
                <td> <?= $row[3] ?> </td>
                <td> <a href="delete_product.php?nome=<?= $row[0] ?>"> delete seu produto</a></td>
                <td> <a href="update_product.php?nome=<?= $row[0] ?>"> Atualize seu produto </a></td>
            </tr>

            <?php endwhile?>
        </table>

        <h1> Crie seus produtos </h1>

    <form action="creat.php" method="POST">
    <input type="text" name="nome" placeholder="nome">
    <input type="text" name="marca" placeholder="marca">
    <input type="text" name="preço" placeholder="preço">
    <input type="text" name="tipo" placeholder="tipo">
    
    <button> Enviar </button>
    </form>

    <div>
        <a href="../USERS/delete_user.php"> Delete sua conta </a>
    </div>

    <div>
        <a href="../USERS/logout.php"> Sair da sessão </a>
    </div>

</body>
</html>